import re, csv

from django.core.management.base import BaseCommand
from django.conf import settings

from crabfeed.models import ReservationTransaction, SquareTransaction

CSV_FILE = '2016-crabfeed-transactions.csv'

class Command(BaseCommand):
    def handle(self, *args, **options):
        print '\n************************************************'
        print '* Exporting transactions...'
        print '************************************************'

        file = open('%s/files/crabfeed/%s' % (settings.PRIVATE_ROOT, CSV_FILE), 'wb')
        csv_file = csv.writer(file, quoting=csv.QUOTE_ALL)

        file_rows = []

        header = [
            'Date',
            'Name',
            'Email',
            'Source',
            'Square Transaction ID',
            'Payment Type',
            'Items',
            'Gross Sale',
            'Net Sale',
            'Notes',
        ]

        csv_file.writerow(header)

        transactions = SquareTransaction.objects.all()

        for transaction in transactions:
            reservation = ReservationTransaction.objects.get(transaction_id=transaction.transaction_id)

            items = []
            for item in transaction.squaretransactionitem_set.all():
                items.append('%s: %s' % (item.item_title, item.quantity))

            notes = reservation.notes if reservation.notes is not None else ''
            notes = re.sub('<.*?>', '', notes)

            row = [
                transaction.date.isoformat(),
                transaction.name if transaction.name is not None else '',
                transaction.email if transaction.email is not None else '',
                transaction.source,
                transaction.transaction_id if transaction.transaction_id is not None else '',
                transaction.payment_type,
                '; '.join(items),
                transaction.gross_sale,
                transaction.net_sale,
                notes.replace('&nbsp;', ' '),
            ]

            csv_file.writerow(row)

