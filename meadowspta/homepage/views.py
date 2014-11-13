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
            'title': 'VP of Membership',
            'name': 'Chris Mezzetta',
        },
        {
            'title': 'VP of After School Activities',
            'name': 'Heather Butts',
        },
        {
            'title': 'VP of Communications',
            'name': 'Lia Hanson',
        },
        {
            'title': 'VP of Fundraising',
            'name': 'Vivian Chu',
        },
        {
            'title': 'Secretary',
            'name': 'Heather Mezzetta',
        },
        {
            'title': 'Treasurer',
            'name': 'Steven Cashiola',
        },
        {
            'title': 'Volunteer Coordinator',
            'name': 'Larry Wong',
        },
        {
            'title': 'Auditor',
            'name': 'Doris Lim',
        },
        {
            'title': 'Parliamentarian',
            'name': 'Craig Yonemura',
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