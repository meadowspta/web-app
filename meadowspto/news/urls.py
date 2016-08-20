from django.conf.urls import url
from . import views

urlpatterns = [
    url(r'^$', views.list),
    url(r'^(?P<slug>[^\.^/]+)/$', views.view),
    url(r'^feature/(?P<id>[^\.^/]+)/$', views.update_featured_post),
    url(r'^get/(?P<id>[^\.^/]+)/$', views.get),
]