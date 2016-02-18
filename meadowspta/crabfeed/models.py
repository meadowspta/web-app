import hashlib
from decimal import Decimal

from django.db import models
from django.db.models import Q
from django.conf import settings
from django.db.models import Sum

from core.models import BaseModel

PAYMENT_SELLERS = (
    ('opalenik', 'Gina'),
    ('INAHMARCELO', 'Inah Marcelo'),
    ('calebwhang', 'Caleb Whang'),
)

PAYMENT_SOURCES = (
    ('square_app', 'Mobile App'),
    ('square_online', 'Online'),
    ('form', 'Form'),
)

PAYMENT_TYPES = (
    ('cash', 'Cash'),
    ('credit', 'Credit'),
    ('check', 'Check'),
    ('membership', 'PTA Membership Sponsorship'),
    ('complimentary', 'Complimentary'),
    ('teacher_sponsorship', 'Teacher Sponsorship')
)

ITEMS = (
    ('1101', 'Crabfeed Dinner Ticket (Earlybird)'),
    ('1002', 'Raffle Ticket (Single)'),
    ('1003', 'Raffle Ticket (5 Pack)'),
    ('1200', 'Donation - $1'),
    ('1201', 'Donation - $25'),
    ('1202', 'Donation - $50'),
    ('1203', 'Donation - $100'),
    ('1204', 'Donation - $250'),
)

TICKET_TYPES = (
    ('regular', 'Regular Purchase'),
    ('membership', 'PTA Membership Package'),
    ('complimentary', 'Complimentary'),
    ('teacher_sponsorship', 'Teacher Sponsorship')
)

DINNER_TABLES = (
    ('table_01', 'Table 1'),
    ('table_02', 'Table 2'),
    ('table_03', 'Table 3'),
    ('table_04', 'Table 4'),
    ('table_05', 'Table 5'),
    ('table_06', 'Table 6'),
    ('table_07', 'Table 7'),
    ('table_08', 'Table 8'),
    ('table_09', 'Table 9'),
    ('table_10', 'Table 10'),
    ('table_11', 'Table 11'),
    ('table_12', 'Table 12'),
    ('table_13', 'Table 13'),
    ('table_14', 'Table 14'),
    ('table_15', 'Table 15'),
    ('table_16', 'Table 16'),
    ('table_17', 'Table 17'),
    ('table_18', 'Table 18'),
    ('table_19', 'Table 19'),
    ('table_20', 'Table 20'),
    ('table_21', 'Table 21'),
    ('table_22', 'Table 22'),
    ('table_23', 'Table 23'),
    ('table_24', 'Table 24'),
    ('table_25', 'Table 25'),
    ('table_26', 'Table 26'),
    ('table_27', 'Table 27'),
    ('table_28', 'Table 28'),
    ('table_29', 'Table 29'),
    ('table_30', 'Table 30'),
)

DINNER_TICKET_SKUS = ['1101']

class CheckIn(BaseModel):
    class Meta:
        permissions = (
            ('view_crabfeed_dashboard', 'Can view Crab Feed dashboard'),
            ('view_crabfeed_checkin', 'Can view Crab Feed check-in'),
            ('view_crabfeed_checkin_search', 'Can view Crab Feed check-in search'),
        )

