from django.contrib import admin

from crabfeed.models import Ticket


class TicketAdmin(admin.ModelAdmin):
    list_display = ('first_name', 'last_name', 'email', 'payment_type', 'create_date', 'check_in_date')

admin.site.register(Ticket, TicketAdmin)