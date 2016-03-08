import re, csv

from django.core.management.base import BaseCommand
from django.conf import settings

from crabfeed.models import ReservationTransaction

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
            'Notes',
        ]

        csv_file.writerow(header)

        transactions = ReservationTransaction.objects.all()

        for transaction in transactions:
            notes = transaction.notes if transaction.notes is not None else ''
            notes = re.sub('<.*?>', '', notes)

            row = [
                transaction.date.isoformat(),
                transaction.name if transaction.name is not None else '',
                transaction.email if transaction.email is not None else '',
                transaction.source,
                transaction.transaction_id if transaction.transaction_id is not None else '',
                transaction.payment_type,
                notes.replace('&nbsp;', ' '),
            ]

            csv_file.writerow(row)

