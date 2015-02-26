from decimal import Decimal

from django.contrib import admin

from crabfeed.models import NotificationSignup, VolunteerSignup, Reservation, ReservationTransaction, ReservationTransactionItem
from system.models import PayPalRawTransaction, PayPalTransaction, PayPalTransactionItem, PayPalTransactionOverride


class NotificationSignupAdmin(admin.ModelAdmin):
    list_display = ('email', 'create_date')

admin.site.register(NotificationSignup, NotificationSignupAdmin)

class PayPalTransactionOverrideAdmin(admin.ModelAdmin):
    list_display = ('date', 'name', 'from_email_address', 'get_total', 'get_payment_source', 'paypal_transaction', 'notes')
    ordering = ['-date']

    def get_total(self, obj):
        total = Decimal(0.00)

        items = obj.paypal_transaction.paypaltransactionitem_set.all()
        for item in items:
            total = total + Decimal(item.gross)
        return '$%s' % total

    get_total.short_description = 'Purchase Total'

    def get_payment_source(self, obj):
        return obj.paypal_transaction.get_source_display()

    get_payment_source.short_description = 'Source'

admin.site.register(PayPalTransactionOverride, PayPalTransactionOverrideAdmin)

class ReservationAdmin(admin.ModelAdmin):
    # fields = ('email', 'reservation_number', 'transaction_count', 'party_count', 'party_checked_in', 'email_sent', 'email_sent_date')
    list_display = ('email', 'reservation_number', 'party_count', 'transaction_count', 'email_sent')

admin.site.register(Reservation, ReservationAdmin)