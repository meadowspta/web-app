import datetime, hashlib, qrcode
from cStringIO import StringIO

from django.db import models
from django.db.models import Q
from django.conf import settings
from django.core.files import File
from django.core.files.base import ContentFile

from core.models import BaseModel
from system.models import PayPalTransaction, PayPalTransactionItem, PayPalTransactionOverride


class NotificationSignup(BaseModel):
    class Meta:
        db_table = 'crabfeed_notification_signup'

    email = models.EmailField(max_length=255)
    create_date = models.DateTimeField(default=datetime.datetime.now)

    @staticmethod
    def email_exists(email):
        try:
            signup = NotificationSignup.objects.get(email=email)
        except Exception, e:
            return False

        return True

class VolunteerSignup(BaseModel):
    class Meta:
        db_table = 'crabfeed_volunteer_signup'

    full_name = models.CharField(max_length=127)
    email = models.EmailField(max_length=255)
    create_date = models.DateTimeField(default=datetime.datetime.now)

class CheckIn(BaseModel):
    class Meta:
        permissions = (
            ('view_crabfeed_dashboard', 'Can view Crab Feed dashboard'),
        )

class Ticket(BaseModel):
    PAYMENT_TYPE_CREDIT_CARD = 'CC'
    PAYMENT_TYPE_CASH = 'CA'
    PAYMENT_TYPE_CHECK = 'CH'

    PAYMENT_TYPES = (
        (PAYMENT_TYPE_CREDIT_CARD, 'Credit Card'),
        (PAYMENT_TYPE_CHECK, 'Check'),
        (PAYMENT_TYPE_CASH, 'Cash'),
    )

    TICKET_PACKAGE_A = 'A'
    TICKET_PACKAGE_B = 'B'
    TICKET_PACKAGE_C = 'C'
    TICKET_PACKAGE_D = 'D'

    TICKET_PACKAGES = (
        (TICKET_PACKAGE_A, 'Package A'),
        (TICKET_PACKAGE_B, 'Package B'),
        (TICKET_PACKAGE_C, 'Package C'),
        (TICKET_PACKAGE_D, 'Package D'),
    )

    id_hash = models.CharField(max_length=255)
    confirmation_number = models.CharField(max_length=31)
    first_name = models.CharField(max_length=127)
    last_name = models.CharField(max_length=127)
    referrer = models.CharField(max_length=255, blank=True)
    email = models.EmailField(max_length=255)
    paypal_id = models.CharField(max_length=255, blank=True)
    qr_code_image = models.ImageField(upload_to='images/crabfeed/qr-codes')
    donation = models.DecimalField(max_digits=6, decimal_places=2, blank=True, null=True)
    payment_type = models.CharField(max_length=2, choices=PAYMENT_TYPES)
    package = models.CharField(max_length=2, choices=TICKET_PACKAGES)
    create_date = models.DateTimeField(default=datetime.datetime.now)
    check_in_date = models.DateTimeField(blank=True, null=True)
    # comments/notes

    def before_save(self, action, save):
        # Save the generated hash ID.
        self.id_hash = self.get_hash_id()

        # Generate QR code image.
        image = qrcode.make(self.get_check_in_url())
        image.save('media/images/crabfeed/qr-codes/%s.jpg' % self.id_hash)
        self.qr_code_image = 'images/crabfeed/qr-codes/%s.jpg' % self.id_hash

    def get_hash_id(self):
        """
        Generate a hashed ID for publically visible use.
        """
        h = hashlib.new('ripemd160')
        h.update('%s-%s-%s-%s-%s' % (settings.CRABFEED_SECRET_KEY, self.email, self.first_name, self.last_name, self.create_date))
        return h.hexdigest()

    def get_check_in_url(self):
        """
        Generate a url to be encoded into a QR code.
        """
        return '%s://%s/crabfeed/check-in?id=%s' % (settings.META_SITE_PROTOCOL, settings.META_SITE_DOMAIN, self.id_hash)

    def get_confirmation_number(self):
        pass

    def as_api_object(self):
        data = {
            'id': self.id,
            'first_name': self.first_name,
            'last_name': self.last_name,
            'email': self.email,
            'id_hash': self.id_hash,
            'payment_type_id': self.payment_type,
            'payment_type': self.get_payment_type_display(),
        }

        return data

    @staticmethod
    def search(q):
        results = Ticket.objects.all().filter(Q(first_name__icontains=q) | Q(last_name__icontains=q) | Q(email__icontains=q))
        return results