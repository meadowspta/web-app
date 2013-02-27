<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Site_Secure extends Controller_Site_Base {

	public function before()
	{
		parent::before();
		
		$this->auth = Auth::instance();
		
		// Every request starts as anon.
		$this->user = Model_User::factory('user');
		
		// User authentication & page access
		$this->user_authentication();
		$this->page_access();
		
		// Set variables for the view.
		$this->_user = $this->user;
	}
	
	/**
	 * Load current user.
	 */
	private function user_authentication()
	{
		if ($this->auth->logged_in())
		{
			// Standard authentication.
			$user_id = $this->auth->get_user();
			$this->user = new Model_User($user_id);
			$this->user->load();
		}
	}
	
	/**
	 * Checks if the user has access to a page.
	 * The page access rule is defined in a static function in the controller::page_access().
	 */
	private function page_access()
	{
		// Check page access
		$directory = $this->request->directory();
		$controller = $this->request->controller();
		$action = $this->request->action();
		
		if ( ! empty($directory))
		{
			$controller = $this->request->directory().DIRECTORY_SEPARATOR.$controller;
		}
		
		$access = array();
		$class = 'Controller_'.implode('_', array_map('ucfirst', explode(DIRECTORY_SEPARATOR, $controller)));
		if (isset($class::$page_access))
		{
			$access = $class::$page_access;
		}
		
		if (isset($access[$action]) && count(array_intersect($this->user->get_role_access(), $access[$action])) == 0)
		{
			$this->status('You do not have access to this page.', 'error');
			$this->request->redirect('login');
		}
	}

}