<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_User_Auth extends Controller_Site_Secure {

	public function action_login()
	{
		if ($this->auth->logged_in())
		{
			$this->request->redirect('dashboard');
		}
		
		if ($this->request->post())
		{
			$email = $this->request->post('email');
			$password = $this->request->post('password');
			
			$auth = Auth::instance();
			$auth->login($email, $password);
			
			if ($auth->logged_in())
			{
				$this->request->redirect('dashboard');
			}
			else
			{
				$this->status('Invalid email/password combination.', 'error');
				
				// Set variables for the view.
				$this->email = $email;
			}
		}
	}
	
	public function action_logout()
	{
		$this->auth->logout();
		$this->status('See you next time!');
		$this->request->redirect('/');
	}

}