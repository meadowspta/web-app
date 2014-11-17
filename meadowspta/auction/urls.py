from django.conf.urls import *
from auction.views import *


urlpatterns = patterns('auction.views',
    url(r'^$', list),
    url(r'^item/(?P<slug>[^\.^/]+)/$', item_view),
)