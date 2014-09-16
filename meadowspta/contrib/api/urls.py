from django.conf.urls import *
from meadowspta.contrib.api.views import *

urlpatterns = patterns('meadowspta.contrib.api.views',
    url(r'^search/products/(?P<q>.*)$', search_products),
    url(r'^products/(?P<product_id>.*)/similar/$', get_similar_products),
    url(r'^products/(?P<product_id>.*)$', get_product),
    url(r'^lists/add/item/$', add_item_to_list),
    url(r'^lists/add/$', create_list),
    url(r'^lists/$', get_lists),
)