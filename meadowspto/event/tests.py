import datetime
from django.test import TestCase
from event.models import Event
from user.models import User


class EventModelTest(TestCase):
    @staticmethod
    def create_events(count=10):
        for i in range(count):
            event = Event()
            event.title = 'Event title %s' % (i + 1)
            event.description = 'Event description %s' % (i + 1)
            event.start_date = datetime.date.today()
            event.end_date = datetime.date.today()
            event.is_all_day = 1
            event.location = 'Event location %s' % (i + 1)
            event.user = User()
            event.save()

    def test_get_absolute_url(self):
        pass

    def test_get_upcoming_events(self):
        EventModelTest.create_events()
        events = Event.get_upcoming_events()
        print events

    def test_get_date_range(self):
        # Same day time range
        event = Event()
        event.is_all_day = 0
        # event.start_date = datetime.datetime(1977, 4, 9, 10, 00, 00)
        # event.start_date = datetime.strptime('4/9/1977 10:00', '%m/%d/%Y %H:%M')
        # event.end_date = datetime.datetime(1977, 4, 9, 15, 00, 00)
        # event.end_date = datetime.strptime('4/9/1977 15:00', '%m/%d/%Y %H:%M')
        # date_range = event.get_date_range()
        # self.assertEquals(date_range, 'April 9, 1977, 10:00am - 3:00pm')

        # # All day event
        # event = Event()
        # event.is_all_day = 1
        # event.start_date = datetime.datetime(1977, 4, 9, 10, 00, 00)
        # event.end_date = datetime.datetime(1977, 4, 9, 15, 00, 00)
        # date_range = event.get_date_range()
        # # self.assertEquals(date_range, 'April 9, 1977')

        # # Set custom date/time formats
        # event = Event()
        # event.is_all_day = 0
        # event.start_date = datetime.datetime(1977, 4, 9, 10, 00, 00)
        # event.end_date = datetime.datetime(1977, 4, 9, 15, 00, 00)
        # date_range = event.get_date_range({ 'date_format': '%-m/%-d/%Y', 'time_format': '%-H:%M' })
        # # self.assertEquals(date_range, '4/9/1977, 10:00 - 15:00')