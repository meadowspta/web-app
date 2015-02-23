import json
from pymongo import MongoClient
from bson.json_util import dumps, loads

from django.conf import settings
from django.template import RequestContext, Context, loader
from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render_to_response
from django.db.models import Count, Min, Sum, Avg
from django.contrib.auth.decorators import permission_required
from django.db.models import Q

from meta.views import Meta

from .forms import VolunteerSignupForm, NotificationSignupForm
from .models import Reservation, ReservationTransaction, ReservationTransactionItem
from system.models import PayPalTransaction, PayPalTransactionItem


def home(request):
    volunteer_signup_form = VolunteerSignupForm(request.POST or None)

    payload = {
        'volunteer_signup_form': volunteer_signup_form,
        'quantity_range': range(1, 101),
    }

    return render_to_response('crabfeed/home.html', payload, context_instance=RequestContext(request))

def tickets(request):
    payload = {
        'quantity_range': range(1, 101),
    }

    return render_to_response('crabfeed/tickets.html', payload, context_instance=RequestContext(request))

def confirmation(request):
    return render_to_response('crabfeed/confirmation.html', context_instance=RequestContext(request))

def cancellation(request):
    return render_to_response('crabfeed/cancellation.html', context_instance=RequestContext(request))

def save_the_date(request):
    notification_signup_form = NotificationSignupForm(request.POST or None)

    if notification_signup_form.is_valid():
        notification_signup_form.save()
        return HttpResponseRedirect('?confirmation=true')

    payload = {
        'notification_signup_form': notification_signup_form,
        'display_thankyou': request.GET.get('confirmation'),
    }

    return render_to_response('crabfeed/save-the-date.html', payload, context_instance=RequestContext(request))

def test(request):
    payload = {

    }

    return render_to_response('crabfeed/test.html', payload, context_instance=RequestContext(request))

@permission_required('crabfeed.view_crabfeed_dashboard')
def dashboard(request):
    transactions = PayPalTransaction.objects.all().order_by('-date')
    crabfeed_tickets = PayPalTransactionItem.objects.filter(item_title='dinner_ticket').aggregate(sum=Sum('quantity'))
    raffle_tickets = PayPalTransactionItem.objects.filter(item_title='raffle_ticket').aggregate(sum=Sum('quantity'))
    raffle_tickets_pack = PayPalTransactionItem.objects.filter(item_title='raffle_ticket_5_pack').aggregate(sum=Sum('quantity'))
    turkey_trott_tshirts = PayPalTransactionItem.objects.filter(item_title='turkey_trott_tshirt').aggregate(sum=Sum('quantity'))
    donations = PayPalTransactionItem.objects.filter(item_title='donation').aggregate(sum=Sum('gross'))
    grand_total = PayPalTransactionItem.objects.aggregate(sum=Sum('gross'))

    payload = {
        'transactions': transactions,
        'totals': {
            'crabfeed_tickets': crabfeed_tickets['sum'] if crabfeed_tickets['sum'] is not None else 0,
            'raffle_tickets': raffle_tickets['sum'] if raffle_tickets['sum'] is not None else 0,
            'raffle_ticket_pack': raffle_tickets_pack['sum'] if raffle_tickets_pack['sum'] is not None else 0,
            'turkey_trott_tshirts': turkey_trott_tshirts['sum'] if turkey_trott_tshirts['sum'] is not None else 0,
            'donations': donations['sum'] if donations['sum'] is not None else 0,
            'grand_total': grand_total['sum'] if grand_total['sum'] is not None else 0,
        }
    }

    return render_to_response('crabfeed/dashboard.html', payload, context_instance=RequestContext(request))

@permission_required('crabfeed.view_crabfeed_checkin')
def check_in(request):
    id_hash = request.GET.get('id')
    ticket = Ticket.objects.get(id_hash=id_hash)

    payload = {
        'ticket': ticket,
    }

    return render_to_response('crabfeed/check-in/index.html', payload, context_instance=RequestContext(request))

