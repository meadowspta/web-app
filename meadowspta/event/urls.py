from django.conf.urls import *
from event.views import list, view


urlpatterns = patterns('event.views',
    url(r'^$', list),
    url(r'^(?P<slug>[^\.^/]+)/$', view),
)