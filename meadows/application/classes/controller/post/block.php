<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Post_Block extends Controller_Site_Secure {

	public function action_upcoming_events()
	{
		$events = Post::get_upcoming_events();
		
		// Set variables for the view.
		$this->events = $events;
	}
	
	public function action_recent_posts()
	{
		$excluded_post = $this->request->query('excluded_post');
		$posts = Post::get_recent_without_post($excluded_post);
		
		// Set variables for the view.
		$this->posts = $posts;
	}

}