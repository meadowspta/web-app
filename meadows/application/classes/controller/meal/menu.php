<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Meal_Menu extends Controller_Site_Secure {

	public function action_index()
	{
		$menus = Meal_Menu::get_upcoming(999);
		
		// Set variables for the view.
		$this->menus = $menus;
	}

}