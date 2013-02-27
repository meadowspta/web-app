<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Page extends Meadows_Document {

	protected $name = 'pages';
	
	protected $_references = array(
		//'user' => array('model' => 'user'),
	);
	
	public function before_save($action)
	{
		$this->set('title', trim($this->title));
		$this->set('body', trim($this->body));
		$this->set('slug', trim($this->slug, '/'));
	}
	
	/**
	 * Get the absolute URL of a page.
	 *
	 * @return string - the relative URL of the page.
	 */
	public function get_absolute_url()
	{
		return $this->slug;
	}

}