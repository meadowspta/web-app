from django.shortcuts import render
from django.template import RequestContext
from django.shortcuts import render_to_response

from meta.views import Meta

from blog.models import BlogPost


def view(request, slug):
    blog_post = BlogPost.objects.get(slug=slug)

    # Get other recent news.
    other_news = BlogPost.objects.all().filter(is_published=1).exclude(slug=slug).order_by('-publish_date')[:7]

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
