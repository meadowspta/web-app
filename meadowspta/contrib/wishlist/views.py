from django.template import RequestContext, Context, loader
from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render_to_response
from django.conf import settings
from amazon.api import AmazonAPI
from meadowspta.contrib.wishlist.models import *

def search(request):
    q = request.GET.get('q') if request.GET.get('q') else ''

    payload = {
        'q': q,
    }

    return render_to_response('wishlist/search/results.html', payload, context_instance=RequestContext(request))

def view_product(request, product_id):
    return render_to_response('wishlist/product/view.html', {}, context_instance=RequestContext(request))

"""
api
asin
author
authors
aws_associate_tag
binding
brand
browse_nodes
ean
edition
editorial_review
eisbn
features
get_attribute
get_attribute_details
get_attributes
get_parent
isbn
item
label
large_image_url
list_price
manufacturer
medium_image_url
model
mpn
offer_url
pages
parent
parent_asin
part_number
price_and_currency
publication_date
publisher
region
release_date
reviews
sales_rank
sku
small_image_url
tiny_image_url
title
to_string
upc
"""