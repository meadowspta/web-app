from __future__ import unicode_literals

from django.db import models
from django.template.defaultfilters import slugify

from asset.models import File
from core.models import ContentModel
from system.models import sysvar


class Post(ContentModel):
    body = models.TextField()
    main_image = models.ForeignKey(File)

    content_images = models.ManyToManyField(File, related_name="content_images", blank=True)

    def __unicode__(self):
        return str(self.title)

    def before_save(self, action):
        # Only generate slug if a slug is not entered.
        if not self.slug:
            super(Post, self).before_save(action)
            self.slug = slugify('%s-%s' % (self.title, self.publish_date.strftime('%B-%-d-%Y')))

    def get_absolute_url(self):
        """
        Get the canonical url.
        """
        return '/blog/%s' % self.slug

    def is_featured(self):
        """
        Check if the post is featured.
        """
        if self.id == int(sysvar['featured_blog_post']):
            return True
        else:
            return False

    def admin_image(self):
        """
        Image output for the admin list page.
        """
        return '<img src="%s">' % self.image_thumbnail.url