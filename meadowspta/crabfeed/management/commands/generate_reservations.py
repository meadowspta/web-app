from django.conf import settings
from django.core.management.base import BaseCommand, CommandError
from django.db.models import Q

from system.models import PayPalRawTransaction, PayPalTransaction, PayPalTransactionItem, PayPalTransactionOverride
from crabfeed.models import Reservation, ReservationTransaction, ReservationTransactionItem


class Command(BaseCommand):
    def handle(self, *args, **options):
        print '\n************************************************'
        print '* Generating Reservation...'
        print '************************************************'

        self.create_canonical_emails()
        self.update_reservation_number()
        self.associate_transactions()
        self.update_reservation_party_count()

    def create_canonical_emails(self):
        print '\n************************************************'
        print '* Creating canonical emails'
        print '************************************************'

        # Query dinner ticket transactions based on email address.
        transactions = Reservation.get_paypal_canonical_emails()

        for transaction in transactions:
            email = transaction.paypaltransactionoverride_set.get().from_email_address

            try:
                # Check if canonical user exists.
                reservation = Reservation.objects.get(email=email)
                party_count = reservation.party_count

                print '[UPDATE] Reservation: %s' % (email)
            except Exception, e:
                reservation = Reservation()
                party_count = 0

                print '[CREATE] Reservation: %s' % (email)

            # Create/update canonical user.
            reservation.email = email
            reservation.save()

    def update_reservation_number(self):
        print '\n************************************************'
        print '* Generate confirmation numbers'
        print '************************************************'

        reservations = Reservation.objects.all()
        for reservation in reservations:
            reservation.reservation_number = reservation.get_reservation_number()
            reservation.save()

    def associate_transactions(self):
        print '\n************************************************'
        print '* Associating transactions'
        print '************************************************'

        # Clear data out to refresh.
        ReservationTransaction.objects.all().delete()
        ReservationTransactionItem.objects.all().delete()

        reservations = Reservation.objects.all()
        for reservation in reservations:
            # Query transactions associated to canonical email
            transactions = reservation.get_paypal_transactions()

            # Update the transaction count.
            reservation.transaction_count = len(transactions)
            reservation.save()

            for transaction in transactions:
                # Associate transactions to the canonical email.
                overrides = transaction.paypaltransactionoverride_set.get()

                reservation_transaction = ReservationTransaction()
                reservation_transaction.reservation = reservation
                reservation_transaction.date = overrides.date
                reservation_transaction.name = overrides.name
                reservation_transaction.source = transaction.source
                reservation_transaction.transaction_id = transaction.transaction_id
                reservation_transaction.seller_id = transaction.seller_id
                reservation_transaction.payment_type = transaction.payment_type
                reservation_transaction.save()

                print '[CREATE] Associated Transaction: %s' % (transaction.transaction_id)

                # Associate items to transactions.
                dinner_ticket = transaction.paypaltransactionitem_set.get(item_title='dinner_ticket')

                item = ReservationTransactionItem()
                item.reservation_transaction = reservation_transaction
                item.item_title = dinner_ticket.item_title
                item.quantity = dinner_ticket.quantity
                item.gross = dinner_ticket.gross
                item.save()

                print '[CREATE] Associated Transaction Dinner Ticket: %s Quanity: %s' % (dinner_ticket.item_title, dinner_ticket.quantity)

    def update_reservation_party_count(self):
        print '\n************************************************'
        print '* Updating reservation party count'
        print '************************************************'

        reservations = Reservation.objects.all()
        for reservation in reservations:
            reservation.party_count = reservation.get_party_count()
            reservation.save()

            print '[UPDATE] Party Count: %s' % (reservation.party_count)
