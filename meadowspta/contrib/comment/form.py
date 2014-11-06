from django import forms
from meadowspta.contrib.comment.models import Comment


# class CommentForm(forms.Form):
#     class Meta:
#         model = Comment
#     # body = forms.CharField(
#     #     required=True,
#     #     label='Comment',
#     #     widget=forms.Textarea(
#     #         attrs={
#     #             'placeholder': 'Leave a comment',
#     #             'class': 'form-control',
#     #         },
#     #     )
#     # )

#     def save(self, commit=True):
#         print '=============================='
#         print self

#         comment = Comment()
#         comment.body = self.cleaned_data['body']
#         comment.user = self.user

#         if commit:
#             comment.save()

#         return comment