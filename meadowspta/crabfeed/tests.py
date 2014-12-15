from django.test import TestCase

from .models import Ticket


class TicketTest(TestCase):
    def test_get_hash_id(self):
        ticket = Ticket()

        self.assertEqual(len(ticket.id_hash), 0)

        ticket.save()

        self.assertEqual(len(ticket.id_hash), 40)

    def test_save(self):
        ticket = Ticket()

        self.assertEqual(len(ticket.id_hash), 0)

        ticket.save()

        self.assertEqual(len(ticket.id_hash), 40)

    def test_get_check_in_url(self):
        ticket = Ticket()
        ticket.save()

        print ticket.get_check_in_url()

    def test_get_confirmation_number(self):
        pass