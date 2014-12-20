from django.test import TestCase

from .models import Ticket, NotificationSignup

class NotificationSignupTest(TestCase):
    def test_email_exists(self):
        email = 'test@meadowspta.org'

        is_signed_up = NotificationSignup.email_exists(email)
        self.assertFalse(is_signed_up)

        signup = NotificationSignup(email=email)
        signup.save()

        is_signed_up = NotificationSignup.email_exists(email)
        self.assertTrue(is_signed_up)

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