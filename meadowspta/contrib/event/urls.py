from django.conf.urls import *
from meadowspta.contrib.event.views import list, view


urlpatterns = patterns('meadowspta.contrib.event.views',
    url(r'^$', list),
    url(r'^(?P<slug>[^\.^/]+)/$', view),
)