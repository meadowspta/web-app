from decimal import Decimal
from modeldict import ModelDict

from django.db import models

from core.models import BaseModel


class Var(models.Model):
    key = models.CharField(max_length=255)
    value = models.TextField()

sysvar = ModelDict(Var, key='key', value='value', instances=False)

class PayPalTransaction(BaseModel):
    class Meta:
        db_table = 'paypal_transactions'

    date = models.DateTimeField(null=True)
    name = models.CharField(max_length=255, null=True)
    from_email_address = models.EmailField(max_length=255, null=True)
    type = models.CharField(max_length=255, null=True)
    transaction_id = models.CharField(max_length=128, null=True)
    invoice_number = models.CharField(max_length=128, null=True)

    def get_payment_type(self):
        payment_type = self.type
        if self.type == 'Shopping Cart Payment Received':
            payment_type = 'Online'
        elif self.type == 'Invoice Sent':
            payment_type = 'Form'

        return '%s' % (payment_type)

class PayPalTransactionItem(BaseModel):
    class Meta:
        db_table = 'paypal_transaction_items'

    paypal_transaction = models.ForeignKey(PayPalTransaction)
    item_title = models.CharField(max_length=255, null=True)
    quantity = models.IntegerField(null=True)
    gross = models.DecimalField(max_digits=16, decimal_places=2, default=Decimal('0.00'), null=True)
    fee = models.DecimalField(max_digits=16, decimal_places=2, null=True)
    net = models.DecimalField(max_digits=16, decimal_places=2, null=True)

class PayPalRawTransaction(BaseModel):
    class Meta:
        db_table = 'paypal_raw_transactions'

    date = models.DateTimeField(null=True)
    time_zone = models.CharField(max_length=8, null=True)
    name = models.CharField(max_length=255, null=True)
    type = models.CharField(max_length=255, null=True)
    status = models.CharField(max_length=64, null=True)
    gross = models.DecimalField(max_digits=16, decimal_places=2, default=Decimal('0.00'), null=True)
    fee = models.DecimalField(max_digits=16, decimal_places=2, null=True)
    net = models.DecimalField(max_digits=16, decimal_places=2, null=True)
    from_email_address = models.EmailField(max_length=255, null=True)
    to_email_address = models.EmailField(max_length=255, null=True)
    transaction_id = models.CharField(max_length=128, null=True)
    counterparty_status = models.CharField(max_length=64, null=True)
    address_status = models.CharField(max_length=64, null=True)
    item_title = models.CharField(max_length=255, null=True)
    item_id = models.CharField(max_length=255, null=True)
    shipping_and_handling_amount = models.DecimalField(max_digits=16, decimal_places=2, null=True)
    insurance_amount = models.DecimalField(max_digits=16, decimal_places=2, null=True)
    sales_tax = models.DecimalField(max_digits=16, decimal_places=2, null=True)
    option_1_name = models.CharField(max_length=128, null=True)
    option_1_value = models.CharField(max_length=128, null=True)
    option_2_name = models.CharField(max_length=128, null=True)
    option_2_value = models.CharField(max_length=128, null=True)
    auction_state = models.CharField(max_length=128, null=True)
    buyer_id = models.CharField(max_length=128, null=True)
    item_url = models.URLField(max_length=128, null=True)
    closing_date = models.DateTimeField(null=True)
    escrow_id = models.CharField(max_length=128, null=True)
    invoice_id = models.CharField(max_length=128, null=True)
    reference_txn_id = models.CharField(max_length=128, null=True)
    invoice_number = models.CharField(max_length=128, null=True)
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
