from django.conf.urls import url
from event import views


urlpatterns = [
    url(r'^$', views.list),
    url(r'^(?P<slug>[^\.^/]+)/$', views.view),
]