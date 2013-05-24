<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Announcement extends Controller_Site_Secure {

	public function before()
	{
		$this->_jquery_ui_init = TRUE;
		$this->_wysiwyg_init = TRUE;

		parent::before();
	}

	public function action_index()
	{

	}

	public function action_edit()
	{
		if ($this->request->post())
		{
			Announcement::save($this->request->post('body'));
			$this->status('The announcement has been updated.');
		}

		// Set variables for the view.
		$this->announcement = Announcement::get();
	}

}