class Reservation(BaseModel):
    class Meta:
        db_table = 'crabfeed_reservations'

    date = models.DateTimeField(null=True, blank=True)
    email = models.EmailField(max_length=255, null=True)
    reservation_number = models.CharField(max_length=255, null=True)
    table_assignment = models.CharField(max_length=64, null=True)
    party_count = models.IntegerField(null=True)
    party_checked_in = models.IntegerField(null=True, default=0)
    check_in_date = models.DateTimeField(blank=True, null=True)
    qr_code_image = models.ImageField(upload_to='images/crabfeed/qr-codes')
    id_hash = models.CharField(max_length=255)
    email_sent = models.BooleanField(default=False, blank=True)
    email_sent_date = models.DateTimeField(null=True, blank=True)

    def before_save(self, action):
        # Save the generated hash ID and confirmation number.
        self.id_hash = self.get_hash_id()

    def get_hash_id(self):
        """
        Generate a hashed ID for publically visible use.
        """
        h = hashlib.new('ripemd160')
        h.update('%s-%s' % (settings.CRABFEED_SECRET_KEY, self.email))

        return h.hexdigest()

    def get_check_in_url(self):
        """
        Generate a url to be encoded into a QR code.
        """
        return '%s://%s/crabfeed/check-in?id=%s' % (settings.META_SITE_PROTOCOL, settings.META_SITE_DOMAIN, self.id_hash)

    def get_reservation_number(self):
        number = str(10000 + self.id * 7)
        return '%s-%s' % (number[:2], number[2:])

    def get_party_count(self):
        party_count = 0

        transactions = self.reservationtransaction_set.all()
        for transaction in transactions:
            dinner_ticket = transaction.reservationtransactionitem_set.get(item_title='dinner_ticket')
            party_count = party_count + dinner_ticket.quantity

        return party_count

    def get_qr_code_url(self):
        return '%s://%s%s' % (settings.META_SITE_PROTOCOL, settings.META_SITE_DOMAIN, self.qr_code_image.url)

    def consolidate_names(self):
        names = []

        for transaction in self.reservationtransaction_set.all():
            if len(transaction.name) > 0:
                names.append(transaction.name)

        return names

    def as_api_object(self):
        transactions = []
        reservation_transactions = self.reservationtransaction_set.all()
        for transaction in reservation_transactions:
            transactions.append(transaction.as_api_object())

        data = {
            'id': self.id,
            'date': self.date.isoformat(),
            'name': self.name,
            'names': self.consolidate_names(),
            'reservation_number': self.reservation_number,
            'table_assignment': self.table_assignment,
            'email': self.email,
            # 'transaction_count': self.transaction_count,
            'party_count': self.party_count,
            'party_checked_in': self.party_checked_in,
            'check_in_date': self.check_in_date.isoformat() if self.check_in_date else None,
            # 'qr_code_image': self.qr_code_image,
            'id_hash': self.id_hash,
            'transactions': transactions,
            # 'notes': self.notes if self.notes is not None else '',
        }

        return data

    @staticmethod
    def get_check_in_count():
        return Reservation.objects.aggregate(sum=Sum('party_checked_in'))['sum']

    @staticmethod
    def get_total_party_count():
        return Reservation.objects.aggregate(sum=Sum('party_count'))['sum']

    @staticmethod
    def get_total_raffle_ticket_count(type='single'):
        """
        Get the total number off raffle tickets sold.

        :param type: string that is one of 'single' or '5pack'
        :return:
        """
        sku = '1002' if type is 'single' else '1003'
        sum = ReservationTransactionItem.objects.filter(item_title=sku).aggregate(sum=Sum('quantity'))['sum']
        return sum if sum is not None else 0

    @staticmethod
    def get_total_donation_count():
        """
        Get the total donation amount.
        :return:
        """
        # sum = ReservationTransactionItem.objects.filter(item_title=sku).aggregate(sum=Sum('quantity'))['sum']
        pass

    @staticmethod
    def get_check_in_open_count():
        total_party_count = Reservation.get_total_party_count()
        total_checked_in_count = Reservation.objects.aggregate(sum=Sum('party_checked_in'))['sum']
        return (total_party_count - total_checked_in_count)

    @staticmethod
    def get_check_in_open():
        return Reservation.objects.filter(party_checked_in=0).order_by('-check_in_date')

    @staticmethod
    def get_partial_check_in():
        return Reservation.objects.filter(Q(party_checked_in__lt=models.F('party_count')) & Q(party_checked_in__gt=0)).order_by('-check_in_date')

    @staticmethod
    def get_full_check_in():
        return Reservation.objects.filter(party_checked_in=models.F('party_count')).order_by('-check_in_date')

    def is_all_checked_in(self):
        return self.party_checked_in == self.party_count

    @staticmethod
    def get_reservation_by_transaction_id(id):
        """
        Gets the Reservation of a given transaction ID if it exists in one of it's ReservationTransaction instances.
        If no transaction ID exists, an empty Reservation instance is returned.
        :return:
        Boolean - TRUE|FALSE if the reservation exists
        Reservation - A reservation instance
        """
        try:
            transaction = ReservationTransaction.objects.get(transaction_id=id)
            return True, Reservation.objects.get(id=transaction.reservation_id)
        except ReservationTransaction.DoesNotExist:
            return False, Reservation()

    @staticmethod
    def port_square_payments():
        """
        Ports local Square payment data to the main reservation.

        :return:
        """
        square_transactions = SquareTransaction.objects.all()

        for square_transaction in square_transactions:
            try:
                # Update
                transaction = ReservationTransaction.objects.get(transaction_id=square_transaction.transaction_id)
                transaction_created = False
            except ReservationTransaction.DoesNotExist:
                # Create
                transaction_created = True
                transaction = ReservationTransaction()

            # Create/update reservation transaction.
            transaction.date = square_transaction.date
            transaction.name = square_transaction.name
            transaction.email = square_transaction.email
            transaction.source = square_transaction.source
            transaction.transaction_id = square_transaction.transaction_id
            transaction.payment_type = square_transaction.payment_type
            # transaction.party_count = square_transaction.get_party_count()
            transaction.save()

            action = 'CREATED' if transaction_created else 'UPDATED'
            print '[%s] Transaction ID: %s' % (action, transaction.transaction_id)

            # Create reservation transaction items - only runs once.
            if transaction_created is True:
                for square_item in square_transaction.squaretransactionitem_set.all():
                    item = ReservationTransactionItem()
                    item.reservation_transaction = transaction
                    item.item_title = square_item.sku
                    item.quantity = square_item.quantity
                    item.gross = square_item.gross_sale
                    item.sku = square_item.sku
                    item.type = 'regular'
                    item.save()

                    print '[CREATED] Reservation Item: %s' % (item.item_title)


