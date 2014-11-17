from django.template import RequestContext, Context, loader
from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render_to_response

from meta.views import Meta


def home(request):
    return render_to_response('crabfeed/home.html', context_instance=RequestContext(request))