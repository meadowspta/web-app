"""
Django settings for meadowspta project.

For more information on this file, see
https://docs.djangoproject.com/en/1.6/topics/settings/

For the full list of settings and their values, see
https://docs.djangoproject.com/en/1.6/ref/settings/
"""

# Build paths inside the project like this: os.path.join(BASE_DIR, ...)
import os
from django.conf import global_settings
BASE_DIR = os.path.dirname(os.path.dirname(__file__))

# Quick-start development settings - unsuitable for production
# See https://docs.djangoproject.com/en/1.6/howto/deployment/checklist/

# SECURITY WARNING: keep the secret key used in production secret!
SECRET_KEY = 'lksdkjkfid]s[r[?/><gdjj5s9ba020f2si$@55620d))(@$(02wd2@$%TDFGs/s/as'

# SECURITY WARNING: don't run with debug turned on in production!
DEBUG = True
TEMPLATE_DEBUG = True
ALLOWED_HOSTS = []
SITE_ID = 1

# Application definition

INSTALLED_APPS = (
    'django.contrib.auth',
    'django.contrib.contenttypes',
    'django.contrib.sessions',
    'django.contrib.sites',
    'django.contrib.messages',
    'django.contrib.staticfiles',
    'django.contrib.admin',
    'django.contrib.admindocs',
    'imagekit',
    'modeldict',
    'meta',
    # 'meadowspta.middleware',
    'system',
    'homepage',
    'news',
    'member',
    'auction',
    'event',
    'crabfeed',
)

MIDDLEWARE_CLASSES = (
    'django.middleware.common.CommonMiddleware',
    'django.contrib.sessions.middleware.SessionMiddleware',
    'django.middleware.csrf.CsrfViewMiddleware',
    'django.contrib.auth.middleware.AuthenticationMiddleware',
    'django.contrib.messages.middleware.MessageMiddleware',
    # Uncomment the next line for simple clickjacking protection:
    # 'django.middleware.clickjacking.XFrameOptionsMiddleware',
)

ROOT_URLCONF = 'meadowspta.urls'
WSGI_APPLICATION = 'meadowspta.wsgi.application'

TEMPLATE_DIRS = (
    os.path.join(BASE_DIR, 'views'),
    os.path.join(BASE_DIR, 'templates'),
)

# Database
# https://docs.djangoproject.com/en/1.6/ref/settings/#databases

DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.mysql', # Add 'postgresql_psycopg2', 'mysql', 'sqlite3' or 'oracle'.
        'NAME': 'meadowspta_141106',                      # Or path to database file if using sqlite3.
        'USER': 'meadowspta',                      # Not used with sqlite3.
        'PASSWORD': 'meadowspta',                  # Not used with sqlite3.
        'HOST': '',                      # Set to empty string for localhost. Not used with sqlite3.
        'PORT': '',                      # Set to empty string for default. Not used with sqlite3.
    }
}

# Internationalization
# https://docs.djangoproject.com/en/1.6/topics/i18n/

LANGUAGE_CODE = 'en-us'
TIME_ZONE = 'UTC'
USE_I18N = True
USE_L10N = True
USE_TZ = True


# Static files (CSS, JavaScript, Images)
# https://docs.djangoproject.com/en/1.6/howto/static-files/

MEDIA_URL = '/media/'
MEDIA_ROOT = os.path.join(BASE_DIR, 'media')

# Additional locations of static files
STATIC_URL = '/static/'
STATICFILES_DIRS = (
    os.path.join(BASE_DIR, 'static'),
)

# Site settings.
GOOGLE_ANALYTICS_ID = 'UA-36598051-2'
MAP_URL = 'https://www.google.com/maps/preview?authuser=0#!q=Meadows+Elementary+School%2C+Millbrae%2C+CA&data=!4m10!1m9!4m8!1m3!1d3136!2d-122.419435!3d37.6019973!3m2!1i1436!2i762!4f13.1'

# Meta settings.
META_SITE_PROTOCOL = 'http'
META_SITE_DOMAIN = 'localhost:4000'
META_USE_OG_PROPERTIES = True