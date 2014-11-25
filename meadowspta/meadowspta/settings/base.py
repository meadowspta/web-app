import os
from django.conf import global_settings

DEBUG = False
TEMPLATE_DEBUG = False
BASE_DIR = os.path.abspath(os.path.join(os.path.dirname( __file__ ), '../..'))
SECRET_KEY = 'lksdkjkfid]s[r[?/><gdjj5s9ba020f2si$@55620d))(@$(02wd2@$%TDFGs/s/as'
ALLOWED_HOSTS = []
SITE_ID = 1

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

LANGUAGE_CODE = 'en-us'
TIME_ZONE = 'UTC'
USE_I18N = True
USE_L10N = True
USE_TZ = True

MEDIA_URL = '/media/'
MEDIA_ROOT = os.path.join(BASE_DIR, 'media')

STATIC_URL = '/static/'
STATICFILES_DIRS = (
    os.path.join(BASE_DIR, 'static'),
)

# Site settings.
GOOGLE_ANALYTICS_ID = 'UA-36598051-3'
MAP_URL = 'https://www.google.com/maps/preview?authuser=0#!q=Meadows+Elementary+School%2C+Millbrae%2C+CA&data=!4m10!1m9!4m8!1m3!1d3136!2d-122.419435!3d37.6019973!3m2!1i1436!2i762!4f13.1'

