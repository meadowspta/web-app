from django.conf.urls import *
from crabfeed.views import home, dashboard, check_in


urlpatterns = patterns('crabfeed.views',
    url(r'^$', home),
    url(r'^dashboard/$', dashboard),
    url(r'^check-in/$', check_in),
)