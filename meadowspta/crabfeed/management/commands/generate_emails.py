from django.conf import settings
from django.core.management.base import BaseCommand

from crabfeed.models import Reservation


EMAIL_SUBJECT = 'Your Meadows Crab Feed Dinner Information (Reservation #%s)'
EMAIL_BODY = open('%s/crabfeed/management/commands/email_body.html' % (settings.BASE_DIR), 'r').read()

class Command(BaseCommand):
    def handle(self, *args, **options):
        print '\n************************************************'
        print '* Generating Emails...'
        print '************************************************'

        reservations = Reservation.objects.all()
        for reservation in reservations:
            # Only generate emails for those who have not received it.
            if reservation.email_sent is False:
                token_map = {
                    'name': reservation.name,
                    'email': reservation.email,
                    'reservation_number': reservation.reservation_number,
                    'party_count': reservation.party_count,
                    'qr_code': reservation.get_qr_code_url(),
                }

                subject = EMAIL_SUBJECT % (reservation.reservation_number)
                body = self.replace_email_body_tokens(token_map, EMAIL_BODY)

                file_path = '%s/images/crabfeed/emails/%s.html' % (settings.MEDIA_ROOT, str(reservation.email))

                with open(file_path, 'w+') as file:
                    print 'Creating email file: %s' % file_path
                    file.write('%s\n\n%s' % (str(subject), str(body)))
                    file.close()


    def replace_email_body_tokens(self, token_map, body):
        for token, replacement in token_map.iteritems():
            body = body.replace('{{ %s }}' % token, str(replacement))

        return body

