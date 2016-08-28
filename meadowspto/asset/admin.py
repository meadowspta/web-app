from django.contrib import admin

from asset.models import AssetFile


class AssetFileAdmin(admin.ModelAdmin):
    # ordering = ['-date']

    list_display = (
        'file',
    )

    def formfield_for_foreignkey(self, db_field, request, **kwargs):
        if db_field.name == 'user':
            kwargs['initial'] = request.user.id

        return super(AssetFileAdmin, self).formfield_for_foreignkey(
            db_field, request, **kwargs
        )

admin.site.register(AssetFile, AssetFileAdmin)
