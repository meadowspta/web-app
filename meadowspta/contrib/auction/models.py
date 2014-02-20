from django.db import models
from django.contrib.auth.models import User
from imagekit.models import ImageSpecField
from imagekit.processors import Thumbnail
from meadowspta.core.models import *

class Donor(BaseModel):
    first_name = models.CharField(max_length=255)
    last_name = models.CharField(max_length=255)

    def __unicode__(self):
        return '%s %s' % (self.first_name, self.last_name)

class Item(ContentModel):
    item_number = models.CharField(max_length=64)
    picture = models.ImageField(upload_to='images/auction/items')
    picture_large = ImageSpecField(source='picture', processors=[Thumbnail(300)], format='JPEG', options={'quality': 80})
    picture_medium = ImageSpecField(source='picture', processors=[Thumbnail(140)], format='JPEG', options={'quality': 80})
    picture_thumbnail = ImageSpecField(source='picture', processors=[Thumbnail(100)], format='JPEG', options={'quality': 80})
    description = models.TextField()
    opening_bid = models.DecimalField(max_digits=8, decimal_places=2)
    bid_start = models.DateTimeField()
    bid_end = models.DateTimeField()
    bid_increment = models.DecimalField(max_digits=8, decimal_places=2)
    retail_value = models.DecimalField(max_digits=8, decimal_places=2)
    donor = models.ForeignKey(Donor)
    quantity = models.TextField()

    def get_absolute_url(self):
        """
        Get the canonical url.
        """
        return '/auction/item/%s' % self.slug

    def admin_picture(self):
        """
        Image output for the admin list page.
        """
        return '<img src="%s">' % self.picture_thumbnail.url

    admin_picture.allow_tags = True;

class Bid(BaseModel):
    item = models.ForeignKey(Item)
    user = models.ForeignKey(User)
    amount = models.DecimalField(max_digits=8, decimal_places=2)
    bid_date = models.DateTimeField(auto_now_add=True)