import csv
from datetime import datetime
from decimal import Decimal

from django.conf import settings
from django.core.management.base import BaseCommand, CommandError

from system.models import PayPalRawTransaction


FIELD_DATE = 0
FIELD_TIME = 1
FIELD_TIME_ZONE = 2
FIELD_NAME = 3
FIELD_TYPE = 4
FIELD_STATUS = 5
FIELD_GROSS = 6
FIELD_FEE = 7
FIELD_NET = 8
FIELD_FROM_EMAIL_ADDRESS = 9
FIELD_TO_EMAIL_ADDRESS = 10
FIELD_TRANSACTION_ID = 11
FIELD_COUNTERPARTY_STATUS = 12
FIELD_ADDRESS_STATUS = 13
FIELD_ITEM_TITLE = 14
FIELD_ITEM_ID = 15
FIELD_SHIPPING_AND_HANDLING_AMOUNT = 16
FIELD_INSURANCE_AMOUNT = 17
FIELD_SALES_TAX = 18
FIELD_OPTION_1_NAME = 19
FIELD_OPTION_1_VALUE = 20
FIELD_OPTION_2_NAME = 21
FIELD_OPTION_2_VALUE = 22
FIELD_AUCTION_STATE = 23
FIELD_BUYER_ID = 24
FIELD_ITEM_URL = 25
FIELD_CLOSING_DATE = 26
FIELD_ESCROW_ID = 27
FIELD_INVOICE_ID = 28
FIELD_REFERENCE_TXN_ID = 29
FIELD_INVOICE_NUMBER = 30
FIELD_CUSTOMER_NUMBER = 31
FIELD_QUANTITY = 32
FIELD_RECEIPT_ID = 33
FIELD_BALANCE = 34
FIELD_ADDRESS_LINE_1 = 35
FIELD_ADDRESS_LINE_2_DISTRICT_NEIGHBORHOOD = 36
FIELD_TOWN_CITY = 37
FIELD_STATE_PROVICE_REGION_COUNTY_TERRITORY_PREFECTURE_REPUBLIC = 38
FIELD_ZIP_POSTAL_CODE = 39
FIELD_COUNTRY = 40
FIELD_CONTACT_PHONE_NUMBER = 41

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
                # Save records.
                transaction = PayPalRawTransaction()
                transaction.date = datetime.strptime('%s %s' % (row[FIELD_DATE], row[FIELD_TIME]), '%m/%d/%Y %H:%M:%S')
                transaction.time_zone = row[FIELD_TIME_ZONE]
                transaction.name = row[FIELD_NAME]
                transaction.type = row[FIELD_TYPE]
                transaction.status = row[FIELD_STATUS]
                transaction.gross = row[FIELD_GROSS]
                transaction.fee = row[FIELD_FEE] if len(row[FIELD_FEE]) > 0 else None
                transaction.net = row[FIELD_NET] if len(row[FIELD_NET]) > 0 else None
                transaction.from_email_address = row[FIELD_FROM_EMAIL_ADDRESS]
                transaction.to_email_address = row[FIELD_TO_EMAIL_ADDRESS]
                transaction.transaction_id = row[FIELD_TRANSACTION_ID]
                transaction.counterparty_status = row[FIELD_COUNTERPARTY_STATUS]
                transaction.address_status = row[FIELD_ADDRESS_STATUS]
                transaction.item_title = row[FIELD_ITEM_TITLE]
                transaction.item_id = row[FIELD_ITEM_ID]
                transaction.shipping_and_handling_amount = row[FIELD_SHIPPING_AND_HANDLING_AMOUNT] if len(row[FIELD_SHIPPING_AND_HANDLING_AMOUNT]) > 0 else None
                transaction.insurance_amount = row[FIELD_INSURANCE_AMOUNT] if len(row[FIELD_INSURANCE_AMOUNT]) > 0 else None
                transaction.sales_tax = row[FIELD_SALES_TAX] if len(row[FIELD_SALES_TAX]) > 0 else None
                transaction.option_1_name = row[FIELD_OPTION_1_NAME]
                transaction.option_1_value = row[FIELD_OPTION_1_VALUE]
                transaction.option_2_name = row[FIELD_OPTION_2_NAME]
                transaction.option_2_value = row[FIELD_OPTION_2_VALUE]
                transaction.auction_state = row[FIELD_AUCTION_STATE]
                transaction.buyer_id = row[FIELD_BUYER_ID]
                transaction.item_url = row[FIELD_ITEM_URL]
                transaction.closing_date = datetime.strptime(row[FIELD_CLOSING_DATE], '%m/%d/%Y %H:%M:%S') if len(row[FIELD_CLOSING_DATE]) > 0 else None
                transaction.escrow_id = row[FIELD_ESCROW_ID]
                transaction.invoice_id = row[FIELD_INVOICE_ID]
                transaction.reference_txn_id = row[FIELD_REFERENCE_TXN_ID]
                transaction.invoice_number = row[FIELD_INVOICE_NUMBER]
                transaction.customer_number = row[FIELD_CUSTOMER_NUMBER]
                transaction.quantity = row[FIELD_QUANTITY] if len(row[FIELD_QUANTITY]) > 0 else 0
                transaction.receipt_id = row[FIELD_RECEIPT_ID]
                transaction.balance = row[FIELD_BALANCE].replace(',', '') if len(row[FIELD_BALANCE]) > 0 and row[FIELD_BALANCE] != '...' else None
                transaction.address_line_1 = row[FIELD_ADDRESS_LINE_1]
                transaction.address_line_2_district_neighborhood = row[FIELD_ADDRESS_LINE_2_DISTRICT_NEIGHBORHOOD]
                transaction.town_city = row[FIELD_TOWN_CITY]
                transaction.state_provice_region_county_territory_prefecture_republic = row[FIELD_STATE_PROVICE_REGION_COUNTY_TERRITORY_PREFECTURE_REPUBLIC]
                transaction.zip_postal_code = row[FIELD_ZIP_POSTAL_CODE]
                transaction.country = row[FIELD_COUNTRY]
                transaction.contact_phone_number = row[FIELD_CONTACT_PHONE_NUMBER]
                transaction.save()

                print '[CREATE] Transaction ID: %s' % (row[FIELD_TRANSACTION_ID])

            count = count + 1

                # # Save District.
                # try:
                #     district = District.objects.get(name=row[SCHOOL_DISTRICT])

                #     print '[UPDATING DISTRICT] %s' % (row[SCHOOL_DISTRICT])
                # except Exception, e:
                #     district = District()

                #     print '[CREATING DISTRICT] %s' % (row[SCHOOL_DISTRICT])

                # district.name = row[SCHOOL_DISTRICT]
                # district.save()

                # # Save School.
                # try:
                #     school = School.objects.get(name=row[SCHOOL_NAME])

                #     print '[UPDATING SCHOOL] %s' % (row[SCHOOL_NAME])
                # except Exception, e:
                #     school = School()

                #     print '[CREATING SCHOOL] %s' % (row[SCHOOL_NAME])

                # school.name = row[SCHOOL_NAME]
                # school.district = district
                # school.save()

