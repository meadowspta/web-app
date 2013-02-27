<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User extends Meadows_Document {

	protected $name = 'users';
	
	protected function before_save($action)
	{
		$this->set_user_access();
	}
	
	/**
	 * User access rules according to the user's role.
	 *
	 * @return array - An array of permission access rules.
	 * @see config/user.php 'roles' array.
	 */
	public function get_role_access()
	{
		$roles = Kohana::$config->load('user.roles');
		
		$rules = array();
		if (is_array($this->roles))
		{
			foreach ($this->roles as $role)
			{
				$rules = array_merge($rules, $roles[$role]);
			}
		}
		
		return array_unique($rules);
	}
	
	/**
	 * Check if the user is authenticated.
	 *
	 * @return boolean
	 */
	public function is_authenticated()
	{
		return $this->id ? TRUE : FALSE;
	}
	
	/**
	 * Check to see if a user has access to a feature rule.
	 *
	 * @param Model_User - A user object.
	 * @param mixed - A single or array or access rules.
	 * @return boolean
	 */
	public static function user_has_access(Model_User $user, $rules)
	{
		$rules = ! is_array($rules) ? array($rules) : $rules;
		foreach ($rules as $rule)
		{
			if (in_array($rule, $user->get_role_access()))
			{
				return TRUE;
			}
		}
		
		return FALSE;
	}
	
	/**
	 * Save access rules of the user's roles.
	 *
	 * @return void.
	 */
	protected function set_user_access()
	{
		$roles = Kohana::$config->load('user.roles');
		$access = array();
		
		foreach ($this->roles as $role)
		{
			$access = array_merge($access, $roles[$role]);
		}
		$access = array_unique($access);
		$this->set('access', $access);
	}
	
	/**
	 * Check if a user has access to a specified rule.
	 *
	 * @param mixed - A single or array or access rules.
	 * @return boolean - TRUE|FALSE whether the user has access to the given rule.
	 */
	public function has_access($rules)
	{
		return self::user_has_access($this, $rules);
	}

}