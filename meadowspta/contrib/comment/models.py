from django.db import models
from django.forms import ModelForm
from django.contrib.auth.models import User
from imagekit.models import ImageSpecField
from imagekit.processors import Thumbnail
from meadowspta.core.models import BaseModel
from meadowspta.contrib.system.models import sysvar

class Comment(BaseModel):
    body = models.TextField()
    user = models.ForeignKey(User, verbose_name='Author')
    publish_date = models.DateTimeField(auto_now_add=True)
    update_date = models.DateTimeField(auto_now=True)
    is_published = models.BooleanField(default=True, verbose_name='Publish')

    def get_absolute_url(self):
        """
        Get the canonical url.
        """
        return '/comments/%s' % self.id

class CommentForm(ModelForm):
    class Meta:
        model = Comment
        exclude = ['user', 'is_published']

    def __init__(self, user, *args, **kwargs):
        super(CommentForm, self).__init__(*args, **kwards)
            self.fields

    def save(self, commit=True):
        print '=============================='
        print self

        comment = Comment()
        comment.body = self.cleaned_data['body']
        comment.user = self.user

        if commit:
            comment.save()

        return comment