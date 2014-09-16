import random
from django.test import TestCase
from django.contrib.auth.models import User
from meadowspta.contrib.member.models import Group, GroupMembers


class MemberTestCase(TestCase):
    @staticmethod
    def create_test_users(count=1):
        first_names = [
            'Buster',
            'Tim',
            'Michael',
            'Matt',
            'Bruce',
            'Angel',
            'Joe',
            'Pablo',
            'Hunter',
        ]

        last_names = [
            'Posey',
            'Lincecum',
            'Morse',
            'Cain',
            'Bochey',
            'Pagan',
            'Pannik',
            'Sandoval',
            'Pence',
        ]

        users = []

        for index in range(count):
            first_name = random.choice(first_names)
            last_name = random.choice(last_names)
            email = '%s.%s+%s@mpta.org' % (first_name.lower(), last_name.lower(), index)

            user = User()
            user.first_name = first_name
            user.last_name = last_name
            user.email = email
            user.username = email
            user.save()

            users.append(user)

        if count == 1:
            return users[0]
        return users

    def test_create_user(self):
        user = MemberTestCase.create_test_users()

class MemberGroupTestCase(TestCase):
    def test_create_group(self):
        title = 'This is a test group'
        user = MemberTestCase.create_test_users()

        group = Group()
        group.title = title
        group.user = user
        group.save()

        self.assertEqual(group.title, title)
        self.assertEqual(group.user.email, user.email)

        # Check that the user was added as a member of the group.
        members = group.groupmembers_set.all()
        member = members[0]
        self.assertEqual(len(members), 1)
        self.assertEqual(member.user, user)
        self.assertTrue(member.is_admin)

    def test_add_member(self):
        self.assertEqual(1 + 1, 2)

