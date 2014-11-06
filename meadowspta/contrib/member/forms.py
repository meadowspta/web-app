from django import forms
from django.contrib.auth.models import User


class MemberRegistrationForm(forms.Form):
    first_name = forms.CharField(
        required=True,
        label='First Name',
        widget=forms.TextInput(
            attrs={
                # 'placeholder': 'first name',
                'class': 'form-control',
            },
        )
    )

    last_name = forms.CharField(
        required=True,
        label='Last Name',
        widget=forms.TextInput(
            attrs={
                # 'placeholder': 'last name',
                'class': 'form-control',
            },
        )
    )

    email = forms.EmailField(
        required=True,
        label='Email',
        widget=forms.TextInput(
            attrs={
                # 'placeholder': 'email',
                'class': 'form-control',
            },
        )
    )

    password = forms.CharField(
        required=True,
        label='Password',
        widget=forms.PasswordInput(
            attrs={
                # 'placeholder': 'password',
                'class': 'form-control',
            },
        )
    )

    def save(self, commit=True):
        user = User()
        user.first_name = self.cleaned_data['first_name']
        user.last_name = self.cleaned_data['last_name']
        user.username = self.cleaned_data['email']
        user.email = self.cleaned_data['email']
        user.set_password(self.cleaned_data['password'])

        if commit:
            user.save()

        return user

class MemberLoginForm(forms.Form):
    email = forms.EmailField(
        required=True,
        label='Email',
        widget=forms.TextInput(
            attrs={
                # 'placeholder': 'email',
                'class': 'form-control',
            },
        )
    )

    password = forms.CharField(
        required=True,
        label='Password',
        widget=forms.PasswordInput(
            attrs={
                # 'placeholder': 'password',
                'class': 'form-control',
            },
        )
    )
