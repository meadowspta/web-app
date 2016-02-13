import json
from datetime import datetime

from django.conf import settings
from django.core.management.base import BaseCommand, CommandError

from lib.square.api import SquareApi
from crabfeed.models import Reservation, ReservationTransaction, ReservationTransactionItem, SquareTransaction, SquareTransactionItem, PAYMENT_SOURCES, PAYMENT_TYPES


EXCLUDED_TRANSACTIONS = [
    # '1YM4481693333734K',
]


class Command(BaseCommand):
    def handle(self, *args, **options):
        # Delete all records.
        print 'Deleting records...'

        # print 'Deleting records...'
        SquareTransaction.objects.all().delete()

        # Get Square transactions.
        api = SquareApi()
        response = api.get_payments()

        # Convert response to JSON object.
        payments = json.loads(response.content)

        # Load tuples.
        payment_source_id, payment_source = PAYMENT_SOURCES[1]
        payment_type_id, payment_type = PAYMENT_TYPES[1]

        for payment in payments:
            # Import the transaction.
            transaction = SquareTransaction()
            transaction.date = payment['created_at']
            transaction.source = payment_source_id
            transaction.transaction_id = payment['id']
            # transaction.seller_id =
            transaction.payment_type = payment_type_id
            transaction.payment_url = payment['payment_url']
            transaction.receipt_url = payment['tender'][0]['receipt_url']
            transaction.gross_sale = payment['gross_sales_money']['amount'] / 100
            transaction.net_sale = payment['net_total_money']['amount'] / 100
            transaction.save()

            print '[CREATE] Transaction ID: %s' % (payment['id'])

            # Import the transaction items.
            for item_data in payment['itemizations']:
                item_title = item_data['name']
                if 'item_variation_name' in item_data:
                    item_title = '%s (%s)' % (item_title, item_data['item_variation_name'])

                item = SquareTransactionItem()
                item.transaction = transaction
                item.quantity = float(item_data['quantity'])
                item.item_title = item_title
                item.gross_sale = item_data['gross_sales_money']['amount'] / 100
                item.save()

                print '[CREATE] Item: %s' % (item_data['name'])

