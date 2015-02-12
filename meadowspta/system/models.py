from decimal import Decimal
from modeldict import ModelDict

from django.db import models
from django.utils.timezone import localtime

from core.models import BaseModel


PAYPAL_HERE_SELLERS = {
    'kfbetts10': 'Keisa Betts',
    'opalenik': 'Gina',
    'INAHMARCELO': 'Inah Marcelo',
    'lisamoca': 'Lisa Oca',
    'calebwhang': 'Caleb Whang',
}

PAYMENT_SOURCES = {
    'paypal_here': 'PayPal Here',
    'paypal_online': 'PayPal Online',
    'form': 'Form',
}

PAYMENT_TYPES = {
    'cash': 'Cash',
    'credit': 'Credit',
    'check': 'Check',
}

class Var(models.Model):
    key = models.CharField(max_length=255)
    value = models.TextField()

sysvar = ModelDict(Var, key='key', value='value', instances=False)

class PayPalTransaction(BaseModel):
    class Meta:
        db_table = 'paypal_transactions'

    def __unicode__(self):
        return self.transaction_id

    date = models.DateTimeField(null=True)
    name = models.CharField(max_length=255, null=True)
    from_email_address = models.EmailField(max_length=255, null=True)
    source = models.CharField(max_length=255, null=True)
    transaction_id = models.CharField(max_length=128, null=True)
    invoice_number = models.CharField(max_length=128, null=True)
    seller_id = models.CharField(max_length=64, null=True)
    payment_type = models.CharField(max_length=128, null=True)

    def get_payment_source(self):
        return PAYMENT_SOURCES[self.source]

    def get_seller(self):
        if self.seller_id:
            return PAYPAL_HERE_SELLERS[self.seller_id]
        else:
            return ''

    def get_name(self):
        override_name = self.paypaltransactionoverride_set.get().name

        if override_name is not None:
            return override_name
        else:
            return self.name

    def get_email(self):
        override_email = self.paypaltransactionoverride_set.get().from_email_address
        if override_email is not None:
            return override_email
        else:
            return self.from_email_address

    def get_payment_type(self):
        return PAYMENT_TYPES[self.payment_type]

    def as_api_object(self):
        items = []

        transaction_items = self.paypaltransactionitem_set.all()
        for item in transaction_items:
            items.append(item.as_api_object());

        data = {
            'id': self.id,
            'date': self.date.isoformat(),
            'name': self.get_name(),
            'from_email_address': self.get_email(),
            'source_id': self.source,
            'source': self.get_payment_source(),
            'transaction_id': self.transaction_id,
            'invoice_number': self.invoice_number,
            'seller': self.get_seller(),
            'payment_type_id': self.payment_type,
            'payment_type': self.get_payment_type(),
            'payment_source': self.get_payment_source(),
            'payment_source_id': self.source,
            'items': items,
        }

        return data

class PayPalTransactionOverride(BaseModel):
    class Meta:
        db_table = 'paypal_transaction_overrides'

    date = models.DateTimeField(null=True)
    name = models.CharField(max_length=255, null=True, blank=True)
    from_email_address = models.EmailField(max_length=255, null=True, blank=True)
    paypal_transaction = models.ForeignKey(PayPalTransaction)
    notes = models.TextField(null=True, blank=True)

class PayPalTransactionItem(BaseModel):
    class Meta:
        db_table = 'paypal_transaction_items'

    paypal_transaction = models.ForeignKey(PayPalTransaction)
    item_title = models.CharField(max_length=255, null=True)
    quantity = models.IntegerField(null=True)
    gross = models.DecimalField(max_digits=16, decimal_places=2, default=Decimal('0.00'), null=True)
    fee = models.DecimalField(max_digits=16, decimal_places=2, null=True)
    net = models.DecimalField(max_digits=16, decimal_places=2, null=True)

    def as_api_object(self):
        data = {
            'item_title': self.item_title,
            'quantity': self.quantity,
            'gross': str(self.gross),
            'fee': str(self.fee),
            'net': str(self.net),
        }

        return data

class PayPalRawTransaction(BaseModel):
    class Meta:
        db_table = 'paypal_raw_transactions'

    date = models.DateTimeField(null=True)
    time_zone = models.CharField(max_length=8, null=True)
    name = models.CharField(max_length=255, null=True)
    type = models.CharField(max_length=255, null=True)
    status = models.CharField(max_length=64, null=True)
    subject = models.CharField(max_length=255, null=True)
    gross = models.DecimalField(max_digits=16, decimal_places=2, default=Decimal('0.00'), null=True)
    fee = models.DecimalField(max_digits=16, decimal_places=2, null=True)
    note = models.CharField(max_length=255, null=True)
    net = models.DecimalField(max_digits=16, decimal_places=2, null=True)
    from_email_address = models.EmailField(max_length=255, null=True)
    to_email_address = models.EmailField(max_length=255, null=True)
    transaction_id = models.CharField(max_length=128, null=True)
    payment_type = models.CharField(max_length=128, null=True)
    counterparty_status = models.CharField(max_length=64, null=True)
    address_status = models.CharField(max_length=64, null=True)
    item_title = models.CharField(max_length=255, null=True)
    item_id = models.CharField(max_length=255, null=True)
    shipping_and_handling_amount = models.DecimalField(max_digits=16, decimal_places=2, null=True)
    insurance_amount = models.DecimalField(max_digits=16, decimal_places=2, null=True)
    sales_tax = models.DecimalField(max_digits=16, decimal_places=2, null=True)
    seller_id = models.CharField(max_length=64, null=True)
    option_1_name = models.CharField(max_length=128, null=True)
    option_1_value = models.CharField(max_length=128, null=True)
    option_2_name = models.CharField(max_length=128, null=True)
    option_2_value = models.CharField(max_length=128, null=True)
    auction_site = models.CharField(max_length=128, null=True)
    buyer_id = models.CharField(max_length=128, null=True)
    item_url = models.URLField(max_length=128, null=True)
    closing_date = models.DateTimeField(null=True)
    reference_txn_id = models.CharField(max_length=128, null=True)
    invoice_number = models.CharField(max_length=128, null=True)
    subscription_number = models.CharField(max_length=128, null=True)
    customer_number = models.CharField(max_length=128, null=True)
    quantity = models.IntegerField(null=True)
    receipt_id = models.CharField(max_length=128, null=True)
    balance = models.DecimalField(max_digits=16, decimal_places=2, null=True)
    address_line_1 = models.CharField(max_length=128, null=True)
    address_line_2_district_neighborhood = models.CharField(max_length=128, null=True)
    town_city = models.CharField(max_length=128, null=True)
    state_provice_region_county_territory_prefecture_republic = models.CharField(max_length=128, null=True)
    zip_postal_code = models.CharField(max_length=64, null=True)
    country = models.CharField(max_length=128, null=True)
    contact_phone_number = models.CharField(max_length=128, null=True)
    balance_impace = models.CharField(max_length=128, null=True)