class ReservationTransaction(BaseModel):
    class Meta:
        db_table = 'crabfeed_reservation_transactions'

    reservation = models.ForeignKey(Reservation, null=True, blank=True)
    date = models.DateTimeField(null=True)
    name = models.CharField(max_length=255, null=True)
    email = models.EmailField(max_length=255, null=True)
    source = models.CharField(max_length=255, null=True, choices=PAYMENT_SOURCES)
    transaction_id = models.CharField(max_length=128, null=True)
    # seller_id = models.CharField(max_length=64, null=True, choices=PAYMENT_SELLERS)
    payment_type = models.CharField(max_length=128, null=True, choices=PAYMENT_TYPES)
    party_count = models.IntegerField(null=True, default=0)
    notes = models.TextField(null=True, blank=True)

    def as_api_object(self):
        items = []

        transaction_items = self.reservationtransactionitem_set.all()

        for item in transaction_items:
            items.append(item.as_api_object())

        data = {
            'id': self.id,
            'date': self.date.isoformat(),
            'name': self.name,
            'email': self.email,
            'source_id': self.source,
            'source': self.get_source_display(),
            'transaction_id': self.transaction_id,
            # 'seller_id': self.seller_id,
            # 'seller': self.get_seller_id_display(),
            'payment_type_id': self.payment_type,
            'payment_type': self.get_payment_type_display(),
            'items': items,
            'notes': self.notes,
        }

        return data

    @staticmethod
    def get_total_party_count():
        return ReservationTransaction.objects.aggregate(sum=Sum('party_count'))['sum']

    def get_party_count(self):
        """Get the number of tickets sold party count for the transaction."""
        party_count = 0

        print 'get_party_count()'
        for item in self.reservationtransactionitem_set.all():
            print 'item: %s' % item
            if item.sku in DINNER_TICKET_SKUS:
                party_count = party_count + int(item.quantity)

        return party_count

class ReservationTransactionItem(BaseModel):
    class Meta:
        db_table = 'crabfeed_reservation_items'

    reservation_transaction = models.ForeignKey(ReservationTransaction)
    item_title = models.CharField(max_length=255, null=True, choices=ITEMS)
    quantity = models.IntegerField(null=True)
    gross = models.DecimalField(max_digits=16, decimal_places=2, default=Decimal('0.00'), null=True)
    sku = models.CharField(max_length=64)

    def as_api_object(self):
        data = {
            'item_title_id': self.item_title,
            'item_title': self.get_item_title_display(),
            'quantity': self.quantity,
            'gross': str(self.gross),
        }

        return data

    def after_save(self, action):
        """
        Update the party count for the parent reservation transaction.

        :param action:
        :return:
        """
        print '*=====================================================*'
        print 'after_save()'
        print self.reservation_transaction.get_party_count()
        self.reservation_transaction.party_count = self.reservation_transaction.get_party_count()
        self.reservation_transaction.save()

