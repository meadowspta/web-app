import urllib2
from django.conf import settings
from django.db import models
from django.contrib.auth.models import AbstractBaseUser, BaseUserManager
from imagekit.models import ImageSpecField
from imagekit.processors import resize, ResizeToFill, Anchor


class UserManager(BaseUserManager):
    def create_user(self, email, first_name, last_name, password=None):
        """
        Creates and saves a User with the given email, date of
        birth and password.
        """
        if not email:
            raise ValueError('Users must have an email address')

        user = self.model(
            email=self.normalize_email(email),
            first_name=first_name,
            last_name=last_name,
        )

        user.set_password(password)
        user.save(using=self._db)
        return user

    def create_superuser(self, email, first_name, last_name, password):
        """
        Creates and saves a superuser with the given email, date of
        birth and password.
        """
        user = self.create_user(email,
            password=password,
            first_name=first_name,
            last_name=last_name,
        )
        user.is_admin = True
        user.save(using=self._db)
        return user

class User(AbstractBaseUser):
    first_name = models.CharField(max_length=64, null=False)
    last_name = models.CharField(max_length=64, null=False)
    email = models.EmailField(unique=True)
    picture = models.ImageField(upload_to='images/users', null=True, blank=True)
    status = models.BooleanField(default=True)
    create_date = models.DateTimeField(auto_now_add=True)
    update_date = models.DateTimeField(auto_now=True)
    last_login_date = models.DateTimeField(auto_now_add=True)
    registration_request_date = models.DateTimeField(null=True)
    registration_requested = models.BooleanField(default=False)
    is_active = models.BooleanField(default=True)
    is_admin = models.BooleanField(default=False)
    is_staff = models.BooleanField(default=False)
    is_superuser = models.BooleanField(default=False)

    # Define imagekit settings.
    picture_medium = ImageSpecField(source='picture', processors=[ResizeToFill(333, 333, Anchor.TOP)], format='JPEG', options={'quality': 80})
    picture_thumb = ImageSpecField(source='picture', processors=[ResizeToFill(78, 78, Anchor.TOP)], format='JPEG', options={'quality': 80})
    picture_mini = ImageSpecField(source='picture', processors=[ResizeToFill(24, 24, Anchor.TOP)], format='JPEG', options={'quality': 80})

    objects = UserManager()

    USERNAME_FIELD = 'email'
    REQUIRED_FIELDS = ['first_name', 'last_name']

    def get_full_name(self):
        # The user is identified by their email address
        return '%s %s' % (self.first_name, self.last_name)

    def get_short_name(self):
        # The user is identified by their email address
        return self.first_name

    def __unicode__(self):
        return self.get_full_name

    def has_perm(self, perm, obj=None):
        "Does the user have a specific permission?"
        # Simplest possible answer: Yes, always
        return True

    def has_module_perms(self, app_label):
        "Does the user have permissions to view the app `app_label`?"
        # Simplest possible answer: Yes, always
        return True

    @property
    def is_staff(self):
        "Is the user a member of staff?"
        # Simplest possible answer: All admins are staff
        return self.is_admin


