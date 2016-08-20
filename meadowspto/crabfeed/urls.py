from django.conf.urls import *
from crabfeed.views import home, dashboard, check_in, search, tickets, confirmation, cancellation, check_in_search,\
    check_in_confirmation, check_in_dashboard, transaction_create, transaction_update


urlpatterns = patterns('crabfeed.views',
    url(r'^$', home),
    # url(r'^tickets/$', tickets),
    # url(r'^confirmation/$', confirmation),
    # url(r'^cancellation/$', cancellation),
    url(r'^search/$', search),
    url(r'^dashboard/$', dashboard),
    url(r'^transactions/create/$', transaction_create),
    url(r'^transactions/update/(?P<id>[^\.^/]+)$', transaction_update),
    url(r'^check-in/$', check_in),
    url(r'^check-in/search/$', check_in_search),
    url(r'^check-in/confirmation/$', check_in_confirmation),
    url(r'^check-in/dashboard/$', check_in_dashboard),
)