@permission_required('crabfeed.view_crabfeed_checkin_search')
def check_in_search(request):
    payload = {

    }

    return render_to_response('crabfeed/check-in/search.html', payload, context_instance=RequestContext(request))

def search(request):
    return render_to_response('crabfeed/search.html', {}, context_instance=RequestContext(request))

def api_search(request):
    q = request.GET.get('q').lower()
    results = []

    # Setup mongodb.
    mongo_config = settings.DATABASES['mongodb']
    client = MongoClient('mongodb://%s:%s/' % (mongo_config['HOST'], mongo_config['PORT']))
    db = client['meadowspta']
    collection = db['search.transactions'];

    # {email:1, reservation_number:1, score: { $meta: "textScore" } }).limit(10).sort( { score: { $meta: "textScore" } } )
    # search_results = collection.find({ '$text': { '$search': q } }, { '_id': 0, 'keywords': 0, 'score': { '$meta': 'textScore' } }).sort({ 'score': { '$meta': 'textScore' } })
    search_results = collection.find({ '$text': { '$search': q } }, { '_id': 0, 'keywords': 0, 'score': { '$meta': 'textScore' } }).sort('score', { '$meta': 'textScore' })
    for result in search_results:
        results.append(result)

    response = {
        'statusCode': 200,
        'response': results,
    }

    return HttpResponse(json.dumps(response), mimetype='application/json')

def api_tickets(request):
    data = []

    tickets = Ticket.objects.all()
    for ticket in tickets:
        data.append(ticket.as_api_object())

    response = {
        'statusCode': 200,
        'response': data,
    }

    return HttpResponse(json.dumps(response), mimetype='application/json')

def api_volunteer_signup_save(request):
    volunteer_signup_form = VolunteerSignupForm(request.POST or None)
    full_name = request.GET.get('full-name')
    email = request.GET.get('email')

    volunteer_signup_form.save()

    response = {
        'statusCode': 200,
        'full_name': full_name,
        'email': email,
    }

    return HttpResponse(json.dumps(response), mimetype='application/json')

def api_transactions(request):
    data = []

    # Filter: Crabfeed Ticket Count.
    crabfeed_ticket_quantity = request.GET.get('crabfeedTicketQuantity')
    if crabfeed_ticket_quantity:
        crabfeed_ticket_quantity = int(crabfeed_ticket_quantity)
        if crabfeed_ticket_quantity < 6:
            transactions = PayPalTransaction.objects.filter(paypaltransactionitem__item_title='dinner_ticket', paypaltransactionitem__quantity=crabfeed_ticket_quantity)
        else:
            transactions = PayPalTransaction.objects.filter(paypaltransactionitem__item_title='dinner_ticket', paypaltransactionitem__quantity__gte=6)

    else:
        transactions = PayPalTransaction.objects.all().order_by('-date')

    # Filter: Payment Source.
    source = request.GET.get('source')
    if source:
        transactions = transactions.filter(source=source)

    # Filter: Seller
    seller = request.GET.get('seller')
    if seller:
        transactions = transactions.filter(seller_id=seller)

    # Filter: Seller
    payment_type = request.GET.get('paymentType')
    if payment_type:
        transactions = transactions.filter(payment_type=payment_type)

    # Filter: Information needed.
    info_needed = request.GET.get('infoNeeded')
    if info_needed is not None:
        transactions = transactions.filter(Q(paypaltransactionoverride__name=None)|Q(paypaltransactionoverride__name='')|Q(paypaltransactionoverride__from_email_address=None)|Q(paypaltransactionoverride__from_email_address=None))

    # Convert results.
    for transaction in transactions:
        data.append(transaction.as_api_object())

    response = {
        'statusCode': 200,
        'response': data,
    }

    return HttpResponse(json.dumps(response), mimetype='application/json')

def api_reservation(request):
    data = []

    reservations = Reservation.objects.all()
    for reservation in reservations:
        data.append(reservation.as_api_object())

    response = {
        'statusCode': 200,
        'response': data,
    }

    return HttpResponse(json.dumps(response), mimetype='application/json')
