from django.contrib import admin

from blog.models import BlogPost


class BlogPostAdmin(admin.ModelAdmin):
    # ordering = ['-date']

    fields = (
        'title',
        'publish_date',
        'main_image',
        'slug',
        'user',
        'is_published',
        'content_images',
        'body',
    )

    list_display = (
        'title',
    )

    class Media:
        js = (
            'js/meadows-pto.js',
        )

    def formfield_for_foreignkey(self, db_field, request, **kwargs):
        if db_field.name == 'user':
            kwargs['initial'] = request.user.id

        return super(BlogPostAdmin, self).formfield_for_foreignkey(
            db_field, request, **kwargs
        )

admin.site.register(BlogPost, BlogPostAdmin)
