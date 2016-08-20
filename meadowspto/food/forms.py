from django import forms


class MenuImportForm(forms.Form):
    menu_list = forms.CharField(required=True, widget=forms.Textarea, label='Menu Items')