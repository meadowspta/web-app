from django.conf.urls import *
from crabfeed.views import home, dashboard, check_in, search, test


urlpatterns = patterns('crabfeed.views',
    url(r'^$', home),
    url(r'^test/$', test),
    url(r'^search/$', search),
    url(r'^dashboard/$', dashboard),
    url(r'^check-in/$', check_in),
)