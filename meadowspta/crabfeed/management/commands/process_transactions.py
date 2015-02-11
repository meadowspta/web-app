from django.db.models import Q
from django.conf import settings
from django.core.management.base import BaseCommand, CommandError
from django.core.validators import validate_email
from django.core.exceptions import ValidationError

from system.models import PayPalRawTransaction, PayPalTransaction, PayPalTransactionItem, PayPalTransactionOverride


class Command(BaseCommand):
    def handle(self, *args, **options):
        self.process_paypal_here()
        self.process_shopping_cart()
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
                transaction = PayPalTransaction.objects.get(type=payment_type, transaction_id=raw_transaction.transaction_id)
                # print '[UPDATED] Transaction: %s' % (raw_transaction.transaction_id)

            except Exception, e:
                # Save the main transaction.
                transaction = PayPalTransaction()
                transaction.date = raw_transaction.date
                transaction.name = raw_transaction.name if raw_transaction.name != 'noreply@here.paypal.com' and raw_transaction.name != '' else None
                transaction.from_email_address = raw_transaction.from_email_address if raw_transaction.from_email_address != 'info@meadowspta.org' and raw_transaction.from_email_address != '' else None
                transaction.type = raw_transaction.type
                transaction.transaction_id = raw_transaction.transaction_id
                transaction.save()

                print '[CREATED] Transaction: %s' % (raw_transaction.transaction_id)

                # Query by invoice number to get the items.
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

    def process_shopping_cart(self):
        print '************************************************'
        print '* Processing PayPal Shopping Cart payments...'
        print '************************************************'

        payment_type = 'Shopping Cart Payment Received'

        # PayPal Here.
        raw_transactions = PayPalRawTransaction.objects.all().filter(type=payment_type)
        for raw_transaction in raw_transactions:
            try:
                # Update transaction.
                transaction = PayPalTransaction.objects.get(type=payment_type, transaction_id=raw_transaction.transaction_id)
                # print '[UPDATED] Transaction: %s' % (raw_transaction.transaction_id)

            except Exception, e:
                # Save the main transaction.
                transaction = PayPalTransaction()
                transaction.date = raw_transaction.date
                transaction.name = raw_transaction.name if raw_transaction.name != 'noreply@here.paypal.com' else None
                transaction.from_email_address = raw_transaction.from_email_address if raw_transaction.from_email_address != 'info@meadowspta.org' else None
                transaction.type = raw_transaction.type
                transaction.transaction_id = raw_transaction.transaction_id
                transaction.save()

                self.sync_transaction_override(transaction)

                print '[CREATED] Transaction: %s' % (raw_transaction.transaction_id)

                # Query by invoice number to get the items.
                items = PayPalRawTransaction.objects.all().filter(transaction_id=raw_transaction.transaction_id, type='Shopping Cart Item')
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

    def process_form(self):
        print '************************************************'
        print '* Processing PayPal Here Cash/Check payments...'
        print '************************************************'

        # Invoice.
        raw_transactions = PayPalRawTransaction.objects.all().filter(Q(payment_type='CHECK')|Q(payment_type='CASH'))

        for raw_transaction in raw_transactions:
            try:
                # Update transaction.
                transaction = PayPalTransaction.objects.get(Q(payment_type='CHECK')|Q(payment_type='CASH'), transaction_id=raw_transaction.transaction_id)
                # print '[UPDATED] Transaction: %s' % (raw_transaction.transaction_id)

            except Exception, e:
                # Save the main transaction.
                transaction = PayPalTransaction()
                transaction.date = raw_transaction.date
                transaction.name = raw_transaction.name if raw_transaction.name != 'noreply@here.paypal.com' else None
                transaction.from_email_address = raw_transaction.from_email_address if raw_transaction.from_email_address != 'info@meadowspta.org' else None
                transaction.type = raw_transaction.type
                transaction.transaction_id = raw_transaction.transaction_id
                transaction.seller_id = raw_transaction.seller_id
                transaction.payment_type = raw_transaction.payment_type
                transaction.save()

                self.sync_transaction_override(transaction)

                print '[CREATED] Transaction: %s' % (raw_transaction.transaction_id)

                # Query by invoice number to get the items.
                items = PayPalRawTransaction.objects.all().filter(transaction_id=raw_transaction.transaction_id, type='Invoice Item')
                for item in items:
                    transaction_item = PayPalTransactionItem()
                    transaction_item.paypal_transaction = transaction
                    transaction_item.item_title = item.item_id
                    transaction_item.quantity = item.quantity
                    transaction_item.gross = item.gross
                    transaction_item.fee = item.fee
                    transaction_item.net = item.net
                    transaction_item.save()

                    print '[CREATED] Transaction Item: %s' % (item.item_id)

    def sync_transaction_override(self, transaction):
        try:
            # Update.
            override = PayPalTransactionOverride.objects.get(paypal_transaction=transaction)
        except Exception, e:
            # Save.
            override = PayPalTransactionOverride()
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

            print '[CREATE] Transaction Override: %s' % (transaction.id)




