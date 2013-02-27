<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Meal_Menu_Block extends Controller_Site_Base {

	public function action_upcoming()
	{
		$menus = Meal_Menu::get_upcoming(2);
		
		// Set variables for the view.
		$this->menus = $menus;
	}

}