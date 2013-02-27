<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Post extends Meadows_Document {

	protected $name = 'posts';
	
	protected function before_save($action)
	{
		parent::before_save($action);
		
		if (empty($this->slug) || ! isset($this->_changed['slug']))
		{
			$this->set('slug', Url::title($this->title));
		}
		
		$this->set('is_event', (int) $this->is_event);
		
		$event = $this->event;
		if ( ! isset($this->event['end_date']))
		{
			$event['end_date'] = NULL;
		}
		$this->set('event', $event);
	}
	
	/**
	 * Get the absolute URL of a post.
	 *
	 * @return string - the relative URL of the post.
	 */
	public function get_absolute_url()
	{
		return 'news/'.$this->slug;
	}
	
	/**
	 * Checks if the post is a main story post.
	 *
	 * @return BOOL - TRUE|FALSE whether the story is a main story post.
	 */
	public function is_main_story()
	{
		$main_story_id = Meadows::$var->getit(Post::HOMEPAGE_MAIN_STORY_ID_VAR);
		return $this->id == $main_story_id ? TRUE : FALSE;
	}
	
	/**
	 * Get the formatted time output.
	 *
	 * @param string - the date format to be outputted.
	 * @return string - the formatted time.
	 */
	public function get_formatted_times($date_format = 'g:ia')
	{
		$time = '';
		if (date('g:ia', $this->event['start_date']) == '12:00am' && date('g:ia', $this->event['end_date']) == '11:59pm')
		{
			$time = 'All Day Event';
		}
		else
		{
			$time = date($date_format, $this->event['start_date']);
			
			if ($this->event['end_date'])
			{
				$time .= ' - '.date($date_format, $this->event['end_date']);
			}
		}
		
		return $time;
	}
	
	/**
	 * Check if the post is published according to date.
	 *
	 * @return boolean - TRUE|FALSE whether the post is published.
	 */
	public function is_published()
	{
		return $this->publish_date != NULL && $this->publish_date <= time() ? TRUE : FALSE;
	}

}