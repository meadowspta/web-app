from django.conf.urls import *
from crabfeed.views import home, dashboard, check_in, search, test, save_the_date, tickets, confirmation, cancellation, check_in_search


urlpatterns = patterns('crabfeed.views',
    url(r'^$', home),
    url(r'^home/$', save_the_date),
    url(r'^tickets/$', tickets),
    url(r'^confirmation/$', confirmation),
    url(r'^cancellation/$', cancellation),
    url(r'^test/$', test),
    url(r'^search/$', search),
    url(r'^dashboard/$', dashboard),
    url(r'^check-in/$', check_in),
    url(r'^check-in/search/$', check_in_search),
)