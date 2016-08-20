import requests
from django.conf import settings


SQUARE_API_HOST = 'https://connect.squareup.com/v1/me'


class SquareApi:
    def request(self, endpoint):
        """
        Make a request to the Square Connect API.
        :param path: the API endpoint
        :return: the request response
        """
        headers = {
            'Authorization': '%s %s' % ('Bearer', settings.SQUARE_API_TOKEN)
        }

        response = requests.get('%s%s' % (SQUARE_API_HOST, endpoint), headers=headers)

        return response

    def get_items(self):
        """
        Provides summary information for all of a merchant's items.
        https://docs.connect.squareup.com/api/connect/v1/#get-items

        :return: the request response
        """
        return self.request('/items')

    def get_orders(self):
        """
        Provides summary information for a merchant's online store orders.
        https://docs.connect.squareup.com/api/connect/v1/#get-orders

        :return: the request response
        """
        return self.request('/orders')

    def get_payments(self):
        """
        Provides summary information for all payments taken by a merchant or
        any of the merchant's mobile staff during a date range. Date ranges
        cannot exceed one year in length. See Date ranges for details of
        inclusive and exclusive dates.
        https://docs.connect.squareup.com/api/connect/v1/#navsection-payments

        :return: the request response
        """
        return self.request('/payments')