import json
from django.template import RequestContext, Context, loader
from django.http import HttpResponse, HttpResponseRedirect
from django.shortcuts import render_to_response
from django.utils.html import strip_tags
from meta.views import Meta
from meadowspta.contrib.system.models import sysvar
from meadowspta.contrib.news.models import News
from meadowspta.contrib.comment.models import Comment, CommentForm

def list(request):
    news_items = News.objects.all().filter(is_published=1).order_by('-publish_date')
    return render_to_response('news/list.html', dict(news_items=news_items), context_instance=RequestContext(request))

def view(request, slug):
    news_item = News.objects.get(slug=slug)

    # Get other recent news.
    other_news = News.objects.all().filter(is_published=1).exclude(slug=slug).order_by('-publish_date')[:7]

    # Get comments for the post.
    comments = Comment.objects.all()

    # Load comment form.
    comment_form = CommentForm(request.POST or None)

    if request.method == 'POST':
        if comment_form.is_valid():
            comment_form.save()
            return HttpResponseRedirect(news_item.get_absolute_url())


    meta = Meta(
        title=news_item.title,
        image=news_item.image_large.url,
        description=news_item.teaser,
    )

    payload = {
        'news_item': news_item,
        'other_news': other_news,
        'meta': meta,
        'comments': comments,
        'comment_form': comment_form,
    }

    return render_to_response('news/view.html', payload, context_instance=RequestContext(request))

def get(request, id):
    news = News.objects.get(id=id)
    data = {
        'id': news.id,
        'title': news.title,
        'teaser': news.teaser,
        'body': news.body,
        'absolute_url': news.get_absolute_url(),
        'image': { 'modal': news.image_modal.url },
    }
    return HttpResponse(json.dumps(data), content_type="application/json")

def update_featured_post(request, id):
    sysvar['news_featured_post'] = int(id)
    news_item = News.objects.get(id=int(id))
    return HttpResponseRedirect(news_item.get_absolute_url())
