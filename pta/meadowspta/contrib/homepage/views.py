from django.template import RequestContext, Context, loader
from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render_to_response
from meadowspta.contrib.post.models import News

def view(request):
    board = [
        {
            'title': 'President',
            'name': 'Woody Baltgalvis',
        },
        {
            'title': 'Vice President',
            'name': 'Fadia Alaraj',
        },
        {
            'title': 'Treasurer',
            'name': 'Steven Cashiola',
        },
        {
            'title': 'Secretary',
            'name': 'Heather Mezzetta',
        },
        {
            'title': 'Financial Secretary',
            'name': 'Pam Suboc',
        },
        {
            'title': 'Auditor',
            'name': '(Vacant)',
        },
        {
            'title': 'Co-Historian',
            'name': 'Julian Ponce',
        },
        {
            'title': 'Co-Historian',
            'name': 'Annabelle Ponce',
        },
        {
            'title': 'Parliamentarian',
            'name': 'Leola Meiners',
        },
        {
            'title': 'Volunteer Coordinator',
            'name': 'Inah Marcelo',
        },
        {
            'title': 'Volunteer Coordinator',
            'name': 'Larry Wong',
        },
        {
            'title': 'At-Large',
            'name': 'Craig Yonemura',
        },
        {
            'title': 'After School Arts Program',
            'name': 'Heather Butts'
        },
    ]

    news = News.objects.all()

    payload = dict(
        board=board,
        news=news,
    )

    return render_to_response('homepage/view.html', payload, context_instance=RequestContext(request))
