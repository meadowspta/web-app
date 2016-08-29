from django.contrib import admin

from member.models import Member, MemberAddress, MemberEmployer, MemberSponsorshipPackage, MemberStudent


class MemberAdmin(admin.ModelAdmin):
    pass


class MemberAddressAdmin(admin.ModelAdmin):
    pass


class MemberEmployerAdmin(admin.ModelAdmin):
    pass


class MemberSponsorshipPackageAdmin(admin.ModelAdmin):
    pass


class MemberStudentAdmin(admin.ModelAdmin):
    list_display = (
        'get_full_name',
        'grade',
        'is_new',
    )

    def get_full_name(self, obj):
        return '%s %s' % (obj.first_name, obj.last_name)

    get_full_name.short_description = 'Name'


admin.site.register(Member, MemberAdmin)
admin.site.register(MemberAddress, MemberAddressAdmin)
admin.site.register(MemberEmployer, MemberEmployerAdmin)
admin.site.register(MemberSponsorshipPackage, MemberSponsorshipPackageAdmin)
admin.site.register(MemberStudent, MemberStudentAdmin)