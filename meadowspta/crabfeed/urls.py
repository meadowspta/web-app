from django.conf.urls import *
from crabfeed.views import home, dashboard, check_in, search, test, save_the_date


urlpatterns = patterns('crabfeed.views',
    url(r'^$', save_the_date),
    url(r'^home/$', home),
    url(r'^test/$', test),
    url(r'^search/$', search),
    url(r'^dashboard/$', dashboard),
    url(r'^check-in/$', check_in),
)