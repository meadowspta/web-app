from django.conf.urls import *
from meadowspta.contrib.post.views import *

urlpatterns = patterns('meadowspta.contrib.post.views',
    url(r'^news/(?P<id>[^\.^/]+)/$', get),
)