from django import forms
from django.contrib.auth.models import User

from crabfeed.models import VolunteerSignup


class VolunteerSignupForm(forms.Form):
    full_name = forms.EmailField(
        required=True,
        label='Full Name',
        widget=forms.TextInput(
            attrs={
                'placeholder': 'Full Name',
                'class': 'form-control',
                'ng-model': 'fullName',
            },
        )
    )

    email = forms.EmailField(
        required=True,
        label='Email',
        widget=forms.TextInput(
            attrs={
                'placeholder': 'Email',
                'class': 'form-control',
                'ng-model': 'email',
            },
        )
    )

    def clean(self):
        print 'cleaningcleaningcleaningcleaningcleaningcleaningcleaningcleaningcleaningcleaning'

        if (len(self.cleaned_data.get('email')) == 0):
            raise ValidationError(
                'Please enter a valid email address.'
            )

        return self.cleaned_data

    def save(self, commit=True):
        print 'savingsavingsavingsavingsavingsavingsavingsavingsavingsavingsaving'

        signup = VolunteerSignup()
        signup.full_name = self.cleaned_data['full_name']
        signup.email = self.cleaned_data['email']

        # if commit:
        #     user.save()

        return signup