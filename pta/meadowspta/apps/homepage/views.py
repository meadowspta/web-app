from django.template import RequestContext, Context, loader
from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render_to_response

def view(request):
    board = [
        {
            'title': 'President',
            'name': 'Woody Baltgalvis',
        },
        {
            'title': 'Vice Precident',
            'name': 'Fadia Alaraj',
        },
        {
            'title': 'Secretary',
            'name': 'Louanne Athanasiou',
        },
        {
            'title': 'Treasurer',
            'name': 'Carlo Marcelo',
        },
        {
            'title': 'Financial Secretary',
            'name': '(open)',
        },
        {
            'title': 'Historian',
            'name': 'Julian & Annabelle Ponce',
        },
        {
            'title': 'Parliamentarian',
            'name': 'Chris Mapa',
        },
        {
            'title': 'Auditor',
            'name': 'Fiona Tam',
        },
        {
            'title': 'Volunteer Coordinator',
            'name': 'Steven Rea',
        },
        {
            'title': 'At-Large',
            'name': 'Vanessa Muna',
        },
        {
            'title': 'At-Large',
            'name': 'Craig Yonemura',
        },
    ]
    
    return render_to_response('homepage/view.html', dict(board=board), context_instance=RequestContext(request))