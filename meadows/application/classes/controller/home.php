<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Site_Secure {

	public function action_index()
	{
		$posts = Post::get_recent_without_main_story();
		$main_post = Post::get_main_story();
		$announcements = Announcement::get();
		
		// Set variables for the view.
		$this->posts = $posts;
		$this->events_block = Meadows::request_instance('post/block/upcoming_events')->execute();
		$this->menu_block = Meadows::request_instance('meal/menu/block/upcoming')->execute();
		
		$this->main_post = $main_post;
		$this->announcements = $announcements;
	}

}
