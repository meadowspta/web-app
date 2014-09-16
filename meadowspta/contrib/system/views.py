from django.template import RequestContext, Context, loader
from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render_to_response
from django.conf import settings

def partials(request):
    view = request.GET.get('view')
    return render_to_response('%s.html' % view, {}, context_instance=RequestContext(request))

def angular(request, path):
    return render_to_response('layouts/angular.html', {}, context_instance=RequestContext(request))