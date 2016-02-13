from decimal import Decimal

from django.contrib import admin

from crabfeed.models import Reservation, ReservationTransaction, ReservationTransactionItem, SquareTransaction, SquareTransactionItem


class SquareTransactionAdmin(admin.ModelAdmin):
    ordering = ['-date']

    list_display = (
        'date',
        'get_items',
        'source',
        'transaction_id',
        'seller_id',
        'payment_type',
        'get_payment_url',
        'get_receipt_url',
        'gross_sale',
        'net_sale'
    )

    def get_items(self, obj):
        items = []
        for item in obj.squaretransactionitem_set.all():
            items.append('<li>%s: %s</li>' % (item.item_title, item.quantity))

        return '<ul>%s</ul>' % ''.join(items)

    get_items.allow_tags = True
    get_items.short_description = 'Items'

    def get_payment_url(self, obj):
        return '<a href="%s" target="_blank">view &raquo;</a>' % obj.payment_url

    get_payment_url.allow_tags = True
    get_payment_url.short_description = 'Payment URL'

    def get_receipt_url(self, obj):
        return '<a href="%s" target="_blank">view &raquo;</a>' % obj.receipt_url

    get_receipt_url.allow_tags = True
    get_receipt_url.short_description = 'Receipt URL'

admin.site.register(SquareTransaction, SquareTransactionAdmin)

# class ReservationAdmin(admin.ModelAdmin):
#     # fields = ('email', 'reservation_number', 'transaction_count', 'party_count', 'party_checked_in', 'email_sent', 'email_sent_date')
#     list_display = ('email', 'reservation_number', 'party_count', 'table_assignment', 'transaction_count', 'email_sent')
#
# admin.site.register(Reservation, ReservationAdmin)