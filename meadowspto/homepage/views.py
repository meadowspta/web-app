from django.template import RequestContext
from django.shortcuts import render_to_response

from system.models import sysvar
from blog.models import Post


def view(request):
    board = [
        {
            'title': 'President',
            'name': 'Leola Meiners',
        },
        {
            'title': 'Treasurer',
            'name': 'Jane Kim',
        },
        {
            'title': 'Secretary',
            'name': 'Tamiko St. John',
        },
        {
            'title': 'VP, Membership',
            'name': 'Heather Mezzetta',
        },
        {
            'title': 'Co-VP, Fundraising',
            'name': 'Chris Mezzetta',
        },
        {
            'title': 'Co-VP, Fundraising',
            'name': 'Meg Dvorak',
        },
        {
            'title': 'VP, Student Affairs',
            'name': 'Kristin Flor',
        },
        {
            'title': 'Director-at-large',
            'name': 'Larry Wong',
        },
        {
            'title': 'Director-at-large',
            'name': 'Leslie Chen',
        },
    ]


    # news = News.objects.all().filter(is_published=1).exclude(id=int(sysvar['featured_blog_post'])).order_by('-publish_date')[:4]
    posts = Post.objects.all().filter(is_published=1).exclude(id=int(sysvar['featured_blog_post'])).order_by('-publish_date')[:3]
    featured_post = Post.objects.get(id=int(sysvar['featured_blog_post']))
    # upcoming_events = Event.get_upcoming_events({ 'limit': 5 })

    payload = dict(
        board=board,
        posts=posts,
        # upcoming_events=upcoming_events,
        featured_post=featured_post
    )

    return render_to_response('homepage/view.html', payload, context_instance=RequestContext(request))
