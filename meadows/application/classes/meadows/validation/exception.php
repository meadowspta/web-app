<?php defined('SYSPATH') or die('No direct script access.');

class Meadows_Validation_Exception extends Kohana_Exception {
	
	/**
	 * @var  object  Validation instance
	 */
	public $array;

	/**
	 * @param  Validation  Validation object
	 * @param  string    error message
	 * @param  array     translation variables
	 * @param  int       the exception code
	 */
	public function __construct(Validation $array, $message = 'Failed to validate array', array $values = NULL, $code = 0, $error_messages = NULL)
	{
		$this->array = $array;
		
		//HB::set_status_message($message, HB::STATUS_ERROR);
		
		parent::__construct($message, $values, $code);
	}
	
}
