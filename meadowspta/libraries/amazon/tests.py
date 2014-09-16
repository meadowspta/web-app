from django.test import TestCase
from amazon.api import AmazonAPI, AmazonSearch
from meadowspta.libraries.amazon.api import AmazonProductAPI

class AmazonAPITestCase(TestCase):
    def test_get_product(self):
        asin = 'B00BB5DJU6'
        api = AmazonProductAPI()
        product = api.get_product(product_id=asin)
        self.assertEqual(product.asin, asin)

    def test_search(self):
        q = 'paper'
        api = AmazonProductAPI()
        products = api.search(q)

        # Check that there are results.
        self.assertIsInstance(products, AmazonSearch)

        for product in products:
            self.assertIsNotNone(product.asin)

    def test_get_similar_products(self):
        asin = 'B00BB5DJU6'
        api = AmazonProductAPI()
        products = api.get_similar_products(asin)

        # Check that there are results.
        self.assertNotEqual(len(products), 0)

        for product in products:
            self.assertIsNotNone(product.asin)