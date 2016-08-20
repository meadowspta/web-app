"""meadowspto URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/1.9/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  url(r'^$', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  url(r'^$', Home.as_view(), name='home')
Including another URLconf
    1. Add an import:  from blog import urls as blog_urls
    2. Import the include() function: from django.conf.urls import url, include
    3. Add a URL to urlpatterns:  url(r'^blog/', include(blog_urls))
"""
from django.conf.urls import include, url
from django.contrib import admin
from django.conf import settings
from django.views.static import serve

import homepage.views
import member.views
# import crabfeed.views

admin.autodiscover()

urlpatterns = [
    url(r'^admin/', admin.site.urls),
    url(r'^media/(?P<path>.*)$', serve, {'document_root': settings.MEDIA_ROOT}),
    url(r'^$', homepage.views.view),
    url(r'^news/', include('news.urls')),
    url(r'^events/', include('event.urls')),
    # url(r'^auction/', include('auction.urls')),
    # url(r'^api/crabfeed/tickets', crabfeed.views.api_tickets),
    # url(r'^api/crabfeed/search', crabfeed.views.api_search),
    # url(r'^api/crabfeed/transactions', crabfeed.views.api_transactions),
    # url(r'^api/crabfeed/reservations', crabfeed.views.api_reservation),
    # url(r'^api/crabfeed/check-in/details', crabfeed.views.api_check_in_details),
    # url(r'^crabfeed/', include('crabfeed.urls')),
    url(r'^register/$', member.views.register),
    url(r'^register/success/$', member.views.success),
    url(r'^login/$', member.views.login),
    url(r'^logout/$', member.views.logout),
]
