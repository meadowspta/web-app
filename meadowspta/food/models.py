import re
from datetime import datetime

from django.db import models

from core.models import BaseModel

MEAL_TYPES = (
    ('breakfast', 'Breakfast'),
    ('lunch', 'Lunch'),
)

class Menu(BaseModel):
    date = models.DateField()
    title = models.CharField(max_length=255, null=True)
    type = models.CharField(max_length=16, choices=MEAL_TYPES)
    items = models.ManyToManyField('Item')

    @staticmethod
    def parse_menu(str):
        """
        Examples:
        9/18/15: 100% Whole Grain Cookie Day - Grilled Ham & 18 Cheese Sandwich, Grilled Cheese V, Crispy Chicken Wrap
        9/17/15: Turkey Hot Dog, Chicken Teriyaki w/ Brown Rice, Veggie Taco Salad V

        :param str:
        :return:
        """
        title = None
        date, str = [x.strip() for x in str.split(':')]

        if len(str.split('-')) > 1:
            title, str = [x.strip() for x in str.split('-')]

        return datetime.strptime(date, '%m/%d/%y'), title


    @staticmethod
    def import_from_string(str):
        """
        Imports the menu items from a formatted string.

        :param str:
        :return:
        """
        menu_date, menu_title = Menu.parse_menu(str)

        # Upsert the menu data.
        menu, created = Menu.objects.get_or_create(date=menu_date)
        menu.title = menu_title
        menu.date = menu_date
        menu.save()

        # Clear out existing menu items to be rewritten.
        menu.items.all().delete()

        # Parse and save the menu items.
        items = Item.parse_items(str)
        for item_data in items:
            item, created = Item.objects.get_or_create(title=item_data['title'])

            if created:
                item.title = item_data['title']
                item.is_vegetarian = item_data['is_vegetarian']
                item.is_harvest_of_the_month = item_data['is_harvest_of_the_month']
                item.save()

            # Add items to the menu.
            menu.items.add(item)

        return menu


class Item(BaseModel):
    title = models.CharField(max_length=255)
    is_vegetarian = models.BooleanField(default=False)
    is_harvest_of_the_month = models.BooleanField(default=False)

    def __unicode__(self):
        return self.title

    @staticmethod
    def parse_items(menu):
        """
        Examples:
        9/18/15: 100% Whole Grain Cookie Day - Grilled Ham & 18 Cheese Sandwich, Grilled Cheese V, Crispy Chicken Wrap

        :param menu:
        :return:
        """
        items = []

        date, menu = [x.strip() for x in menu.split(':')]

        if len(menu.split('-')) > 1:
            menu = [x.strip() for x in menu.split('-')][1]

        item_names = [x.strip() for x in menu.split(',')]
        for item in item_names:
            item_title, is_vegetarian, is_harvest_of_the_month = Item.parse_item(item)
            item_obj = {
                'title': item_title,
                'is_vegetarian': is_vegetarian,
                'is_harvest_of_the_month': is_harvest_of_the_month,
            }

            items.append(item_obj)

        return items


    @staticmethod
    def parse_item(item):
        """
        Parses a menu item and looks for the following:
        - V: vegetarian
        - HOM: harvest of the month

        Also replaces "/w" with "with" in the item name.

        :param item:
        :return:
        """
        is_vegetarian = False
        is_harvest_of_the_month = False

        # Replace w/ => with
        item = item.replace('w/', 'with')

        # Check for the V indicator for vegetarian.
        v = re.search('(.+?) V', item)
        if v:
            item = v.group(1)
            is_vegetarian = True

        hom = re.search('(.+?) HOM', item)
        if hom:
            item = hom.group(1)
            is_harvest_of_the_month = True

        return item, is_vegetarian, is_harvest_of_the_month


    @staticmethod
    def exists(item):
        """
        Checks to see if the item exists by name.

        :param item:
        :return:
        """
        try:
            Item.objects.get(title=item)
            exists = True
        except Item.DoesNotExist:
            exists = False

        return exists