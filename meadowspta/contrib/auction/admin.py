from django.contrib import admin
from meadowspta.contrib.auction.models import Item, Donor

class ItemAdmin(admin.ModelAdmin):
    list_display = ('admin_picture', 'item_number', 'donor', 'opening_bid', 'bid_increment', 'retail_value', 'quantity')

class DonorAdmin(admin.ModelAdmin):
    list_display = ('first_name', 'last_name')

admin.site.register(Item, ItemAdmin)
admin.site.register(Donor, DonorAdmin)