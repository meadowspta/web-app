<?php defined('SYSPATH') OR die('No direct access allowed.');

class Announcement {

	const ANNOUNCEMENT_BODY_VAR = 'announcement_body';
	
	/**
	 * Save a highlight announcement.
	 *
	 * @param string - the content body of an announcement.
	 * @return void.
	 */
	public static function save($content)
	{
		Meadows::$var->setit(self::ANNOUNCEMENT_BODY_VAR, $content);
	}
	
	/**
	 * Get the highlight announcement.
	 *
	 * @return string - the content body of an announcement.
	 */
	public static function get()
	{
		return Meadows::$var->getit(self::ANNOUNCEMENT_BODY_VAR);
	}

}