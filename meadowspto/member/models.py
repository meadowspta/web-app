from django.db import models


GRADES = (
    ('tk', 'TK'),
    ('k', 'Kindergarten'),
    ('1', '1st Grade'),
    ('2', '2nd Grade'),
    ('3', '3rd Grade'),
    ('4', '4th Grade'),
    ('5', '5th Grade'),
)


class Member(models.Model):
    class Meta:
        db_table = 'member_members'

    first_name = models.CharField(max_length=64)
    last_name = models.CharField(max_length=64)
    email = models.EmailField(max_length=255)
    phone_number = models.CharField(max_length=64)
    address = models.ForeignKey('MemberAddress')
    students = models.ManyToManyField('MemberStudent')
    employer = models.ForeignKey('MemberEmployer')
    sponsorshipPackage = models.ManyToManyField('MemberSponsorshipPackage')

    def __unicode__(self):
        return '%s %s' % (self.first_name, self.last_name)


class MemberAddress(models.Model):
    class Meta:
        db_table = 'member_addresses'

    address = models.CharField(max_length=64)
    city = models.CharField(max_length=64)
    state = models.CharField(max_length=64)
    zip_code = models.CharField(max_length=16)

    def __unicode__(self):
        return '%s %s, %s' % (self.address, self.city, self.state)


class MemberEmployer(models.Model):
    class Meta:
        db_table = 'member_employers'

    employer = models.CharField(max_length=64)
    offers_matching = models.BooleanField(default=False)

    def __unicode__(self):
        return '%s' % (self.employer)


class MemberStudent(models.Model):
    class Meta:
        db_table = 'member_students'

    first_name = models.CharField(max_length=64)
    last_name = models.CharField(max_length=64)
    grade = models.CharField(max_length=64, choices=GRADES)
    is_new = models.BooleanField(default=False)

    def __unicode__(self):
        return '%s %s' % (self.first_name, self.last_name)


    def get_full_name(self):
        return '%s %s' % (self.first_name, self.last_name)


class MemberSponsorshipPackage(models.Model):
    class Meta:
        db_table = 'member_sponsorship_packages'

    name = models.CharField(max_length=64)
    price = models.DecimalField(decimal_places=2, max_digits=5)
    description = models.TextField()

    def __unicode__(self):
        return '%s' % (self.name)