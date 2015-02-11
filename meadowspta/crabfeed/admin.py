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
    list_display = ('get_date', 'name', 'from_email_address', 'paypal_transaction', 'notes')

    def get_date(self, obj):
        return obj.paypal_transaction.date

    get_date.short_description = 'Date'

admin.site.register(PayPalTransactionOverride, PayPalTransactionOverrideAdmin)