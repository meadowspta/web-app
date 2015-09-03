from django.template import RequestContext, Context, loader
from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render_to_response
from news.models import News
from system.models import sysvar
from event.models import Event

def view(request):
    board = [
        {
            'title': 'President',
            'name': 'Leola Meiners',
        },
        {
            'title': 'Vice President, Fundraising',
            'name': 'Vivian Chu',
        },
        {
            'title': 'Vice President, Communications',
            'name': 'Heather Mezzetta',
        },
        {
            'title': 'Vice President, Membership',
            'name': 'Inah Abary-Marcelo',
        },
        {
            'title': 'Vice President, Events & Programs',
            'name': 'Jen Pedroza',
        },
        {
            'title': 'Secretary',
            'name': 'Chris Mezzetta',
        },
        {
            'title': 'Parliamentarian',
            'name': 'Craig Yonemura',
        },
        {
            'title': 'Treasurer',
            'name': 'Jay Price',
        },
        {
            'title': 'Financial Secretary',
            'name': 'Lisa Price',
        },
        {
            'title': 'Historian',
            'name': 'Larry Wong',
        },
        {
            'title': 'Volunteer Coordinator',
            'name': 'Irene Wong',
        },
        {
            'title': 'At-Large',
            'name': 'Woody Baltgalvis',
        },
        {
            'title': 'Crab Feed Committee Chair',
            'name': 'Pam Yonemura',
        },
    ]

    news = News.objects.all().filter(is_published=1).exclude(id=int(sysvar['news_featured_post'])).order_by('-publish_date')[:4]
    featured_news_post = News.objects.get(id=int(sysvar['news_featured_post']))
    upcoming_events = Event.get_upcoming_events({ 'limit': 5 })

    payload = dict(
        board=board,
        news=news,
        upcoming_events=upcoming_events,
        featured_news_post=featured_news_post
    )

    return render_to_response('homepage/view.html', payload, context_instance=RequestContext(request))
