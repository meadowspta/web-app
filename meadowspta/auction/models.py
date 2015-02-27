from django.db import models
from django.contrib.auth.models import User
from imagekit.models import ImageSpecField
from imagekit.processors import Thumbnail
from core.models import BaseModel, ContentModel


class Item(ContentModel):
    description = models.TextField()

    def get_absolute_url(self):
        """
        Get the canonical url.
        """
        return '/auction/item/%s' % self.slug