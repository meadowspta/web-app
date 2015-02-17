import csv
from datetime import datetime
from decimal import Decimal

from django.conf import settings
from django.core.management.base import BaseCommand, CommandError

from system.models import PayPalRawTransaction, PayPalTransaction, PayPalTransactionItem, PayPalTransactionOverride


EXCLUDED_TRANSACTIONS = [
    'INV2-9JXU-MVWA-EX2C-RDME',
    '38535433EY150362J',
    'INV2-BYGP-HYVW-55FA-DSYY',
    'INV2-QSYT-LE67-NLZE-JANB',
    'INV2-CVHX-7ER3-GW66-P2F4',
    '3VS827324L1527345',
    '9U964987FY041874S',
    '34337964TN235861T',
    'INV2-32E6-CKXZ-6AAE-4UPM',
    'INV2-CGYT-AVKY-S9MY-Z4UR',
    'INV2-UNSS-E7QQ-P35W-MWGD',
    'INV2-LWLY-XH6Z-EAJP-4D7V',
    'INV2-YZA9-YCBE-A5VW-CKL3',
]

FIELD_DATE = 0
FIELD_TIME = 1
FIELD_TIME_ZONE = 2
FIELD_NAME = 3
FIELD_TYPE = 4
FIELD_STATUS = 5
FIELD_SUBJECT = 6
FIELD_GROSS = 7
FIELD_FEE = 8
FIELD_NET = 9
FIELD_NOTE = 10
FIELD_FROM_EMAIL_ADDRESS = 11
FIELD_TO_EMAIL_ADDRESS = 12
FIELD_TRANSACTION_ID = 13
FIELD_PAYMENT_TYPE = 14
FIELD_COUNTERPARTY_STATUS = 15
FIELD_ADDRESS_STATUS = 16
FIELD_ITEM_TITLE = 17
FIELD_ITEM_ID = 18
FIELD_SHIPPING_AND_HANDLING_AMOUNT = 19
FIELD_INSURANCE_AMOUNT = 20
FIELD_SALES_TAX = 21
FIELD_SELLER_ID = 22
FIELD_OPTION_1_NAME = 23
FIELD_OPTION_1_VALUE = 24
FIELD_OPTION_2_NAME = 25
FIELD_OPTION_2_VALUE = 26
FIELD_AUCTION_SITE = 27
FIELD_BUYER_ID = 28
FIELD_ITEM_URL = 29
FIELD_CLOSING_DATE = 30
FIELD_REFERENCE_TXN_ID = 31
FIELD_INVOICE_NUMBER = 32
FIELD_SUBSCRIPTION_NUMBER = 33
FIELD_CUSTOMER_NUMBER = 34
FIELD_QUANTITY = 35
FIELD_RECEIPT_ID = 36
FIELD_BALANCE = 37
FIELD_ADDRESS_LINE_1 = 38
FIELD_ADDRESS_LINE_2_DISTRICT_NEIGHBORHOOD = 39
FIELD_TOWN_CITY = 40
FIELD_STATE_PROVICE_REGION_COUNTY_TERRITORY_PREFECTURE_REPUBLIC = 41
FIELD_ZIP_POSTAL_CODE = 42
FIELD_COUNTRY = 43
FIELD_CONTACT_PHONE_NUMBER = 44
FIELD_BALANCE_IMPACT = 45

CSV_FILE = 'transactions_150203.csv'

