from .base import *

# Meta settings.
META_SITE_PROTOCOL = 'http'
META_SITE_DOMAIN = 'local.meadowspto.org'
META_USE_OG_PROPERTIES = True

DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.mysql',
        'NAME': 'meadowspto',
        'USER': 'meadowspto',
        'PASSWORD': 'meadowspto',
        'HOST': '',
        'PORT': '',
    }
}