from django.contrib import admin
from auction.models import Item

class ItemAdmin(admin.ModelAdmin):
    pass
    # fields = ('title', 'description', 'is_published')
    # list_display = ('title', 'description')

    def formfield_for_foreignkey(self, db_field, request, **kwargs):
        if db_field.name == 'user':
            kwargs['initial'] = request.user.id

        return super(ItemAdmin, self).formfield_for_foreignkey(
            db_field, request, **kwargs
        )

admin.site.register(Item, ItemAdmin)