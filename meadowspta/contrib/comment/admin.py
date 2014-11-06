from django.contrib import admin
from meadowspta.contrib.comment.models import Comment


class CommentAdmin(admin.ModelAdmin):
    # fields = ('body', 'teaser', 'publish_date', 'image', 'slug', 'user', 'is_published', 'body')
    list_display = ('body', 'user', 'publish_date', 'is_published')

    def formfield_for_foreignkey(self, db_field, request, **kwargs):
        if db_field.name == 'user':
            kwargs['initial'] = request.user.id

        return super(CommentAdmin, self).formfield_for_foreignkey(db_field, request, **kwargs)

admin.site.register(Comment, CommentAdmin)