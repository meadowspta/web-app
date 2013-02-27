<?php defined('SYSPATH') OR die('No direct access allowed.');

class Minion_Task_Meal_Menu_Import_Menu extends Minion_Task {

	protected $_config = array('file');
	
	protected $_fields = array(
		'Date' => array(
			'field' => 'date',
		),
		'Menu' => array(
			'field' => 'menu',
		),
		'Meal' => array(
			'field' => 'meal',
		),
	);
	
	public function execute(array $config)
	{
		$directory = Kohana::$config->load('meal.import_file_directory');
		
		if (empty($config))
		{
			Minion_CLI::write("Please provide a file to be imported.\n\n     Example: ./minion menu:import:menu --file=November.csv");
			return;
		}
		
		// Iterate through the import file.
		$file = $directory.DIRECTORY_SEPARATOR.$config['file'];
		if (file_exists($file) && ($handle = fopen($file, 'r')) !== FALSE)
		{
			Minion_CLI::write("Importing food menu...\n");
			
			$i = 0;
			while (($data = fgetcsv($handle, 0, ',')) !== FALSE)
			{
				if ($i > 0)
				{
					// Create an array index to reference the field columns.
					$field_indexes = array_flip(array_keys($this->_fields));
					
					switch (strtolower($data[$field_indexes['Meal']]))
					{
						case 'lunch':
							$meal = Meal_Menu::MEAL_LUNCH;
							break;
						
						case 'breakfast':
							$meal = Meal_Menu::MEAL_BREAKFAST;
							break;
						
						case 'second chance breakfast':
							$meal = Meal_Menu::MEAL_SECOND_CHANCE_BREAKFAST;
							break;
					}
					Meal_Menu::remove_by_date(strtotime($data[$field_indexes['Date']]), $meal);
					Meal_Menu::add(strtotime($data[$field_indexes['Date']]), $data[$field_indexes['Menu']], $meal);
				}
				
				$i++;
			}
		}
		else
		{
			Minion_CLI::write('File does not exist: '.$file);
		}
	}

}