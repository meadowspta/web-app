from  pymongo import MongoClient

from django.conf import settings
from django.core.management.base import BaseCommand, CommandError

from crabfeed.models import Reservation, ReservationTransaction, ReservationTransactionItem


class Command(BaseCommand):
    def handle(self, *args, **options):
        print '\n************************************************'
        print '* Indexing PayPal transactions...'
        print '************************************************'

        # Setup mongodb.
        mongo_config = settings.DATABASES['mongodb']
        client = MongoClient('mongodb://%s:%s/' % (mongo_config['HOST'], mongo_config['PORT']))
        db = client['meadowspta']
        collection = db['search.transactions'];

        # Remove existing indexes.
        collection.remove({})

        reservations = Reservation.objects.all()
        for reservation in reservations:
            items = []
            keywords = []

            data = reservation.as_api_object()

            names = []
            for transaction in data['transactions']:
                names.append(transaction['name'])

            keywords = [
                self.generate_language_stem(data['email']),
                self.generate_language_stem(' '.join(names)),
            ]

            data['keywords'] = ' '.join(keywords)
            data['reservation_number_index'] = '%s %s' % (reservation.reservation_number, reservation.reservation_number.replace('-', ''))

            collection.insert(data)

            print '[INDEXING] Transaction email: %s' % (data['email'])

    def generate_language_stem(self, str):
        words = []
        stems = []

        words = ' '.join(str.split()).lower().split()
        for word in words:
            stem = ''
            for char in word:
                stem += char
                stems.append(stem)

        return ' '.join(stems)


"""
db.search.transactions.ensureIndex(
    {
        name: 'text',
        from_email_address: 'text',
        transaction_id: 'text',
    },
    {
        weights: {
            name: 10,
            from_email_address: 7,
        },
        name: 'TextIndex',
    }
);

db.search.transactions.dropIndexes();
db.search.transactions.ensureIndex(
    {
        email: 'text',
        'transactions.name': 'text',
        reservation_number_index: 'text',
        'transactions.transaction_id': 'text',
        keywords: 'text',
    },
    {
        weights: {
            email: 10,
            'transactions.name': 10,
            reservation_number_index: 7,
            'transactions.transaction_id': 3,
            keywords: 7
        },
        name: 'TextIndex',
    }
);

"""