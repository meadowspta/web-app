from __future__ import unicode_literals

import datetime

from django.db import models
from django.contrib.auth.models import User

from imagekit.models import ImageSpecField
from imagekit.processors import Thumbnail, Resize, SmartResize

from core.models import BaseModel


class File(BaseModel):
    file = models.ImageField(upload_to='assets')
    user = models.ForeignKey(User, verbose_name='Author')
    publish_date = models.DateTimeField(default=datetime.datetime.now)
    update_date = models.DateTimeField(auto_now=True)
    is_published = models.BooleanField(default=True, verbose_name='Publish')

    file_jumbotron = ImageSpecField(source='file', processors=[SmartResize(970, 545)], format='JPEG', options={'quality': 80})
    file_large = ImageSpecField(source='file', processors=[Resize(970, 545)], format='JPEG', options={'quality': 80})
    file_medium = ImageSpecField(source='file', processors=[Thumbnail(140)], format='JPEG', options={'quality': 80})
    file_thumbnail = ImageSpecField(source='file', processors=[Thumbnail(187)], format='JPEG', options={'quality': 80})

    def __unicode__(self):
        return self.file.url
