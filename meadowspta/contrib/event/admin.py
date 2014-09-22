from django.contrib import admin
from meadowspta.contrib.event.models import Event


class EventAdmin(admin.ModelAdmin):
    fields = ('title', 'is_all_day', 'start_date', 'end_date', 'location', 'slug', 'user', 'is_published', 'description')
    list_display = ('title', 'is_all_day', 'start_date', 'end_date', 'publish_date', 'is_published')

    class Media:
        js = (
            'js/meadows-pta.js',
        )

    def formfield_for_foreignkey(self, db_field, request, **kwargs):
        if db_field.name == 'user':
            kwargs['initial'] = request.user.id
        return super(EventAdmin, self).formfield_for_foreignkey(
            db_field, request, **kwargs
        )

admin.site.register(Event, EventAdmin)