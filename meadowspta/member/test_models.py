from django.test import TestCase

from member.models import Parent, Child, Address, Sponsorship, Membership

class MemberTestCase(TestCase):
    def test_membership_registration(self):
        address = Address()
        address.address = '123 Anywhere St.'
        address.city = 'Millbrae'
        address.state = 'CA'
        address.zip = '94030'
        address.save()

        parent = Parent()
        parent.guardian_type = 'father'
        parent.first_name = 'Caleb'
        parent.last_name = 'Whang'
        parent.email = 'caleb.whang@meadowspta.org'
        parent.phone_number = '(415) 555-1212'
        parent.employer = 'Common Sense Media, Inc.'
        parent.employer_has_corporate_matching = False
        parent.address = address
        parent.save()
        dad = Parent.objects.get(id=parent.id)

        parent = Parent()
        parent.guardian_type = 'mother'
        parent.first_name = 'Susan'
        parent.last_name = 'Kang'
        parent.email = 'susan.kang@meadowspta.org'
        parent.phone_number = '(415) 555-2121'
        parent.employer = 'Soompi, Inc.'
        parent.employer_has_corporate_matching = False
        parent.address = address
        parent.save()
        mom = Parent.objects.get(id=parent.id)

        child = Child()
        child.first_name = 'CJ'
        child.last_name = 'Whang'
        child.gender = 'male'
        child.status = 'returning'
        child.grade = '3'
        child.save()
        son = Child.objects.get(id=child.id)

        child = Child()
        child.first_name = 'Olive'
        child.last_name = 'Whang'
        child.gender = 'female'
        child.status = 'new'
        child.grade = 'tk'
        child.save()
        daughter = Child.objects.get(id=child.id)

        son.parents.add(mom, dad)
        daughter.parents.add(mom, dad)

        sponsorship = Sponsorship()
        sponsorship.name = 'Bronze'
        sponsorship.save()

        membership = Membership()
        membership.sponsorship = sponsorship
        membership.save()

        membership.members.add(mom, dad)
        print '*=====================================================*'
        for member in membership.members.all():
            print member

        print '*=====================================================*'
        print parent.address
        print parent.address
        for child in parent.children.all():
            print child