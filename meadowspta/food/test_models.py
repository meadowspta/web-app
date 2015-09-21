from datetime import datetime

from django.test import TestCase

from .models import Menu, Item

class FoodMenuTest(TestCase):
    def test_parse_menu(self):
        check_date = datetime(1977, 4, 9)

        # Menu with title.
        menu = '4/9/77: 100% Whole Grain Cookie Day - Grilled Ham & 18 Cheese Sandwich, Grilled Cheese V, Crispy Chicken Wrap'
        date, title = Menu.parse_menu(menu)
        self.assertEqual(date, check_date)
        self.assertEqual('100% Whole Grain Cookie Day', title)

        # Menu without title.
        menu = '4/9/77: Turkey Hot Dog, Chicken Teriyaki w/ Brown Rice, Veggie Taco Salad V'
        date, title = Menu.parse_menu(menu)
        self.assertEqual(date, check_date)
        self.assertEqual(None, title)


    def test_import_from_string(self):
        # Test menu creation.
        menu_check = ['Grilled Ham & 18 Cheese Sandwich', 'Grilled Cheese', 'Crispy Chicken Wrap']
        menu_str = '4/9/77: 100% Whole Grain Cookie Day - Grilled Ham & 18 Cheese Sandwich, Grilled Cheese V, Crispy Chicken Wrap'
        menu = Menu.import_from_string(menu_str)

        for item in menu.items.all():
            self.assertTrue(item.title in menu_check)

        # Test menu update.
        menu_check = ['Grilled Ham & 18 Cheese Sandwich', 'Grilled Cheese', 'Cheeseburger']
        menu_str = '4/9/77: 100% Whole Grain Cookie Day - Grilled Ham & 18 Cheese Sandwich, Grilled Cheese V, Cheeseburger'
        menu = Menu.import_from_string(menu_str)

        for item in menu.items.all():
            self.assertTrue(item.title in menu_check)


class FoodItemTest(TestCase):
    def test_parse_items(self):
        menu = '4/9/77: 100% Whole Grain Cookie Day - Grilled Ham & 18 Cheese Sandwich, Grilled Cheese V, Crispy Chicken Wrap HOM V'

        items = Item.parse_items(menu)
        self.assertEqual('Grilled Ham & 18 Cheese Sandwich', items[0]['title'])
        self.assertFalse(items[0]['is_vegetarian'])
        self.assertFalse(items[0]['is_harvest_of_the_month'])

        self.assertEqual('Grilled Cheese', items[1]['title'])
        self.assertTrue(items[1]['is_vegetarian'])
        self.assertFalse(items[1]['is_harvest_of_the_month'])

        self.assertEqual('Crispy Chicken Wrap', items[2]['title'])
        self.assertTrue(items[2]['is_vegetarian'])
        self.assertTrue(items[2]['is_harvest_of_the_month'])


    def test_parse_item(self):
        item_str = 'Apple Parfait HOM V'
        item, is_vegetarian, is_harvest_of_the_month = Item.parse_item(item_str)
        self.assertEqual('Apple Parfait', item)
        self.assertTrue(is_vegetarian)
        self.assertTrue(is_harvest_of_the_month)

        item_str = 'Sunbutter & Jelly w/ String Cheese V'
        item, is_vegetarian, is_harvest_of_the_month = Item.parse_item(item_str)
        self.assertEqual('Sunbutter & Jelly with String Cheese', item)
        self.assertTrue(is_vegetarian)
        self.assertFalse(is_harvest_of_the_month)


    def test_exists(self):
        # Create an item.
        item = Item()
        item.title = 'foo'
        item.save()

        exists = Item.exists('foo')
        self.assertTrue(exists)

        exists = Item.exists('foobar')
        self.assertFalse(exists)
