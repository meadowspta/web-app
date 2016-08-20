from django.contrib import admin
from auction.models import Item

class ItemAdmin(admin.ModelAdmin):
    exclude = ('slug', 'item_number')
    list_display = (
        'title',
        'get_image',
        'get_description',
        'item_value',
        'contact',
        'item_number',
        'categories',
        'get_starting_bid',
        'get_buy_now_bid',
        'bidding_end',
    )

    def get_description(self, item):
        return item.description

    def get_image(self, item):
        return '<img src="%s">' % item.image_thumbnail.url

    def get_starting_bid(self, item):
        return '$%s' % item.starting_bid

    def get_buy_now_bid(self, item):
        return '$%s' % item.buy_now_bid

    get_image.allow_tags = True
    get_description.allow_tags = True

    def formfield_for_foreignkey(self, db_field, request, **kwargs):
        if db_field.name == 'user':
            kwargs['initial'] = request.user.id

        return super(ItemAdmin, self).formfield_for_foreignkey(
            db_field, request, **kwargs
        )

admin.site.register(Item, ItemAdmin)