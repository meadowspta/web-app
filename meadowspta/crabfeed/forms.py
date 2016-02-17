from datetime import datetime

from django import forms
from django.core.management import call_command
from django.contrib.auth.models import User
from django.core.validators import validate_email

from .models import Reservation, ReservationTransaction, ReservationTransactionItem,\
    PAYMENT_SOURCES, PAYMENT_TYPES, TICKET_TYPES, ITEMS

class CheckInForm(forms.Form):
    check_in_count = forms.CharField(
        required=True,
        widget=forms.HiddenInput(
            attrs={
                'value': '{[ checkInCount ]}',
            }
        )
    )

    reservation_id = forms.CharField(
        required=True,
        widget=forms.HiddenInput()
    )

    def save(self, commit=True):
        reservation = Reservation.objects.get(id=int(self.cleaned_data['reservation_id']))
        reservation.party_checked_in = reservation.party_checked_in + int(self.cleaned_data['check_in_count'])
        reservation.check_in_date = datetime.now()

        if commit:
            reservation.save()
            call_command('index_transactions')

        return reservation


class ReservationForm(forms.Form):
    # def __init__(self, questions, *args, **kwargs):
    #     super(ReservationForm, self).__init__(*args, **kwargs)
    #     for i in range(1, 6):
    #         self.fields['item_%d' % i] = forms.ChoiceField(
    #             required=False,
    #             choices=ITEMS,
    #             widget=forms.Select(
    #                 attrs={
    #                     'class': 'form-control',
    #                 },
    #             )
    #         )
    #
    #         self.fields['quantity_%d' % i] = forms.ChoiceField(
    #             required=False,
    #             choices=QUANTITY_RANGE,
    #             widget=forms.Select(
    #                 attrs={
    #                     'class': 'form-control',
    #                 },
    #             )
    #         )

    name = forms.CharField(
        required=True,
        widget=forms.TextInput(
            attrs={
                'class': 'form-control',
            },
        )
    )

    email = forms.EmailField(
        required=True,
        widget=forms.TextInput(
            attrs={
                'class': 'form-control',
            },
        )
    )

    date = forms.DateTimeField(
        required=True,
        widget=forms.DateInput(
            attrs={
                'placeholder': 'mm/dd/yy',
                'class': 'form-control',
            },
        )
    )

    ticket_type = forms.ChoiceField(
        required=True,
        choices=TICKET_TYPES,
        widget=forms.Select(
            attrs={
                'class': 'form-control',
            },
        )
    )

    payment_type = forms.ChoiceField(
        required=True,
        choices=PAYMENT_TYPES,
        widget=forms.Select(
            attrs={
                'class': 'form-control',
            },
        )
    )

    notes = forms.CharField(
        required=False,
        widget=forms.Textarea(
            attrs={
                'class': 'form-control',
            }
        )
    )

    FORM_ITEMS = (
        ('0', 'Select an item'),
        ('1101', 'Crabfeed Dinner Ticket (Earlybird)'),
        ('1002', 'Raffle Ticket (Single)'),
        ('1003', 'Raffle Ticket (5 Pack)'),
        ('1200', 'Donation - $1'),
        ('1201', 'Donation - $25'),
        ('1202', 'Donation - $50'),
        ('1203', 'Donation - $100'),
        ('1204', 'Donation - $250'),
    )

    QUANTITY_RANGE = ((0, 'Select a quantity'), (1, 1), (2, 2), (3, 3), (4, 4), (5, 5), (6, 6), (7, 7), (8, 8), (9, 9), (10, 10), (11, 11), (12, 12))

    item_1 = forms.ChoiceField(
        required=True,
        choices=FORM_ITEMS,
        widget=forms.Select(
            attrs={
                'class': 'form-control',
            },
        )
    )

    quantity_1 = forms.ChoiceField(
        required=True,
        choices=QUANTITY_RANGE,
        widget=forms.Select(
            attrs={
                'class': 'form-control',
            },
        )
    )

    item_2 = forms.ChoiceField(
        required=False,
        choices=FORM_ITEMS,
        widget=forms.Select(
            attrs={
                'class': 'form-control',
            },
        )
    )

    quantity_2 = forms.ChoiceField(
        required=False,
        choices=QUANTITY_RANGE,
        widget=forms.Select(
            attrs={
                'class': 'form-control',
            },
        )
    )

    item_3 = forms.ChoiceField(
        required=False,
        choices=FORM_ITEMS,
        widget=forms.Select(
            attrs={
                'class': 'form-control',
            },
        )
    )

    quantity_3 = forms.ChoiceField(
        required=False,
        choices=QUANTITY_RANGE,
        widget=forms.Select(
            attrs={
                'class': 'form-control',
            },
        )
    )

    item_4 = forms.ChoiceField(
        required=False,
        choices=FORM_ITEMS,
        widget=forms.Select(
            attrs={
                'class': 'form-control',
            },
        )
    )

    quantity_4 = forms.ChoiceField(
        required=False,
        choices=QUANTITY_RANGE,
        widget=forms.Select(
            attrs={
                'class': 'form-control',
            },
        )
    )

    item_5 = forms.ChoiceField(
        required=False,
        choices=FORM_ITEMS,
        widget=forms.Select(
            attrs={
                'class': 'form-control',
            },
        )
    )

    quantity_5 = forms.ChoiceField(
        required=False,
        choices=QUANTITY_RANGE,
        widget=forms.Select(
            attrs={
                'class': 'form-control',
            },
        )
    )

    def save(self, commit=True):
        reservation = Reservation()
        reservation.email = self.cleaned_data['email']
        reservation.date = self.cleaned_data['date']
        reservation.notes = self.cleaned_data['notes']

        if commit:
            reservation.save()

        transaction = ReservationTransaction()
        transaction.reservation = reservation
        transaction.date = self.cleaned_data['date']
        transaction.name = self.cleaned_data['name']
        transaction.payment_type = self.cleaned_data['payment_type']
        transaction.source = 'form'
        transaction.save()

        item = ReservationTransactionItem()
        item.reservation_transaction = transaction
        item.item_title = self.cleaned_data['item_1']
        item.quantity = self.cleaned_data['quantity_1']
        item.gross = 0.0
        item.type = self.cleaned_data['ticket_type']
        item.save()

        party_count = 0
        if self.cleaned_data['item_1'] == '1101':
            party_count = party_count + int(self.cleaned_data['quantity_1'])

        if self.cleaned_data['item_2'] != '0':
            item = ReservationTransactionItem()
            item.reservation_transaction = transaction
            item.item_title = self.cleaned_data['item_2']
            item.quantity = self.cleaned_data['quantity_2']
            item.gross = 0.0
            item.type = self.cleaned_data['ticket_type']
            item.save()

        if self.cleaned_data['item_3'] != '0':
            item = ReservationTransactionItem()
            item.reservation_transaction = transaction
            item.item_title = self.cleaned_data['item_3']
            item.quantity = self.cleaned_data['quantity_3']
            item.gross = 0.0
            item.type = self.cleaned_data['ticket_type']
            item.save()

        if self.cleaned_data['item_4'] != '0':
            item = ReservationTransactionItem()
            item.reservation_transaction = transaction
            item.item_title = self.cleaned_data['item_4']
            item.quantity = self.cleaned_data['quantity_4']
            item.gross = 0.0
            item.type = self.cleaned_data['ticket_type']
            item.save()

        if self.cleaned_data['item_5'] != '0':
            item = ReservationTransactionItem()
            item.reservation_transaction = transaction
            item.item_title = self.cleaned_data['item_5']
            item.quantity = self.cleaned_data['quantity_5']
            item.gross = 0.0
            item.type = self.cleaned_data['ticket_type']
            item.save()

        # Update the party count.
        reservation.party_count = party_count
        reservation.save()

        return reservation