class SquareTransaction(BaseModel):
    class Meta:
        db_table = 'crabfeed_square_transactions'

    def __unicode__(self):
        return self.transaction_id

    name = models.CharField(max_length=255, null=True)
    email = models.CharField(max_length=255, null=True)
    date = models.DateTimeField(null=True)
    source = models.CharField(max_length=255, null=True, choices=PAYMENT_SOURCES)
    transaction_id = models.CharField(max_length=128, null=True)
    # seller_id = models.CharField(max_length=64, null=True, choices=PAYMENT_SELLERS)
    payment_type = models.CharField(max_length=128, null=True, choices=PAYMENT_TYPES)
    payment_url = models.CharField(max_length=255)
    receipt_url = models.CharField(max_length=255)
    gross_sale = models.DecimalField(max_digits=16, decimal_places=2, default=Decimal('0.00'))
    net_sale = models.DecimalField(max_digits=16, decimal_places=2, default=Decimal('0.00'))

    def get_seller(self):
        if self.seller_id:
            return self.get_seller_id_display()
        else:
            return ''

    def as_api_object(self):
        items = []

        transaction_items = self.paypaltransactionitem_set.all()
        for item in transaction_items:
            items.append(item.as_api_object())

        data = {
            'id': self.id,
            'date': self.date.isoformat(),
            'transaction_id': self.transaction_id,
            'seller': self.get_seller(),
            'seller_id': self.seller_id,
            'payment_type_id': self.payment_type,
            'payment_type': self.get_payment_type_display(),
            'payment_source': self.get_source_display(),
            'payment_source_id': self.source,
            'items': items,
            'receipt_url': self.receipt_url,
            'payment_url': self.payment_url,
            'gross_sale': str(self.gross_sale),
            'net_sale': str(self.net_sale),
        }

        return data

    def get_party_count(self):
        """Get the number of tickets sold party count."""
        party_count = 0

        for item in self.squaretransactionitem_set.all():
            if item.sku in DINNER_TICKET_SKUS:
                party_count = party_count + int(item.quantity)

        return party_count

    @staticmethod
    def import_payments(payments):
        """
        Imports Square payment data to a local database copy.

        :param payments:
        :return:
        """
        # Load tuples.
        payment_source_id, payment_source = PAYMENT_SOURCES[1]
        payment_type_id, payment_type = PAYMENT_TYPES[1]

        for payment in payments:
            # Import the transaction.
            create = {
                'name': '',
                'email': '',
                'date': payment['created_at'],
                'source': payment_source_id,
                'transaction_id': payment['id'],
                # update.seller_id =
                'payment_type': payment_type_id,
                'payment_url': payment['payment_url'],
                'receipt_url': payment['tender'][0]['receipt_url'],
                'gross_sale': payment['gross_sales_money']['amount'] / 100,
                'net_sale': payment['net_total_money']['amount'] / 100,
            }

            transaction, transaction_created = SquareTransaction.objects.get_or_create(transaction_id=payment['id'], defaults=create)
            action = 'CREATED' if transaction_created else 'EXISTS'

            print '[%s] Transaction ID: %s' % (action, payment['id'])

            # Import the transaction items.
            if transaction_created is True:
                for item_data in payment['itemizations']:
                    item_title = item_data['name']
                    if 'item_variation_name' in item_data:
                        item_title = '%s (%s)' % (item_title, item_data['item_variation_name'])

                    item = SquareTransactionItem()
                    item.transaction = transaction
                    item.quantity = float(item_data['quantity'])
                    item.item_title = item_title
                    item.gross_sale = item_data['gross_sales_money']['amount'] / 100
                    item.sku = item_data['item_detail']['sku']
                    item.save()

                    print '[CREATED] Item: %s' % (item_data['name'])

class SquareTransactionItem(BaseModel):
    class Meta:
        db_table = 'crabfeed_square_transaction_items'

    transaction = models.ForeignKey(SquareTransaction, null=True)
    quantity = models.IntegerField(null=True)
    item_title = models.CharField(max_length=255, null=True, choices=ITEMS)
    gross_sale = models.DecimalField(max_digits=16, decimal_places=2, default=Decimal('0.00'))
    sku = models.CharField(max_length=64)

    def as_api_object(self):
        data = {
            'item_id': self.item_title,
            'item_title': self.get_item_title_display(),
            'quantity': self.quantity,
            'gross_sale': str(self.gross_sale),
            'sku': self.sku,
        }

        return data