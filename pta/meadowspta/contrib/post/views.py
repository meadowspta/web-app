from django.template import RequestContext, Context, loader
from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render_to_response
from meadowspta.contrib.post.models import News

def get(request, id):
    news = News.objects.get(id=id)
    print news