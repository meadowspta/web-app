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
    url(r'^news/', include('meadowspta.contrib.news.urls')),
    url(r'^events/', include('meadowspta.contrib.event.urls')),
    url(r'^auction/', include('meadowspta.contrib.auction.urls')),
    url(r'^register/$', 'meadowspta.contrib.member.views.register'),
    url(r'^register/success/$', 'meadowspta.contrib.member.views.success'),
    url(r'^login/$', 'meadowspta.contrib.member.views.login'),
)
