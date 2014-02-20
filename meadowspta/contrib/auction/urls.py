from django.conf.urls import *
from meadowspta.contrib.auction.views import *

urlpatterns = patterns('meadowspta.contrib.auction.views',
    url(r'^$', list),
    url(r'^item/(?P<slug>[^\.^/]+)/$', item_view),
)