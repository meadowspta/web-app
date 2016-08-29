from django.shortcuts import render
from django.template import RequestContext
from django.shortcuts import render_to_response
from django.http import HttpResponseRedirect

from meta.views import Meta

from blog.models import Post
from system.models import sysvar


def view(request, slug):
    blog_post = Post.objects.get(slug=slug)

    # Get other recent news.
    other_news = Post.objects.all().filter(is_published=1).exclude(slug=slug).order_by('-publish_date')[:7]

    meta = Meta(
        title=blog_post.title,
        image=blog_post.main_image.file.url,
    )

    payload = {
        'blog_post': blog_post,
        'other_news': other_news,
        'meta': meta,
    }

    return render_to_response('blog/view.html', payload, context_instance=RequestContext(request))


def list(request):
    blog_posts = Post.objects.all().filter(is_published=1).order_by('-publish_date')

    return render_to_response('blog/list.html', dict(blog_posts=blog_posts), context_instance=RequestContext(request))


def update_featured_post(request, id):
    sysvar['featured_blog_post'] = int(id)
    blog_post = Post.objects.get(id=int(id))
    return HttpResponseRedirect(blog_post.get_absolute_url())