<?php defined('SYSPATH') OR die('No direct access allowed.');

class User extends Model_User {

	/**
	 * Get users with a specified access priveledge.
	 */
	public static function get_user_with_access($access)
	{
		// 'create a post',
		$user = self::init();
		$users = $user->find_all(NULL)->find(array('status' => 1, 'access' => array('$in' => array($access))));
		
		return $users;
	}

}