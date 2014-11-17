from django.conf.urls import *
from crabfeed.views import home


urlpatterns = patterns('crabfeed.views',
    url(r'^$', home),
)