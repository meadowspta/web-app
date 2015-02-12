from  pymongo import MongoClient

from django.conf import settings
from django.core.management.base import BaseCommand, CommandError

from system.models import PayPalRawTransaction, PayPalTransaction, PayPalTransactionItem, PayPalTransactionOverride


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

        transactions = PayPalTransaction.objects.all()
        for transaction in transactions:
            items = []

            transaction_items = transaction.paypaltransactionitem_set.all()
            for item in transaction_items:
                items.append(item.as_api_object());

            data = {
                'id': transaction.id,
                'date': transaction.date.isoformat(),
                'name': transaction.get_name(),
                'from_email_address': transaction.get_email(),
                'source_id': transaction.source,
                'source': transaction.get_payment_source(),
                'transaction_id': transaction.transaction_id,
                'seller': transaction.get_seller(),
                'payment_type_id': transaction.payment_type,
                'payment_type': transaction.get_payment_type(),
                'payment_source': transaction.get_payment_source(),
                'payment_source_id': transaction.source,
                'items': items,
            }

            collection.insert(data)

            print '[INDEXING] Transaction ID: %s' % (transaction.transaction_id)

"""
db.search.transactions.ensureIndex(
    {
        name: 'text',
        from_email_address: 'text',
        transaction_id: 'text',
        seller: 'text',
    },
    {
        weights: {
            name: 10,
            from_email_address: 7,
            seller: 3,
        },
        name: 'TextIndex',
    }
);

"""