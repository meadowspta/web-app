from django.db.models import Q
from django.conf import settings
from django.core.management.base import BaseCommand, CommandError
from django.core.validators import validate_email
from django.core.exceptions import ValidationError

from system.models import PayPalRawTransaction, PayPalTransaction, PayPalTransactionItem, PayPalTransactionOverride

PAYMENT_SOURCES = {
    'PayPal Here': 'paypal_here',
    'Shopping Cart Payment Received': 'paypal_online',
    '': 'form',
}

class Command(BaseCommand):
    def handle(self, *args, **options):
        self.process_paypal_here()
        self.process_paypal_online()
        self.process_form()

    def process_paypal_here(self):
        print '************************************************'
        print '* Processing PayPal Here payments...'
        print '************************************************'

        payment_type = 'PayPal Here'

        # PayPal Here.
        raw_transactions = PayPalRawTransaction.objects.all().filter(type=payment_type)
        for raw_transaction in raw_transactions:
            try:
                # Update transaction.
                transaction = PayPalTransaction.objects.get(source=PAYMENT_SOURCES[payment_type], transaction_id=raw_transaction.transaction_id)
                transaction_action = 'UPDATED'
                # print '[UPDATED] Transaction: %s' % (raw_transaction.transaction_id)

            except Exception, e:
                # Save the main transaction.
                transaction_action = 'CREATED'
                transaction = PayPalTransaction()

            transaction.date = raw_transaction.date
            transaction.name = raw_transaction.name if raw_transaction.name != 'noreply@here.paypal.com' and raw_transaction.name != '' else None
            transaction.from_email_address = raw_transaction.from_email_address if raw_transaction.from_email_address != 'info@meadowspta.org' and raw_transaction.from_email_address != '' else None
            transaction.source = PAYMENT_SOURCES[raw_transaction.type]
            transaction.transaction_id = raw_transaction.transaction_id
            transaction.payment_type = 'credit'
            transaction.save()

            print '[%s] Transaction: %s' % (transaction_action, raw_transaction.transaction_id)

            # Query by invoice number to get the items.
            if transaction_action == 'CREATED':
                item_email = None
                items = PayPalRawTransaction.objects.all().filter(transaction_id=raw_transaction.invoice_number, type='Invoice item')
                for item in items:
                    if item.name != 'noreply@here.paypal.com':
                        item_email = item.name

                    transaction_item = PayPalTransactionItem()
                    transaction_item.paypal_transaction = transaction
                    transaction_item.item_title = item.item_id
                    transaction_item.quantity = item.quantity
                    transaction_item.gross = item.gross
                    transaction_item.fee = item.fee
                    transaction_item.net = item.net
                    transaction_item.save()

                    print '[CREATED] Transaction Item: %s' % (item.item_id)

                    if item_email is not None and transaction.from_email_address != '':
                        transaction.from_email_address = item_email
                        transaction.save()

            self.sync_transaction_override(transaction)

    def process_paypal_online(self):
        print '************************************************'
        print '* Processing PayPal Shopping Cart payments...'
        print '************************************************'

        payment_type = 'Shopping Cart Payment Received'

        # PayPal Here.
        raw_transactions = PayPalRawTransaction.objects.all().filter(type=payment_type)
        for raw_transaction in raw_transactions:
            transaction_action = 'CREATED'

            try:
                # Update transaction.
                transaction = PayPalTransaction.objects.get(source=PAYMENT_SOURCES[payment_type], transaction_id=raw_transaction.transaction_id)
                transaction_action = 'UPDATED'

            except Exception, e:
                # Save the main transaction.
                transaction = PayPalTransaction()

            transaction.date = raw_transaction.date
            transaction.name = raw_transaction.name if raw_transaction.name != 'noreply@here.paypal.com' else None
            transaction.from_email_address = raw_transaction.from_email_address if raw_transaction.from_email_address != 'info@meadowspta.org' else None
            transaction.source = PAYMENT_SOURCES[raw_transaction.type]
            transaction.transaction_id = raw_transaction.transaction_id
            transaction.payment_type = 'credit'
            transaction.save()

            print '[%s] Transaction: %s' % (transaction_action, raw_transaction.transaction_id)

            # Query by invoice number to get the items.
            items = PayPalRawTransaction.objects.all().filter(transaction_id=raw_transaction.transaction_id, type='Shopping Cart Item')

            if transaction_action == 'CREATED':
                for item in items:
                    transaction_item = PayPalTransactionItem()
                    transaction_item.paypal_transaction = transaction
                    transaction_item.item_title = item.item_title
                    transaction_item.quantity = item.quantity
                    transaction_item.gross = item.gross
                    transaction_item.fee = item.fee
                    transaction_item.net = item.net
                    transaction_item.save()

                    print '[CREATED] Transaction Item: %s' % (item.item_title)

            self.sync_transaction_override(transaction)

    def process_form(self):
        print '************************************************'
        print '* Processing PayPal Here Cash/Check payments...'
        print '************************************************'

        PAYMENT_TYPES = {
            'CASH': 'cash',
            'CHECK': 'check',
        }

        # Invoice.
        raw_transactions = PayPalRawTransaction.objects.all().filter(Q(payment_type='CHECK')|Q(payment_type='CASH'))

        for raw_transaction in raw_transactions:
            transaction_action = 'CREATED'

            try:
                # Update transaction.
                transaction = PayPalTransaction.objects.get(Q(payment_type='check')|Q(payment_type='cash'), transaction_id=raw_transaction.transaction_id)
                transaction_action = 'UPDATED'

            except Exception, e:
                # Save the main transaction.
                transaction = PayPalTransaction()

            transaction.date = raw_transaction.date
            transaction.name = raw_transaction.name if raw_transaction.name != 'noreply@here.paypal.com' else None
            transaction.from_email_address = raw_transaction.from_email_address if raw_transaction.from_email_address != 'info@meadowspta.org' else None
            transaction.source = 'form'
            transaction.transaction_id = raw_transaction.transaction_id
            transaction.seller_id = raw_transaction.seller_id
            transaction.payment_type = PAYMENT_TYPES[raw_transaction.payment_type]
            transaction.save()

            print '[%s] Transaction: %s' % (transaction_action, raw_transaction.transaction_id)

            # Query by invoice number to get the items.
            if transaction_action == 'CREATED':
                items = PayPalRawTransaction.objects.all().filter(transaction_id=raw_transaction.transaction_id, type='Invoice Item')
                transaction_item_action = 'CREATED'
                for item in items:
                    transaction_item = PayPalTransactionItem()
                    transaction_item.paypal_transaction = transaction
                    transaction_item.item_title = item.item_id
                    transaction_item.quantity = item.quantity
                    transaction_item.gross = item.gross
                    transaction_item.fee = item.fee
                    transaction_item.net = item.net
                    transaction_item.save()

                    print '[%s] Transaction Item: %s' % (transaction_item_action, item.item_id)

            self.sync_transaction_override(transaction)

    def sync_transaction_override(self, transaction):
        try:
            # Update.
            override = PayPalTransactionOverride.objects.get(paypal_transaction=transaction)
            override.date = transaction.date
            override.save()
        except Exception, e:
            # Save.
            override = PayPalTransactionOverride()
            override.date = transaction.date
            override.paypal_transaction = transaction
            override.notes = ''

            # Process email and name.
            override.from_email_address = None
            override.name = None

            if transaction.from_email_address != 'info@meadowspta.org':
                override.from_email_address = transaction.from_email_address

            try:
                # If the name field has an email address, copy it to the email field.
                validate_email(transaction.name)
            except ValidationError as e:
                # Process name.
                if transaction.name != 'noreply@here.paypal.com' and transaction.name != '':
                    override.name = transaction.name
            else:
                override.name = ''
                if transaction.name != 'noreply@here.paypal.com':
                    override.from_email_address = transaction.name

            override.save()

            print '[CREATED] Transaction Override: %s' % (transaction.id)




