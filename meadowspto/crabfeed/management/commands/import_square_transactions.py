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
        # Get Square transactions.
        api = SquareApi()
        response = api.get_payments()

        # Convert response to JSON object.
        payments = json.loads(response.content)

        # Import the Square payment data.
        SquareTransaction.import_payments(payments)

        # Port Sqaure payments from the local copy to the reservation system.
        Reservation.port_square_payments()

