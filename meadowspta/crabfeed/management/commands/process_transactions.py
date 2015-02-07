from django.db.models import Q
from django.conf import settings
from django.core.management.base import BaseCommand, CommandError

from system.models import PayPalRawTransaction, PayPalTransaction, PayPalTransactionItem


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
                transaction.name = raw_transaction.name
                transaction.from_email_address = raw_transaction.from_email_address
                transaction.type = raw_transaction.type
                transaction.transaction_id = raw_transaction.transaction_id
                transaction.save()

                print '[CREATED] Transaction: %s' % (raw_transaction.transaction_id)

                # Query by invoice number to get the items.
                items = PayPalRawTransaction.objects.all().filter(transaction_id=raw_transaction.invoice_number, type='Invoice item')
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
                transaction.name = raw_transaction.name
                transaction.from_email_address = raw_transaction.from_email_address
                transaction.type = raw_transaction.type
                transaction.transaction_id = raw_transaction.transaction_id
                transaction.save()

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
                transaction.name = raw_transaction.name
                transaction.from_email_address = raw_transaction.from_email_address
                transaction.type = raw_transaction.type
                transaction.transaction_id = raw_transaction.transaction_id
                transaction.seller_id = raw_transaction.seller_id
                transaction.payment_type = raw_transaction.payment_type
                transaction.save()

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



