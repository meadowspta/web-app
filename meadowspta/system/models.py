from modeldict import ModelDict

from django.db import models

class Var(models.Model):
    key = models.CharField(max_length=255)
    value = models.TextField()

sysvar = ModelDict(Var, key='key', value='value', instances=False)
