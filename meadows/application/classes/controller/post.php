<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Post extends Controller_Site_Secure {

	public function before()
	{
		$this->_jquery_ui_init = TRUE;
		$this->_wysiwyg_init = TRUE;
		
		parent::before();
	}
	
	public function action_index()
	{
		if ($this->user->has_access('edit all posts'))
		{
			$posts = Post::get_recent(15, TRUE);
		}
		else
		{
			$posts = Post::get_recent(15);
		}
		
		// Set variables for the view.
		$this->posts = $posts;
		$this->events_block = Meadows::request_instance('post/block/upcoming_events')->execute();
	}
	
	public function action_view()
	{
		$slug = $this->request->param('slug');
		$post = Post::get_with_slug($slug);
		$exluded_post = Post::get_with_slug($slug);
		
		// Set variables for the view.
		$this->post = $post;
		$this->recent_posts_block = Meadows::request_instance('post/block/recent_posts')->query(array('excluded_post' => $exluded_post))->execute();
	}
	
	public function action_add()
	{
		$main_story = Post::get_main_story();
		
		if ($this->request->post())
		{
			$title = $this->request->post('title');
			$teaser = $this->request->post('teaser');
			$body = $this->request->post('body');
			$slug = $this->request->post('slug');
			$is_event = $this->request->post('is-event');
			$event = $this->request->post('event');
			$publish_date = $this->request->post('publish_date').' '.$this->request->post('publish_time');
			$is_main_story = $this->request->post('is-main-story');
			
			$event_data = array();
			if ($is_event)
			{
				$event_data = array(
					'start_date' => strtotime($event['start_date'].' '.$event['start_time']),
					'end_date' => strtotime($event['end_date'].' '.$event['end_time']),
					'location' => $event['location'],
				);
			}
			
			$post = Post::add($title, $teaser, $body, $publish_date, $slug, $event_data);
			
			// Upload image.
			if ( ! empty($_FILES['image']['name']))
			{
				$image = new Meadows_Image('posts', $post->id);
				$response = $image->upload($_FILES['image']);
				
				// Save image paths.
				if ($response['success'])
				{
					$post->load();
					$post->set('images', $response['files'])->save();
				}
			}
			
			if ($is_main_story)
			{
				Post::set_main_story($post);
			}
			
			$this->status('The post has been added');
			$this->request->redirect($post->get_absolute_url());
		}
		
		// Set variables for the view.
		$this->main_story = $main_story;
	}
	
	public function action_edit()
	{
		$post_id = $this->request->param('id');
		$post = Post::init($post_id);
		$main_story = Post::get_main_story();
		
		if ($this->request->post())
		{
			$title = $this->request->post('title');
			$teaser = $this->request->post('teaser');
			$body = $this->request->post('body');
			$slug = $this->request->post('slug');
			$is_event = $this->request->post('is-event');
			$event = $this->request->post('event');
			$publish_date = $this->request->post('publish_date').' '.$this->request->post('publish_time');
			$is_main_story = $this->request->post('is-main-story');
			
			$post->load();
			$post->set('title', $title)
				->set('teaser', $teaser)
				->set('body', $body)
				->set('slug', $slug)
				->set('is_event', $is_event)
				->set('publish_date', strtotime($publish_date));
			
			if ($is_event)
			{
				$data = array(
					'start_date' => strtotime($event['start_date'].' '.$event['start_time']),
					'end_date' => strtotime($event['end_date'].' '.$event['end_time']),
					'location' => $event['location'],
				);
				$post->set('event', $data);
			}
			
			// Upload image.
			if ( ! empty($_FILES['image']['name']))
			{
				$image = new Meadows_Image('posts', $post->id);
				$response = $image->upload($_FILES['image']);
				
				// Save image paths.
				if ($response['success'])
				{
					$post->set('images', $response['files']);
				}
			}
			$post->save();
			
			// Save if main-story.
			if ($is_main_story)
			{
				Post::set_main_story($post);
			}
			else
			{
				Post::remove_main_story($post);
			}
			
			$this->status('The post has been updated');
			$this->request->redirect($post->get_absolute_url());
		}
		
		// Set variables for the view.
		$post->load();
		$this->post = $post;
		$this->main_story = $main_story;
	}
	
	public function action_delete()
	{
		$post_id = $this->request->param('id');
		$post = Post::init($post_id);
		$post->delete();
		
		$this->status('The post has been deleted');
		$this->request->redirect('dashboard');
	}

}