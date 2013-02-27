<?php defined('SYSPATH') OR die('No direct access allowed.');

class Post extends Model_Post {

	const HOMEPAGE_MAIN_STORY_ID_VAR = 'homepage_main_story_id';
	
	/**
	 * Create a post.
	 *
	 * @param string - the title of the post.
	 * @param string - the teaser text of the post.
	 * @param string - the content body of the post.
	 * @param int - a unix timestamp of the date/time the post is to be published.
	 * @param string - a custom url slug.
	 * @param array - event information.
	 * @return Model_Post - the added post.
	 */
	public static function add($title, $teaser, $body, $publish_date, $slug = NULL, $event = array())
	{
		$post = self::init();
		$post->set('title', $title)
			->set('teaser', $teaser)
			->set('body', $body)
			->set('slug', $slug)
			->set('is_event', 0)
			->set('publish_date', strtotime($publish_date));
		
		if ( ! empty($event))
		{
			$post->set('is_event', 1);
			$post->set('event', $event);
		}
		
		$post->save();
		
		return $post;
	}
	
	/**
	 * Get a post by the url slug.
	 *
	 * @param string - the URL slug.
	 * @return Model_Post - a post data object.
	 */
	public static function get_with_slug($slug)
	{
		$post = self::init();
		$post->load(array('slug' => $slug));
		
		return $post;
	}
	
	/**
	 * Get recent posts.
	 *
	 * @param int - the number of records to retrieve.
	 * @return array - an array of Model_Post data objects.
	 */
	public static function get_recent($count = 5, $include_unpublished = FALSE)
	{
		$post = self::init();
		
		$query = $include_unpublished === FALSE ? array('publish_date' => array('$lte' => time())) : array();
		$posts = $post->find_all(1, $count)->find($query)->sort_desc('publish_date');
		
		return $posts;
	}
	
	/**
	 * Get recent posts without the main story post.
	 *
	 * @param int - the number of records to retrieve.
	 * @return array - an array of Model_Post data objects.
	 */
	public static function get_recent_without_main_story($count = 5)
	{
		$main_story = self::get_main_story();
		$posts = self::get_recent($count);
		
		return $posts->find(array('id' => array('$ne' => $main_story->id)));
	}
	
	/**
	 * Get recent posts without a specified post.
	 *
	 * @param Model_Post - a Model_Post object that is to be exluded from the results.
	 * @param int - the number of records to retrieve.
	 * @return array - an array of Model_Post data objects.
	 */
	public static function get_recent_without_post(Model_Post $exluded_post, $count = 5)
	{
		$post = self::init();
		$posts = $post->find_all(1, $count)->sort_desc('created');
		
		return $posts->find(array('id' => array('$ne' => $exluded_post->id)));
	}
	
	/**
	 * Sets the main story post.
	 *
	 * @param Model_Post - the Mongo ID of a post.
	 * @return void.
	 */
	public static function set_main_story(Model_Post $post)
	{
		Meadows::$var->setit(self::HOMEPAGE_MAIN_STORY_ID_VAR, $post->id);
	}
	
	/**
	 * Gets the main story post.
	 *
	 * @return Model_Post - a post data object.
	 */
	public static function get_main_story()
	{
		$id = Meadows::$var->getit(self::HOMEPAGE_MAIN_STORY_ID_VAR);
		return self::init($id);
	}
	
	/**
	 * Removes main story if the post passed matches.
	 *
	 * @param Model_Post - the Mongo ID of a post.
	 * @return void.
	 */
	public static function remove_main_story(Model_Post $post)
	{
		$main_story_id = self::get_main_story(self::HOMEPAGE_MAIN_STORY_ID_VAR);
		
		if ($post->id == $main_story_id->id)
		{
			Meadows::$var->setit(self::HOMEPAGE_MAIN_STORY_ID_VAR, NULL);
		}
	}
	
	/**
	 * Get upcoming post marked as an event.
	 *
	 * @param int - the number of records to retrieve.
	 * @return array - an array of Model_Post data objects.
	 */
	public static function get_upcoming_events($count = 5)
	{
		$post = self::init();
		$posts = $post->find_all(1, $count)
			->find(array('is_event' => 1, 'event.start_date' => array('$gte' => time() - (60 * 60 * 8))))
			->sort_asc('event.start_date');
		
		return $posts;
	}

}