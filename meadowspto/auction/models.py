from django.db import models
from django.contrib.auth.models import User
from imagekit.models import ImageSpecField
from imagekit.processors import Thumbnail
from decimal import Decimal

from core.models import ContentModel


CATEGORIES = (
    ('sports', 'Sports'),
    ('vacation', 'Vacation'),
)

class Item(ContentModel):
    item_value = models.CharField(max_length=255, null=True, blank=True)
    contact = models.CharField(max_length=255, null=True, blank=True)
    donor = models.CharField(max_length=255, null=True, blank=True)
    item_number = models.CharField(max_length=255, null=True, blank=True)
    categories = models.CharField(max_length=255, null=True, blank=True, choices=CATEGORIES)
    description = models.TextField(null=True, blank=True)
    starting_bid = models.DecimalField(max_digits=16, decimal_places=2, default=Decimal('0.00'))
    buy_now_bid = models.DecimalField(max_digits=16, decimal_places=2, default=Decimal('0.00'))
    bidding_end = models.DateTimeField(null=True, blank=True)

    image = models.ImageField(upload_to='images/auction')
    image_large = ImageSpecField(source='image', processors=[Thumbnail(620)], format='JPEG', options={'quality': 80})
    image_modal = ImageSpecField(source='image', processors=[Thumbnail(550)], format='JPEG', options={'quality': 80})
    image_medium = ImageSpecField(source='image', processors=[Thumbnail(140)], format='JPEG', options={'quality': 80})
    image_thumbnail = ImageSpecField(source='image', processors=[Thumbnail(100)], format='JPEG', options={'quality': 80})

    """
    value
    contact
    description
    all people who donated
    item number (generated)
    options (auctions, etc)
    bundle items (list of items)
    categories
    photo
    cut-off time
    """

    def get_absolute_url(self):
        """
        Get the canonical url.
        """
        return '/auction/item/%s' % self.slug