from django.db import models
from django.contrib.auth.models import User
from django.contrib.auth.models import AbstractBaseUser
from imagekit.models import ImageSpecField
from imagekit.processors import Thumbnail
from meadowspta.core.models import *


"""
class User(AbstractBaseUser):
    first_name = models.CharField(max_length=255)
    last_name = models.CharField(max_length=255)
    email = models.EmailField(max_length=255, unique=True)
    create_date = models.DateTimeField(auto_now=True)
    update_date = models.DateTimeField(auto_now=True)
    is_active = models.BooleanField(default=True)
    is_admin = models.BooleanField(default=False)
    is_staff = models.BooleanField(default=False)
    is_superuser = models.BooleanField(default=False)

    USERNAME_FIELD = 'email'
    REQUIRED_FIELDS = ['first_name', 'last_name']
"""

class Profile(BaseModel):
    pass

class Group(ContentModel):
    def after_save(self, action):
        if action is 'insert':
            # Add user as a member of the group.
            self.add_member(self, self.user)

    def add_member(self, group, user):
        member = GroupMembers()
        member.group = group
        member.user = user
        member.is_admin = True
        member.save()

class GroupMembers(BaseModel):
    group = models.ForeignKey(Group)
    user = models.ForeignKey(User)
    is_admin = models.BooleanField(default=False)
    joined_date = models.DateTimeField(auto_now=True)