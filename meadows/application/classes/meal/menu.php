<?php defined('SYSPATH') OR die('No direct access allowed.');

class Meal_Menu extends Model_Meal_Menu {

	const MEAL_BREAKFAST = 'meal_breakfast';
	const MEAL_SECOND_CHANCE_BREAKFAST = 'second_chance_breakfast';
	const MEAL_LUNCH = 'meal_lunch';
	
	/**
	 * Add a menu for a day.
	 *
	 * @param int - a unix timestamp of the day.
	 * @param string - food menu items.
	 * @param string - the menu meal.
	 * @return void.
	 */
	public static function add($timestamp, $food_menu, $meal = self::MEAL_LUNCH)
	{
		$menu = self::init();
		$menu->set('date', $timestamp)
			->set('menu', $food_menu)
			->set('meal', $meal)
			->save();
	}
	
	/**
	 * Remove a menu for a day by the date.
	 *
	 * @param string - the menu meal.
	 * @return void.
	 */
	public static function remove_by_date($timestamp, $meal = self::MEAL_LUNCH)
	{
		$menu = self::get_with_date($timestamp, $meal);
		if ($menu->loaded())
		{
			$menu->delete();
		}
	}
	
	/**
	 * Get menu by date.
	 *
	 * @param int - a unix timestamp of the day.
	 * @param string - the menu meal.
	 * @return Model_Meal_Menu - a menu object.
	 */
	public static function get_with_date($timestamp, $meal = self::MEAL_LUNCH)
	{
		$start_date = date('n/j/y', $timestamp).' 12:00am';
		$end_date = date('n/j/y', $timestamp).' 11:59pm';
		
		$query = array(
			'$and' => array(
				array('date' => array('$gte' => strtotime($start_date))),
				array('date' => array('$lte' => strtotime($end_date))),
				array('meal' => $meal),
			),
		);
		
		$menu = self::init();
		$menu->load($query);
		
		return $menu;
	}
	
	/**
	 * Get upcoming meal menus.
	 *
	 * @param int - the number of records to be returned.
	 * @return Mongo_Collection - a collection of Model_Meal_Menu objects.
	 */
	public static function get_upcoming($count = 5)
	{
		$query = array('date' => array('$gte' => mktime(0, 0, 0, date('n', time()), date('j', time()), date('Y', time()))));
		
		$menu = self::init();
		$menus = $menu->find_all(1, $count)->find($query)->sort_asc('date');
		
		return $menus;
	}

}