from django.conf import settings
from amazon.api import AmazonAPI

class Singleton(type):
    _instances = {}

    def __call__(cls, *args, **kwargs):
        if cls not in cls._instances:
            cls._instances[cls] = super(Singleton, cls).__call__(*args, **kwargs)
            cls._instances[cls].api = AmazonAPI(settings.AMAZON_ACCESS_KEY_ID, settings.AMAZON_SECRET_KEY, settings.AMAZON_ASSOCIATE_ID)
        return cls._instances[cls]

class AmazonProductAPI(object):
    api = {}
    __metaclass__ = Singleton

    def search(self, q):
        return self.api.search(Keywords=q, SearchIndex='All')

    def get_product(self, product_id):
        return self.api.lookup(ItemId=product_id)

    def get_similar_products(self, product_id):
        return self.api.similarity_lookup(ItemId=product_id)
