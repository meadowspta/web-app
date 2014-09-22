import datetime
from django.db import models
from django.utils import timezone
from django.contrib.auth.models import User
from django.template.defaultfilters import slugify
from meadowspta.core.models import ContentModel


class Event(ContentModel):
    description = models.TextField()
    is_all_day = models.BooleanField(
        default=False,
        verbose_name='All Day Event',
        help_text='If checked, the event times will be ignored.'
    )
    start_date = models.DateTimeField(null=False)
    end_date = models.DateTimeField(null=True)
    location = models.CharField(max_length=255, blank=True)

    def __unicode__(self):
        return str(self.title)

    def before_save(self, action):
        super(Event, self).before_save(action)
        self.slug = slugify('%s-%s' % (self.title, self.start_date.strftime('%B-%-d-%Y')))

    def get_absolute_url(self):
        """
        Get the canonical url.
        """
        return '/events/%s' % self.slug

    @staticmethod
    def get_upcoming_events(options={}):
        """
        Gets a list of published upcoming events.
        """
        defaults = {
            'offset': 0,
            'limit': 10,
        }

        opts = dict(defaults.items() + options.items())

        exclude_date = datetime.datetime.now() - datetime.timedelta(hours=24)
        events = Event.objects.all().filter(is_published=1).exclude(start_date__lt=exclude_date).order_by('start_date')[opts['offset']:opts['limit']]

        return events

    def get_date_range(self, options={}):
        """
        Generate the date range according to the dates set.
        """
        default_options = {
            'date_format': '%B %-d, %Y',
            'time_format': '%-I:%M%p',
        }

        # Merge default options with set ones.
        opts = dict(default_options.items() + options.items())

        if self.is_all_day:
            if self.start_date.strftime('%B/%m/%Y') == self.end_date.strftime('%B/%m/%Y'):
                return self.start_date.strftime(opts['date_format'])
        else:
            if self.start_date.strftime('%B/%m/%Y') == self.end_date.strftime('%B/%m/%Y'):
                return '%s, %s - %s' % (timezone.localtime(self.start_date).strftime(opts['date_format']), timezone.localtime(self.start_date).strftime(opts['time_format']).lower(), timezone.localtime(self.end_date).strftime(opts['time_format']).lower())

