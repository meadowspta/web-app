import json
from datetime import datetime

from django.conf import settings
from django.core.management.base import BaseCommand, CommandError

from lib.square.api import SquareApi
from crabfeed.models import Reservation, ReservationTransaction, ReservationTransactionItem, SquareTransaction, SquareTransactionItem, PAYMENT_SOURCES, PAYMENT_TYPES


EXCLUDED_TRANSACTIONS = [
    # '1YM4481693333734K',
]

DINNER_TICKET_SKUS = ['1101']


class Command(BaseCommand):
    def handle(self, *args, **options):
        # Delete all records.
        print 'Deleting records...'

        # SquareTransaction.objects.all().delete()
        # Reservation.objects.all().delete()

        # Get Square transactions.
        api = SquareApi()
        response = api.get_payments()

        # Convert response to JSON object.
        payments = json.loads(response.content)

        # Load tuples.
        payment_source_id, payment_source = PAYMENT_SOURCES[1]
        payment_type_id, payment_type = PAYMENT_TYPES[1]

        for payment in payments:
            # Create a crabfeed reservation.
            reservation = Reservation()
            reservation.email = ''
            reservation.party_count = 0
            reservation.save()

            # Import the transaction.
            transaction = SquareTransaction()
            transaction.reservation = reservation
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

            party_count = 0

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

                # Get the number of tickets sold party count.
                if item_data['item_detail']['sku'] in DINNER_TICKET_SKUS:
                    party_count = party_count + int(item.quantity)

                print '[CREATE] Item: %s' % (item_data['name'])

            # Update the party count.
            reservation.party_count = party_count
            reservation.save()

            # Create transaction item.
            reservation_transaction = ReservationTransaction()
            reservation_transaction.reservation = reservation
            reservation_transaction.date = payment['created_at']
            reservation_transaction.name = ''
            reservation_transaction.source = payment_source_id
            # reservation_transaction.seller_id = models.CharField(max_length=64, null=True, choices=PAYMENT_SELLERS)
            reservation_transaction.payment_type = payment_type_id
            reservation_transaction.save()

            print '[CREATE] Reservation ID: %s' % (reservation.get_reservation_number())

