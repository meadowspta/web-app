<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Router extends Controller_Site_Secure {

	public function action_index()
	{
		$slug = $this->request->uri();
		$page = Page::get_with_slug($slug);
		
		// Set variables for the view.
		$this->page = $page;
	}

}