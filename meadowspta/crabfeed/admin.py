from django.contrib import admin

from crabfeed.models import Ticket, NotificationSignup, VolunteerSignup


class NotificationSignupAdmin(admin.ModelAdmin):
	list_display = ('email', 'create_date')

class TicketAdmin(admin.ModelAdmin):
    list_display = ('first_name', 'last_name', 'email', 'payment_type', 'create_date', 'check_in_date')

admin.site.register(NotificationSignup, NotificationSignupAdmin)
admin.site.register(Ticket, TicketAdmin)