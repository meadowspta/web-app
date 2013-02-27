<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Store/retrieve dynamic system variables in the database.
 * A typical use of the system variable is to quickly store/access small bits of
 * static data, such as a time-stamp of the last time a cron has run.
 */
class Meadows_Var extends Mongo_Document {

	protected $name = 'vars';
	
	/**
	 * Get the variable value.
	 *
	 * @param $name string - The name/key of the system variable.
	 * @param $default mixed - The default value if the variable is not found.
	 * @return mixed - The value of the system variable (or default if the variable doesn't exist).
	 */
	public function getit($name, $default = NULL)
	{
		$this->load('{ name: "'.$name.'"}');
		if (isset($this->_object['name']))
		{
			return $this->_object['value'];
		}
		else
		{
			return $default;
		}
	}
	
	/**
	 * Set the system variable value by name. If the variable already exists, then
	 * the record is updated with the new value.
	 *
	 * @param $name string - The name/key of the system variable.
	 * @param $value mixed - The value of the system variable.
	 */
	public function setit($name, $value)
	{
		$this->load('{ name: "'.$name.'"}');
		$this->set('name', $name)
			->set('value', $value)
			->save();
	}

}