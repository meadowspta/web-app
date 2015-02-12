from decimal import Decimal

from django.contrib import admin

from crabfeed.models import Ticket, NotificationSignup, VolunteerSignup
from system.models import PayPalRawTransaction, PayPalTransaction, PayPalTransactionItem, PayPalTransactionOverride


class NotificationSignupAdmin(admin.ModelAdmin):
    list_display = ('email', 'create_date')

admin.site.register(NotificationSignup, NotificationSignupAdmin)

class TicketAdmin(admin.ModelAdmin):
    list_display = ('first_name', 'last_name', 'email', 'payment_type', 'create_date', 'check_in_date')

admin.site.register(Ticket, TicketAdmin)

class PayPalTransactionOverrideAdmin(admin.ModelAdmin):
    list_display = ('date', 'name', 'from_email_address', 'get_total', 'paypal_transaction', 'notes')
    ordering = ['-date']

    def get_total(self, obj):
        total = Decimal(0.00)

        items = obj.paypal_transaction.paypaltransactionitem_set.all()
        for item in items:
            total = total + Decimal(item.gross)
        return '$%s' % total

    get_total.short_description = 'Purchase Total'

admin.site.register(PayPalTransactionOverride, PayPalTransactionOverrideAdmin)