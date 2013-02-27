<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Huntington Bank extension to the Mongo Document class.
 */
class Meadows_Document extends Mongo_Document {
	
	/**
	 * Validation object created before saving/updating
	 * @var Validation
	 */
	protected $_validation = NULL;
	
	// Field filters
	protected $_filters = array();
	
	protected $_collection;
	
	/**
	 * Get an instance of the parent model class.
	 *
	 * @retun mixed - the parent model class instance.
	 */
	public static function init($id = NULL)
	{
		$class = get_called_class();
		return new $class($id);
	}
	
	protected function before_save($action)
	{
		switch ($action)
		{
			case self::SAVE_INSERT:
				// Run model data validation.
				//$this->check();
				
				// Set default values.
				if ( ! isset($this->_changed['created']))
				{
					$this->set('created', time());
				}
				
				if ( ! isset($this->_changed['updated']))
				{
					$this->set('updated', 0);
				}
				
				if ( ! isset($this->_changed['status']))
				{
					$this->set('status', 1);
				}
				break;
			
			case self::SAVE_UPDATE:
				// Run model data validation.
				// $this->check();
				
				// Add updated timestamp.
				if ( ! isset($this->_changed['updated']))
				{
					$this->set('updated', 0);
				}
				break;
		}
		
		// Format data before saving if the method exists.
		if (method_exists($this, 'format_data'))
		{
			$this->format_data();
		}
	}
	
	protected function before_delete()
	{
		// Delete referenced records.
		$this->delete_referenced_documents();
	}
	
	/**
	 * Get the edit URL for the document.
	 *
	 * @return string - the relative edit URL.
	 */
	public function get_edit_url()
	{
		return Inflector::singular($this->name).'/edit/'.$this->id;
	}
	
	/**
	 * Runs validation on the model.
	 *
	 * @param Validation - The validation object.
	 * @return void
	 */
	public function check()
	{
		// Create validation object.
		$this->validation();
		
		// Run validation.
		if (is_object($this->_validation))
		{
			if ($this->_validation->check())
			{
				// Rewrite the fields with validation applied.
				foreach ($this->_validation->as_array() as $field => $value)
				{
					$this->set($field, $value);
				}
			}
			else
			{
				$errors = implode('<br />', $this->_validation->errors(str_replace('.', '/', $this->name)));
				throw new Meadows_Validation_Exception($this->_validation, $errors);
			}
		}
	}
	
	/**
	 * Initializes validation rules, and labels
	 *
	 * @return void
	 */
	protected function validation()
	{
		if ( ! empty($this->_rules))
		{
			// Build the validation object with its rules
			$this->_validation = Validation::factory($this->_object)
				->bind(':model', $this)
				->bind(':original_values', $this->_original_values)
				->bind(':changed', $this->_changed);
			
			foreach ($this->_rules as $field => $rules)
			{
				if (isset($this->_changed[$field]) && $this->_changed[$field] === TRUE)
				{
					$this->_validation->rules($field, $rules);
				}
			}
		}
	}
	
	/**
	 * Overload __call().
	 * This is a Twig workaround which calls for a function name first, then a object property.
	 *
	 * @return mixed.
	 */
	public function __call($name, $args)
	{
		$parts = explode('_', $name, 2);
		if ($name != 'find_all' && ($name == 'unset' || $parts[0] == 'find'))
		{
			return parent::__call($name, $args);
		}
		else if (method_exists($this, $name))
		{
			return $this->$method();
		}
		else
		{
			return $this->$name;
		}
		
	}
	
	/**
	 * Checks whether a column value is unique.
	 * Excludes itself if loaded.
	 *
	 * @param string - the field to check for uniqueness.
	 * @param mixed - the value to check for uniqueness.
	 * @return bool - whether the value is unique.
	 */
	public function unique($field, $value)
	{
		$class = get_class($this);
		$model = new $class;
		$model->load(array($field => $value));
		
		if ($this->id)
		{
			return ( ! ($model->id AND $model->id != $this->id));
		}

		return ( ! $model->id);
	}
	
	/**
	 * Finds multiple database rows and returns an iterator of the rows found.
	 * The parameters passed can be used for record pagination.  Passing NULL for
	 * either parameter will return all records.
	 *
	 * @param int - the offset/page set of data to be retrieved.
	 * @param int - the number of records per offset/page to be retrieved.
	 * @return Mongo_Collection
	 */
	public function find_all($offset = 1, $limit = 15)
	{
		if ($this->_loaded)
		{
			throw new Kohana_Exception('Method find_all() cannot be called on loaded objects');
		}
		
		$this->_collection = $this->collection(TRUE);
		
		if ($offset && $limit)
		{
			$this->_collection->skip($limit * ($offset - 1))->limit($limit);
		}
		
		return $this->_collection;
	}
	
	/**
	 * Format the incoming data called by before_save(). This method is to
	 * be overridden.
	 *
	 * @return void.
	 */
	protected function format_data() {}
	
	/**
	 * Deletes referenced documents that are defined in $_searches.
	 *
	 * @return void.
	 */
	protected function delete_referenced_documents()
	{
		// Iterate through the defined remote references and delete the associated documents.
		foreach ($this->_searches as $key => $search)
		{
			$class = 'Model_'.implode('_', array_map('ucfirst', explode('_', $search['model'])));
			$instance = new $class;
			
			// Query for all records in the referenced table.
			$docs = $instance->find_all(NULL)->find(array($search['field'] => $this->id));
			
			// Delete the referenced records.
			foreach ($docs as $doc)
			{
				$doc->delete();
			}
		}
	}
	
}