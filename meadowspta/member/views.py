from django.template import RequestContext, Context, loader
from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render_to_response
from django.contrib.auth import authenticate, login as auth_login, logout as auth_logout

from member.forms import MemberRegistrationForm, MemberLoginForm


def register(request):
    form = MemberRegistrationForm(request.POST or None)

    if request.method == 'POST':
        if form.is_valid():
            form.save()
            return HttpResponseRedirect('/register/success/')

    payload = dict(
        form=form,
    )

    return render_to_response('member/register.html', payload, context_instance=RequestContext(request))

def success(request):
    return render_to_response('member/register_success.html', context_instance=RequestContext(request))

def login(request):
    form = MemberLoginForm(request.POST or None)

    if request.method == 'POST':
        if form.is_valid():
            user = authenticate(username=form.cleaned_data['email'], password=form.cleaned_data['password'])
            if user is not None:
                auth_login(request, user)
                return HttpResponseRedirect('/crabfeed/dashboard')

    payload = dict(
        form=form,
    )

    return render_to_response('member/login.html', payload, context_instance=RequestContext(request))

def logout(request):
    auth_logout(request)
    return HttpResponseRedirect('/')