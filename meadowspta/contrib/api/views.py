import json
from django.template import RequestContext, Context, loader
from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render_to_response
from django.conf import settings
from django.forms.models import model_to_dict
from meadowspta.libraries.amazon.api import AmazonProductAPI
from meadowspta.contrib.wishlist.models import List, Item

# Define the fields to be retrieved.
fields = [
    # 'api',
    'asin',
    'author',
    'authors',
    'aws_associate_tag',
    'binding',
    'brand',
    'ean',
    'edition',
    'editorial_review',
    'eisbn',
    'features',
    'isbn',
    'label',
    'large_image_url',
    'list_price',
    'manufacturer',
    'medium_image_url',
    'model',
    'mpn',
    'offer_url',
    'pages',
    'part_number',
    'price_and_currency',
    'publisher',
    'region',
    'reviews',
    'sales_rank',
    'sku',
    'small_image_url',
    'tiny_image_url',
    'title',
    'upc',
    # 'to_string',
    # 'parent',
    # 'parent_asin',
    # 'publication_date',
    # 'release_date',
    # 'browse_nodes',
    # 'get_attribute',
    # 'get_attribute_details',
    # 'get_attributes',
    # 'get_parent',
    # 'item',
]

def search_products(request, q):
    data = []
    api = AmazonProductAPI()
    products = api.search(q)

    for product in products:
        # Create data object.
        obj = {}
        for field in fields:
            obj[field] = getattr(product, field)

        data.append(obj)

    return HttpResponse(json.dumps({ 'status': 200, 'response': data }), mimetype='application/json')

def get_product(request, product_id):
    api = AmazonProductAPI()
    product = api.get_product(product_id)

    # Create data object.
    data = {}
    for field in fields:
        data[field] = getattr(product, field)

    return HttpResponse(json.dumps({ 'status': 200, 'response': data }), mimetype='application/json')

def get_similar_products(request, product_id):
    data = []
    api = AmazonProductAPI()
    products = api.get_similar_products(product_id)

    for product in products:
        # Create data object.
        obj = {}
        for field in fields:
            obj[field] = getattr(product, field)

        data.append(obj)

    return HttpResponse(json.dumps({ 'status': 200, 'response': data }), mimetype='application/json')

def create_list(request):
    data = request.POST

    list = List()
    list.title = data['title']
    list.user = request.user
    list.save()

    return HttpResponse(json.dumps({ 'status': 200, 'response': model_to_dict(list) }), mimetype='application/json')

def get_lists(request):
    data = []
    user_id = request.GET.get('user_id')

    lists = List.objects.all()

    if user_id:
        lists = lists.filter(user_id=user_id)

    for list in lists:
        data.append(model_to_dict(list))

    return HttpResponse(json.dumps({ 'status': 200, 'response': data }), mimetype='application/json')

def add_item_to_list(request):
    data = request.POST

    item = Item()

    return HttpResponse(json.dumps({ 'status': 200, 'response': data }), mimetype='application/json')