import datetime
from django.template import RequestContext, Context, loader
from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render_to_response
from meta.views import Meta
from event.models import Event


def list(request):
    exclude_date = datetime.datetime.now() - datetime.timedelta(hours=24)
    events = Event.objects.all().filter(is_published=1).exclude(start_date__lt=exclude_date).order_by('start_date')

    payload = {
        'events': events,
    }

    return render_to_response('event/list.html', payload, context_instance=RequestContext(request))

def view(request, slug):
    event = Event.objects.get(slug=slug)
    upcoming_events = Event.get_upcoming_events({ 'limit': 5 })

    meta = Meta(
        title=event.title,
    )

    payload = {
        'event': event,
        'upcoming_events': upcoming_events,
        'meta': meta,
    }

    return render_to_response('event/view.html', payload, context_instance=RequestContext(request))
