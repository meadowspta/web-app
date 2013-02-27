<?php defined('SYSPATH') OR die('No direct access allowed.');

class Meadows {

	const STATUS_ERROR = 'error';
	const STATUS_INFO = 'info';
	const STATUS_SUCCESS = 'success';
	
	public static $version;
	public static $var;
	public static $map_url = 'http://goo.gl/maps/ia2pq';
	
	public static function init()
	{
		self::$var = new Meadows_Var;
	}
	
	/**
	 * A request wrapper for HMVC requests.
	 *
	 * @param string - the url being requested.
	 * @param string - the type of request.
	 * @return Request - a request instance with the loaded post variable.
	 */
	public static function request_instance($url, $type = 'hmvc')
	{
		return Request::factory($url)->post($type, TRUE);
	}
	
	/**
	 * Set status/error/confirmation messages to be displayed.
	 *
	 * @param mixed - An array of messages or a single message string.
	 * @param string - They type of message to be displayed.
	 * @return void.
	 */
	public static function set_status_message($messages, $type = 'confirmation')
	{
		$session = Session::instance();
		$status = $session->get('status_messages');
		
		$messages = is_array($messages) ? array_unique($messages) : array($messages);
		foreach ($messages as $message)
		{
			$status[$type][] = $message;
		}
		$session->set('status_messages', $status);
	}
	
	/**
	 * Get all status messages that have been set.
	 *
	 * @return array - Key/value pair of message types and their messages.
	 */
	public static function get_status_message()
	{
		$session = Session::instance();
		$messages = $session->get('status_messages');
		$session->delete('status_messages');
		
		return ! empty($messages) ? $messages : array();
	}
	
	/**
	 * Get the Google Analytics ID for the current server.
	 *
	 * @return string - the Google Analytics ID.
	 */
	public static function get_google_analytics_id()
	{
		$config = Kohana::$config->load('meadows.google_analytics_id');
		return $config[Kohana::$environment];
	}

}

Meadows::init();