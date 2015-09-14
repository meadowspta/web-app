from django.db import models

from core.models import BaseModel, ContentModel

STUDENT_STATUSES = (
    ('new', 'New student'),
    ('returning', 'Returning student'),
)

GRADES = (
    ('tk', 'TK'),
    ('k', 'K'),
    ('1', '1st'),
    ('2', '2nd'),
    ('3', '3rd'),
    ('4', '4th'),
    ('5', '5th'),
)

GUARDIAN_TYPES = (
    ('mother', 'Mother'),
    ('father', 'Father'),
    ('guardian', 'Guardian'),
)

GENDER_TYPES = (
    ('male', 'Male'),
    ('female', 'Female'),
)


class Person(BaseModel):
    first_name = models.CharField(max_length=128)
    last_name = models.CharField(max_length=128)

    def __unicode__(self):
        return '%s %s' % (self.first_name, self.last_name)


class Parent(Person):
    guardian_type = models.CharField(max_length=16, choices=GUARDIAN_TYPES)
    email = models.EmailField(max_length=255)
    phone_number = models.CharField(max_length=128)
    employer = models.CharField(max_length=128)
    employer_has_corporate_matching = models.BooleanField(default=False)
    address = models.ForeignKey('Address')


class Child(Person):
    gender = models.CharField(max_length=8, choices=GENDER_TYPES)
    status = models.CharField(max_length=16, choices=STUDENT_STATUSES)
    grade = models.CharField(max_length=16, choices=GRADES)
    parents = models.ManyToManyField('Parent', related_name='children')


class Address(BaseModel):
    address = models.CharField(max_length=255)
    city = models.CharField(max_length=128)
    state = models.CharField(max_length=2)
    zip = models.CharField(max_length=16)

    def __unicode__(self):
        return '%s %s %s %s' % (self.address, self.city, self.state, self.zip)


class Donation(ContentModel):
    pass


class Sponsorship(BaseModel):
    name = models.CharField(max_length=255)
    is_published = models.BooleanField(default=True, verbose_name='Publish')


class Membership(BaseModel):
    members = models.ManyToManyField('Parent')
    sponsorship = models.ForeignKey('Sponsorship')
    is_published = models.BooleanField(default=True, verbose_name='Publish')
