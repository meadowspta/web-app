<?php defined('SYSPATH') OR die('No direct access allowed.');

class Page extends Model_Page {

	/**
	 * Create a page.
	 *
	 * @param string - the title of the post.
	 * @param string - the content body of the post.
	 * @param string - the relative URL slug of the page.
	 * @return Model_Page - the added page.
	 */
	public static function add($title, $body, $slug)
	{
		$page = self::init();
		$page->set('title', $title)
			->set('body', $body)
			->set('slug', $slug);

		$page->save();

		return $page;
	}

	/**
	 * Get a page by the url slug.
	 *
	 * @param string - the URL slug.
	 * @return Model_Post - a post data object.
	 */
	public static function get_with_slug($slug)
	{
		$page = self::init();
		$page->load(array('slug' => $slug));

		return $page;
	}

	/**
	 * Get recent posts.
	 *
	 * @param int - the number of records to retrieve.
	 * @return array - an array of Model_Post data objects.
	 */
	public static function get_recent($count = 5)
	{
		$post = self::init();
		$posts = $post->find_all(1, $count)->sort_desc('created');

		return $posts;
	}

	/**
	 * Get all pages.
	 */
	public static function get_pages()
	{
		$page = self::init();
		$pages = $page->find_all(NULL, NULL);

		return $pages;
	}

}