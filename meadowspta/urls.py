from django.conf.urls import patterns, include, url
from django.conf import settings
from django.contrib import admin

admin.autodiscover()

urlpatterns = patterns('',
    # Examples:
    # url(r'^$', 'meadowspta.views.home', name='home'),
    # url(r'^meadowspta/', include('meadowspta.foo.urls')),

    url(r'^admin/doc/', include('django.contrib.admindocs.urls')),
    url(r'^admin/', include(admin.site.urls)),
    (r'^media/(?P<path>.*)$', 'django.views.static.serve', {'document_root': settings.MEDIA_ROOT}),
    (r'^$', 'meadowspta.contrib.homepage.views.view'),
    url(r'^post/', include('meadowspta.contrib.post.urls')),
)
