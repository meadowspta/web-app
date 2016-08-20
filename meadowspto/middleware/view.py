from django.http import HttpResponseRedirect


class ViewInitMiddleware(object):
    def process_request(self, request):
        request.asdf = 'qwer'
        print "asdf"
        exit

    def process_template_response(self, request, response):
        request.context['medows_root_url'] = 'qwer'
        print request
        exit