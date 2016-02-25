from  pymongo import MongoClient

from django.conf import settings
from django.core.management.base import BaseCommand

from crabfeed.models import Reservation


class Command(BaseCommand):
    def handle(self, *args, **options):
        print '\n************************************************'
        print '* Indexing Reservations...'
        print '************************************************'

        # Setup mongodb.
        mongo_config = settings.DATABASES['mongodb']
        client = MongoClient('mongodb://%s:%s/' % (mongo_config['HOST'], mongo_config['PORT']))
        db = client['meadowspta']
        collection = db['search.reservations'];

        # Remove existing indexes.
        collection.remove({})

        reservations = Reservation.objects.all()
        for reservation in reservations:
            items = []
            keywords = []

            data = reservation.as_api_object()

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
db.search.reservations.dropIndexes();
db.search.reservations.createIndex(
    {
        name: 'text',
        email: 'text',
        reservation_number: 'text',
        transaction_id: 'text',
    },
    {
        weights: {
            email: 10,
            name: 10,
            reservation_number: 7,
            transaction_id: 3,
        },
        name: 'TextIndex',
    }
);

"""