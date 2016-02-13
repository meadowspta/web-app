from datetime import datetime

from django import forms
from django.core.management import call_command
from django.contrib.auth.models import User
from django.core.validators import validate_email

from .models import Reservation

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