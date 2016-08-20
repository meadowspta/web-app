from decimal import Decimal

from django.contrib import admin

from crabfeed.models import Reservation, ReservationTransaction, ReservationTransactionItem, SquareTransaction, SquareTransactionItem


class SquareTransactionAdmin(admin.ModelAdmin):
    ordering = ['-date']

    list_display = (
        'date',
        'name',
        'email',
        'get_items',
        'source',
        'transaction_id',
        # 'seller_id',
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

class ReservationAdmin(admin.ModelAdmin):
    ordering = ['-date']

    list_display = (
        'email',
        'name',
        'date',
        'reservation_number',
        'party_count',
        'party_checked_in',
        'check_in_date',
        'table_assignment',
        'email_sent',
        'get_qr_code',
        'get_url_hash',
    )

    def get_qr_code(self, reservation):
        return '<img src="%s" width="50">' % reservation.qr_code_image.url

    get_qr_code.allow_tags = True
    get_qr_code.short_description = 'QR Code'

    def get_url_hash(self, reservation):
        return '<a href="%s" target="_blank">%s</a>' % (reservation.get_check_in_url(), reservation.get_check_in_url())

    get_url_hash.allow_tags = True
    get_url_hash.short_description = 'Check-in URL'

admin.site.register(Reservation, ReservationAdmin)

class ReservationTransactionAdmin(admin.ModelAdmin):
    ordering = ['-date']

    list_display = (
        'date',
        'name',
        'email',
        'source',
        'transaction_id',
        'payment_type',
        'party_count',
        'notes',
    )

admin.site.register(ReservationTransaction, ReservationTransactionAdmin)

class ReservationTransactionItemAdmin(admin.ModelAdmin):
    list_display = (
        'item_title',
        'quantity',
        'gross',
        'sku',
    )

admin.site.register(ReservationTransactionItem, ReservationTransactionItemAdmin)