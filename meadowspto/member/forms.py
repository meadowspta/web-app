from django import forms
from django.contrib.auth.models import User

from member.models import GRADES, Member, MemberAddress, MemberEmployer, MemberStudent, MemberSponsorshipPackage


class MemberRegistrationForm(forms.Form):
    def __init__(self, *args, **kwargs):
        super(MemberRegistrationForm, self).__init__(*args, **kwargs)

        # Choice field choices.
        GRADES.insert(0, (None, 'Select a grade'))

        yes_no_choices = [
            (None, '---'),
            ('yes', 'Yes'),
            ('no', 'No'),
        ]

        # Guardian Info.
        for i in xrange(1, 3):
            required = True if i == 1 else False

            self.fields['guardian_%s_first_name' % i] = forms.CharField(
                required=required,
                label='First Name',
                widget=forms.TextInput(
                    attrs={
                        'placeholder': 'First Name',
                        'class': 'form-control input-lg',
                    },
                ),
                error_messages={'required': 'Please let us know what to call you!'}
            )

            self.fields['guardian_%s_last_name' % i] = forms.CharField(
                required=required,
                label='Last Name',
                widget=forms.TextInput(
                    attrs={
                        'placeholder': 'Last Name',
                        'class': 'form-control input-lg',
                    },
                )
            )

            self.fields['guardian_%s_email' % i] = forms.EmailField(
                required=required,
                label='Email',
                widget=forms.TextInput(
                    attrs={
                        'placeholder': 'Email',
                        'class': 'form-control input-lg',
                    },
                )
            )

            self.fields['guardian_%s_address' % i] = forms.CharField(
                required=required,
                label='Address',
                widget=forms.TextInput(
                    attrs={
                        'placeholder': 'Address',
                        'class': 'form-control input-lg',
                    },
                )
            )

            self.fields['guardian_%s_city_state_zip' % i] = forms.CharField(
                required=required,
                label='City, State Zip',
                widget=forms.TextInput(
                    attrs={
                        'placeholder': 'City, State Zip',
                        'value': 'Millbrae, CA 94030',
                        'class': 'form-control input-lg',
                    },
                )
            )

            self.fields['guardian_%s_phone' % i] = forms.CharField(
                required=required,
                label='Phone Number',
                widget=forms.TextInput(
                    attrs={
                        'placeholder': 'Phone Number',
                        'class': 'form-control input-lg',
                    },
                )
            )

            self.fields['guardian_%s_employer' % i] = forms.CharField(
                required=required,
                label='Employer',
                widget=forms.TextInput(
                    attrs={
                        'placeholder': 'Employer',
                        'class': 'form-control input-lg',
                    },
                )
            )

            yes_no_choices[0] = (None, 'Does your employer offers corporate matching?')
            self.fields['guardian_%s_employer_matching' % i] = forms.ChoiceField(
                required=required,
                label='Does your employer offers corporate matching?',
                choices=yes_no_choices,
                widget=forms.Select(
                    attrs={
                        'class': 'form-control input-lg',
                    },
                ),
            )

        # Student Information.
        for i in xrange(1, 6):
            required = True if i == 1 else False

            self.fields['student_%s_first_name' % i] = forms.CharField(
                required=required,
                label='First Name',
                widget=forms.TextInput(
                    attrs={
                        'placeholder': 'First Name',
                        'class': 'form-control input-lg',
                    },
                )
            )

            self.fields['student_%s_last_name' % i] = forms.CharField(
                required=required,
                label='Last Name',
                widget=forms.TextInput(
                    attrs={
                        'placeholder': 'Last Name',
                        'class': 'form-control input-lg',
                    },
                )
            )

            self.fields['student_%s_grade' % i] = forms.ChoiceField(
                required=required,
                label='Last Name',
                choices=GRADES,
                widget=forms.Select(
                    attrs={
                        'class': 'form-control input-lg',
                    },
                ),
            )

            yes_no_choices[0] = (None, 'New Meadows Student?')
            self.fields['student_%s_is_new' % i] = forms.ChoiceField(
                required=required,
                label='New Meadows Student?',
                choices=yes_no_choices,
                widget=forms.Select(
                    attrs={
                        'class': 'form-control input-lg',
                    },
                ),
            )

    def save(self, commit=True):
        student = MemberStudent()
        student.first_name = self.cleaned_data['student_1_first_name']
        student.last_name = self.cleaned_data['student_1_last_name']
        student.grade = self.cleaned_data['student_1_grade']
        student.is_new = True if self.cleaned_data['student_1_is_new'] == 'yes' else False
        student.save()

        employer = MemberEmployer()
        employer.employer = self.cleaned_data['guardian_1_employer']
        employer.offers_matching = True if self.cleaned_data['guardian_1_employer_matching'] == 'yes' else False
        employer.save()

        address = MemberAddress()
        address.address = self.cleaned_data['guardian_1_address']
        address.city = self.cleaned_data['guardian_1_city_state_zip']
        address.state = self.cleaned_data['guardian_1_city_state_zip']
        address.zip_code = self.cleaned_data['guardian_1_city_state_zip']
        address.save()

        member = Member()
        member.first_name = self.cleaned_data['guardian_1_first_name']
        member.last_name = self.cleaned_data['guardian_1_last_name']
        member.email = self.cleaned_data['guardian_1_email']
        member.phone_number = self.cleaned_data['guardian_1_phone']
        member.address = address
        member.employer = employer
        member.save()

        if commit:
            member.students.add(student)
            member.save()

        return member

class MemberLoginForm(forms.Form):
    email = forms.CharField(
        required=True,
        label='Email',
        widget=forms.TextInput(
            attrs={
                # 'placeholder': 'email',
                'class': 'form-control input-lg',
            },
        )
    )

    password = forms.CharField(
        required=True,
        label='Password',
        widget=forms.PasswordInput(
            attrs={
                # 'placeholder': 'password',
                'class': 'form-control input-lg',
            },
        )
    )
