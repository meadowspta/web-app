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
    (r'^$', 'homepage.views.view'),
    url(r'^news/', include('news.urls')),
    url(r'^events/', include('event.urls')),
    url(r'^auction/', include('auction.urls')),
    url(r'^register/$', 'member.views.register'),
    url(r'^register/success/$', 'member.views.success'),
    url(r'^login/$', 'member.views.login'),
    url(r'^crabfeed/$', 'homepage.views.crabfeed'),
)
