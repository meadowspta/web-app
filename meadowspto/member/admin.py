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
    pass


admin.site.register(Member, MemberAdmin)
admin.site.register(MemberAddress, MemberAddressAdmin)
admin.site.register(MemberEmployer, MemberEmployerAdmin)
admin.site.register(MemberSponsorshipPackage, MemberSponsorshipPackageAdmin)
admin.site.register(MemberStudent, MemberStudentAdmin)