from django.conf.urls import *
from news.views import *

urlpatterns = patterns('news.views',
    url(r'^$', list),
    url(r'^(?P<slug>[^\.^/]+)/$', view),
    url(r'^feature/(?P<id>[^\.^/]+)/$', update_featured_post),
    url(r'^get/(?P<id>[^\.^/]+)/$', get),
)