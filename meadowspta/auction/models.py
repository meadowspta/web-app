from django.db import models
from django.contrib.auth.models import User
from imagekit.models import ImageSpecField
from imagekit.processors import Thumbnail
from core.models import BaseModel, ContentModel


class Item(ContentModel):
    description = models.TextField()
    image = models.ImageField(upload_to='images/auction')
    image_large = ImageSpecField(source='image', processors=[Thumbnail(620)], format='JPEG', options={'quality': 80})
    image_modal = ImageSpecField(source='image', processors=[Thumbnail(550)], format='JPEG', options={'quality': 80})
    image_medium = ImageSpecField(source='image', processors=[Thumbnail(140)], format='JPEG', options={'quality': 80})
    image_thumbnail = ImageSpecField(source='image', processors=[Thumbnail(100)], format='JPEG', options={'quality': 80})

    def get_absolute_url(self):
        """
        Get the canonical url.
        """
        return '/auction/item/%s' % self.slug