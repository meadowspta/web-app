from django.db import models
from django.contrib.auth.models import User
from imagekit.models import ImageSpecField
from imagekit.processors import Thumbnail
from meadowspta.core.models import *

class List(ContentModel):
    def __str__(self):
        return self.title

    description = models.TextField()

class Item(BaseModel):
    list = models.ForeignKey(List)
    asin = models.CharField(max_length=32)
    user = models.ForeignKey(User)
    create_date = models.DateTimeField(auto_now=True)
    update_date = models.DateTimeField(auto_now=True)