class Command(BaseCommand):
    def handle(self, *args, **options):
        # Delete all records.
        print 'Deleting records...'
        PayPalRawTransaction.objects.all().delete()

        rows = csv.reader(open('%s/files/paypal/%s' % (settings.PRIVATE_ROOT, CSV_FILE), 'rb'))

        count = 0
        for row in rows:
            # Skip column title row.
            if count > 0:
                if row[FIELD_TRANSACTION_ID] not in EXCLUDED_TRANSACTIONS:
                    # Save records.
                    transaction = PayPalRawTransaction()
                    transaction.date = datetime.strptime('%s %s' % (row[FIELD_DATE], row[FIELD_TIME]), '%m/%d/%Y %H:%M:%S')
                    transaction.time_zone = row[FIELD_TIME_ZONE]
                    transaction.name = row[FIELD_NAME].strip()
                    transaction.type = row[FIELD_TYPE]
                    transaction.status = row[FIELD_STATUS]
                    transaction.subject = row[FIELD_SUBJECT]
                    transaction.gross = row[FIELD_GROSS]
                    transaction.fee = row[FIELD_FEE] if len(row[FIELD_FEE]) > 0 else None
                    transaction.note = row[FIELD_NOTE]
                    transaction.net = row[FIELD_NET] if len(row[FIELD_NET]) > 0 else None
                    transaction.from_email_address = row[FIELD_FROM_EMAIL_ADDRESS].strip()
                    transaction.to_email_address = row[FIELD_TO_EMAIL_ADDRESS].strip()
                    transaction.transaction_id = row[FIELD_TRANSACTION_ID]
                    transaction.payment_type = row[FIELD_PAYMENT_TYPE]
                    transaction.counterparty_status = row[FIELD_COUNTERPARTY_STATUS]
                    transaction.address_status = row[FIELD_ADDRESS_STATUS]
                    transaction.item_title = row[FIELD_ITEM_TITLE]
                    transaction.item_id = row[FIELD_ITEM_ID]
                    transaction.shipping_and_handling_amount = row[FIELD_SHIPPING_AND_HANDLING_AMOUNT] if len(row[FIELD_SHIPPING_AND_HANDLING_AMOUNT]) > 0 else None
                    transaction.insurance_amount = row[FIELD_INSURANCE_AMOUNT] if len(row[FIELD_INSURANCE_AMOUNT]) > 0 else None
                    transaction.sales_tax = row[FIELD_SALES_TAX] if len(row[FIELD_SALES_TAX]) > 0 else None
                    transaction.seller_id = row[FIELD_SELLER_ID]
                    transaction.option_1_name = row[FIELD_OPTION_1_NAME]
                    transaction.option_1_value = row[FIELD_OPTION_1_VALUE]
                    transaction.option_2_name = row[FIELD_OPTION_2_NAME]
                    transaction.option_2_value = row[FIELD_OPTION_2_VALUE]
                    transaction.auction_site = row[FIELD_AUCTION_SITE]
                    transaction.buyer_id = row[FIELD_BUYER_ID]
                    transaction.item_url = row[FIELD_ITEM_URL]
                    transaction.closing_date = datetime.strptime(row[FIELD_CLOSING_DATE], '%m/%d/%Y %H:%M:%S') if len(row[FIELD_CLOSING_DATE]) > 0 else None
                    transaction.reference_txn_id = row[FIELD_REFERENCE_TXN_ID]
                    transaction.invoice_number = row[FIELD_INVOICE_NUMBER]
                    transaction.subscription_number = row[FIELD_SUBSCRIPTION_NUMBER]
                    transaction.customer_number = row[FIELD_CUSTOMER_NUMBER]
                    transaction.quantity = row[FIELD_QUANTITY] if len(row[FIELD_QUANTITY]) > 0 else 0
                    transaction.receipt_id = row[FIELD_RECEIPT_ID]
                    transaction.balance = row[FIELD_BALANCE].replace(',', '') if len(row[FIELD_BALANCE]) > 0 and row[FIELD_BALANCE] != '...' else None
                    transaction.address_line_1 = row[FIELD_ADDRESS_LINE_1].strip()
                    transaction.address_line_2_district_neighborhood = row[FIELD_ADDRESS_LINE_2_DISTRICT_NEIGHBORHOOD].strip()
                    transaction.town_city = row[FIELD_TOWN_CITY].strip()
                    transaction.state_provice_region_county_territory_prefecture_republic = row[FIELD_STATE_PROVICE_REGION_COUNTY_TERRITORY_PREFECTURE_REPUBLIC].strip()
                    transaction.zip_postal_code = row[FIELD_ZIP_POSTAL_CODE].strip()
                    transaction.country = row[FIELD_COUNTRY].strip()
                    transaction.contact_phone_number = row[FIELD_CONTACT_PHONE_NUMBER].strip()
                    transaction.balance_impact = row[FIELD_BALANCE_IMPACT]
                    transaction.save()

                    print '[CREATE] Transaction ID: %s' % (row[FIELD_TRANSACTION_ID])

            count = count + 1

        # Delete excluded transactions and releated data.
        for transaction_id in EXCLUDED_TRANSACTIONS:
            PayPalRawTransaction.objects.filter(transaction_id=transaction_id).delete()

            try:
                transaction = PayPalTransaction.objects.filter(transaction_id=transaction_id).get()

                items = transaction.paypaltransactionitem_set.all()
                for item in items:
                    item.delete()
            except Exception, e:
                pass

            try:
                transaction.paypaltransactionoverride_set.get().delete()
            except Exception, e:
                pass

            try:
                transaction.delete()
            except Exception, e:
                pass

            print '[DELETE] Transaction ID: %s' % (transaction_id)

