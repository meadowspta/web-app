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

from .forms import CheckInForm
from .models import Reservation, ReservationTransaction, ReservationTransactionItem


def home(request):
    payload = {
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

@permission_required('crabfeed.view_crabfeed_dashboard')
def dashboard(request):
    # donations = PayPalTransactionItem.objects.filter(item_title='donation').aggregate(sum=Sum('gross'))
    # grand_total = PayPalTransactionItem.objects.aggregate(sum=Sum('gross'))

    payload = {
        'totals': {
            'crabfeed_tickets': Reservation.get_total_party_count(),
            'raffle_tickets': Reservation.get_total_raffle_ticket_count('single'),
            'raffle_ticket_pack': Reservation.get_total_raffle_ticket_count('5pack'),
            'donations': Reservation.get_total_donation_count(),
        #     'grand_total': grand_total['sum'] if grand_total['sum'] is not None else 0,
        }
    }

    return render_to_response('crabfeed/dashboard.html', payload, context_instance=RequestContext(request))

@permission_required('crabfeed.view_crabfeed_checkin')
def check_in(request):
    id_hash = request.GET.get('id')
    source = request.GET.get('source')
    reservation = Reservation.objects.get(id_hash=id_hash)
    form = CheckInForm(request.POST or None, initial={ 'reservation_id': reservation.id })

    if form.is_valid():
        form.save()
        return HttpResponseRedirect('/crabfeed/check-in/confirmation?id=%s&source=%s' % (reservation.id_hash, source))

    payload = {
        'reservation': reservation,
        'form': form,
        'source': source,
    }

    return render_to_response('crabfeed/check-in/index.html', payload, context_instance=RequestContext(request))

@permission_required('crabfeed.view_crabfeed_checkin')
def check_in_confirmation(request):
    id_hash = request.GET.get('id')
    source = request.GET.get('source')
    reservation = Reservation.objects.get(id_hash=id_hash)

    payload = {
        'reservation': reservation,
        'display_search_button': True if source == 'search' else False,
    }

    return render_to_response('crabfeed/check-in/confirmation.html', payload, context_instance=RequestContext(request))

@permission_required('crabfeed.view_crabfeed_checkin')
def check_in_dashboard(request):
    payload = {}
    return render_to_response('crabfeed/check-in/dashboard.html', payload, context_instance=RequestContext(request))

@permission_required('crabfeed.view_crabfeed_checkin_search')
def check_in_search(request):
    payload = {}
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
    if q == 'all':
        search_results = collection.find({}, { '_id': 0 })
    else:
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

def api_transactions(request):
    data = []

    # Filter: Crabfeed Ticket Count.
    crabfeed_ticket_quantity = request.GET.get('crabfeedTicketQuantity')
    if crabfeed_ticket_quantity:
        crabfeed_ticket_quantity = int(crabfeed_ticket_quantity)
        if crabfeed_ticket_quantity < 6:
            # transactions = PayPalTransaction.objects.filter(paypaltransactionitem__item_title='dinner_ticket', paypaltransactionitem__quantity=crabfeed_ticket_quantity)
            reservations = Reservation.objects.filter(party_count=crabfeed_ticket_quantity).order_by('-date')
            pass
        else:
            # transactions = PayPalTransaction.objects.filter(paypaltransactionitem__item_title='dinner_ticket', paypaltransactionitem__quantity__gte=6)
            reservations = Reservation.objects.filter(party_count__quantity__gte=6).order_by('-date')
            pass

    else:
        reservations = Reservation.objects.all().order_by('-date')

    # Filter: Payment Source.
    source = request.GET.get('source')
    if source:
        reservations = reservations.filter(reservationtransaction__source=source)

    # Filter: Payment Type
    payment_type = request.GET.get('paymentType')
    if payment_type:
        reservations = reservations.filter(reservationtransaction__payment_type=payment_type)

    # Convert results.
    for reservation in reservations:
        data.append(reservation.as_api_object())

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

def api_check_in_details(request):
    reservation_data = []

    # reservations = Reservation.objects.all()
    # for reservation in reservations:
    #     data.append(reservation.as_api_object())

    # Check-in full.
    check_in_full_data = []
    for reservation in Reservation.get_full_check_in():
        check_in_full_data.append(reservation.as_api_object())

    # Check-in partial.
    check_in_partial_data = []
    for reservation in Reservation.get_partial_check_in():
        check_in_partial_data.append(reservation.as_api_object())

    # Check-in open.
    check_in_open_data = []
    for reservation in Reservation.get_check_in_open():
        check_in_open_data.append(reservation.as_api_object())

    response_data = {
        'reservations': reservation_data,
        'check_in_count': Reservation.get_check_in_count(),
        'check_in_open_count': Reservation.get_check_in_open_count(),
        'check_in_open': {
            'count': len(check_in_open_data),
            'reservations': check_in_open_data,
        },
        'check_in_partial': {
            'count': len(check_in_partial_data),
            'reservations': check_in_partial_data,
        },
        'check_in_full': {
            'count': len(check_in_full_data),
            'reservations': check_in_full_data,
        },
    }

    response = {
        'statusCode': 200,
        'response': response_data,
    }

    return HttpResponse(json.dumps(response), mimetype='application/json')