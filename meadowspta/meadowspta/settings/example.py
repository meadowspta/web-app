from .base import *

DEBUG = True
TEMPLATE_DEBUG = True
SECRET_KEY = 'sdlfkhas;dlfhaklsjdhfalksjdhflaksjdhflaksjhdflkajshdflkjahsdlfkj'

DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.', # Add 'postgresql_psycopg2', 'mysql', 'sqlite3' or 'oracle'.
        'NAME': '',                      # Or path to database file if using sqlite3.
        'USER': '',                      # Not used with sqlite3.
        'PASSWORD': '',                  # Not used with sqlite3.
        'HOST': '',                      # Set to empty string for localhost. Not used with sqlite3.
        'PORT': '',                      # Set to empty string for default. Not used with sqlite3.
    }
}

# Meta settings.
META_SITE_PROTOCOL = 'http'
META_SITE_DOMAIN = 'localhost:4000'
META_USE_OG_PROPERTIES = True

CRABFEED_SECRET_KEY = ''