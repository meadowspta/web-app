from django.contrib import admin
from meadowspta.contrib.news.models import News

class NewsAdmin(admin.ModelAdmin):
    list_display = ('title', 'teaser', 'admin_image', 'publish_date', 'is_published')

admin.site.register(News, NewsAdmin)