<?php defined('SYSPATH') OR die('No direct access allowed.');

class Minion_Task_User_Dbinit extends Minion_Task {

	protected $users = array(
		array(
			'first_name' => 'Caleb',
			'last_name' => 'Whang',
			'email' => 'caleb.strumms@gmail.com',
			'password' => 'm2000',
			'created' => 'October 1, 2012',
			'last_login' => 'October 1, 2012',
			'status' => 1,
			'roles' => array('admin'),
		),
		array(
			'first_name' => 'Susan',
			'last_name' => 'Condio-Hernandez',
			'email' => 'scondio-hernandez@mesd.k12.ca.us',
			'password' => 'm2000',
			'created' => 'October 1, 2012',
			'last_login' => 'October 1, 2012',
			'status' => 1,
			'roles' => array('admin'),
		),
	);
	
	public function execute(array $config)
	{
		$auth = Auth::instance();
		
		Minion_CLI::write("Running initial database import...\n\n");
		
		Minion_CLI::write("Deleting users...");
		$u = new Model_User;
		$users = $u->find_all();
		foreach ($users as $user)
		{
			$user->delete();
		}
		
		Minion_CLI::write("Importing users...");
		foreach ($this->users as $data)
		{
			// Formate data.
			$data['email'] = strtolower($data['email']);
			$data['created'] = strtotime($data['created']);
			$data['last_login'] = strtotime($data['last_login']);
			$data['password'] = $auth->hash_password($data['password']);
			
			$user = new Model_User;
			$user->load_values($data)->save();
			Minion_CLI::write("Importing: ".$data['first_name'].' '.$data['last_name']);
		}
	}

}