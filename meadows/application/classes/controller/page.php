<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Page extends Controller_Site_Secure {

	public function before()
	{
		$this->_jquery_ui_init = TRUE;

		parent::before();
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
		if ($this->request->post())
		{
			$title = $this->request->post('title');
			$body = $this->request->post('body');
			$slug = $this->request->post('slug');

			$page = Page::add($title, $body, $slug);

			$this->status('The page has been created');
			$this->request->redirect($page->get_absolute_url());
		}
	}

	public function action_edit()
	{
		$page_id = $this->request->param('id');
		$page = Page::init($page_id);
		$page->load();
		if ($this->request->post())
		{
			$title = $this->request->post('title');
			$body = $this->request->post('body');
			$slug = $this->request->post('slug');

			$page->set('title', $title)
				->set('body', $body)
				->set('slug', $slug)
				->save();

			$this->status('The page has been updated');
			$this->request->redirect($page->get_absolute_url());
		}

		// Set variables for the view.
		$this->page = $page;
	}

	public function action_delete()
	{
		$post_id = $this->request->param('id');
		$post = Post::init($post_id);
		$post->delete();

		$this->status('The post has been added');
		$this->request->redirect('dashboard');
	}

}