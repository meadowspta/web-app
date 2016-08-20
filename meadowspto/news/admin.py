from django.contrib import admin
from news.models import News

class NewsAdmin(admin.ModelAdmin):
    fields = ('title', 'teaser', 'publish_date', 'image', 'slug', 'user', 'is_published', 'body')
    list_display = ('title', 'teaser', 'admin_image', 'publish_date', 'is_published')

admin.site.register(News, NewsAdmin)