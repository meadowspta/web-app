<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Site_Base extends Controller {

	// Enable twig media autoloading.
	protected $_twig_media = TRUE;
	
	// Custom js per controller.
	public $_js = array();
	
	// Custom css per controller.
	public $_css = array();
	
	// Base javascript.
	public $_base_js = array(
		'jquery-1.8.1.min.js',
		'underscore-min.js',
		'meadows.js',
	);
	
	// Base css files
	public $_base_css = array(
		'bootstrap.css',
		'meadows.css',
	);
	
	public function before()
	{
		parent::before();
		
		$this->directory_routing();
		
		// Load JS/CSS.
		$this->twig_media('js');
		$this->twig_media('css');
		
		// Load jquery-ui.
		if ($this->_jquery_ui_init)
		{
			$this->_base_js[] = 'jquery-ui-1.9.1.custom.min.js';
			$this->_base_css[] = 'jquery-ui/jquery-ui-1.9.1.custom.min.css';
		}
		
		// Load WYSIWYG.
		if ($this->_wysiwyg_init)
		{
			$wysiwyg_js = array(
				'akzhan/jquery.wysiwyg.js',
				'akzhan/src/dialogs/default.js',
				'akzhan/controls/wysiwyg.image.js',
				'akzhan/controls/wysiwyg.link.js',
				'akzhan/controls/wysiwyg.colorpicker.js',
			);
			$this->_base_js = array_merge($this->_base_js, $wysiwyg_js);
			
			$wysiwyg_css = array(
				'akzhan/jquery.wysiwyg.css',
				'akzhan/dialogs/default.css',
			);
			$this->_base_css = array_merge($this->_base_css, $wysiwyg_css);
		}
		
		// Get status messages.
		$status_messages = $this->get_status_messages();
		$display_status_messages = empty($status_messages) ? json_encode(FALSE) : json_encode(TRUE);
		
		// Set variables for the view.
		$this->_base = URL::base();
		$this->_status_messages = $status_messages;
		$this->_display_status_messages = $display_status_messages;
		$this->_styles = array_unique(array_merge($this->_base_css, $this->_css));
		$this->_scripts = array_unique(array_merge($this->_base_js, $this->_js));
		$this->_page_title = 'Meadows Elementary School :: Millbrae';
		$this->_map_url = Meadows::$map_url;
		$this->_google_analytics_id = Meadows::get_google_analytics_id();
	}
	
	public function after()
	{
		parent::after();
		
		// Has form been posted
		if ($_POST)
		{
			$this->_values = $_POST;
		}
	}
	
	/**
	 * Check if routing by directory...if true then set template path accordingly.
	 *
	 * @return void.
	 */
	private function directory_routing()
	{
		if ($this->request->directory())
		{
			$path = array(
				$this->request->directory(),
				$this->request->controller(),
				$this->request->action(),
			);
			
			$this->_template_path = implode(DIRECTORY_SEPARATOR, $path);
		}
	}
	
	/**
	 * Sets status messages to be displayed on a page.
	 *
	 * @param $message mixed - The message to be displayed.
	 * @param $type string - The type of message to be displayed ('error' or 'confirmation').
	 */
	protected function status($messages, $type = 'confirmation')
	{
		Meadows::set_status_message($messages, $type);
	}
	
	protected function get_status_messages()
	{
		// Render status message on non-HMVC requests.
		if ( ! $this->request->post('hmvc'))
		{
			return Meadows::get_status_message();
		}
	}
	
	/**
	 * Helper method to load custom media with passed extension
	 * 
	 * @param string $type
	 */
	private function twig_media($type)
	{		
		// Generate the JS path.
		$paths = array();
		
		// hold files
		$files = array();
		$paths[] = $type;
		$var = '_twig_'.$type;
		
		$directory = $this->request->directory();
		if ( ! empty($directory))
		{
			$paths[] = $this->request->directory();
		}
		
		$paths[] = str_replace('_', '/', $this->request->controller());
		$paths[] = $this->request->action();
		
		// If twig media array exists prepend with media folder.
		if (is_array($this->$var))
		{
			foreach ($this->$var as $file)
			{
				$files[] = $type.'/' . $file;
			}
		}
		
		// Check if autoloading is enabled.
		if ($this->_twig_media)
		{
			// Find custom file if it exists, find relative views path and return it.
			if ($file = Kohana::find_file('views', implode('/', $paths), $type))
			{
				$file = str_replace('views/', '', strstr($file, 'views/'.$type));
				
				// push custom file onto end of array if it exists
				array_push($files, $file);
			}
			
			// Load controller level css.
			// Custom files can be located in: /views/css/<controllerPath>/style.css and /views/js/<controllerPath>/script.js
			$global_file = $type == 'js' ? 'script' : 'style';
			$controller_path = $paths;
			array_pop($controller_path);
			if ($file = Kohana::find_file('views', implode('/', $controller_path).'/'.$global_file, $type))
			{
				$file = str_replace('views/', '', strstr($file, 'views/'.$type));
				array_push($files, $file);
			}
		}
		
		// set files to twig_$media, have to do it this way so we avoid the "overload" the twig variable error
		$this->$var = $files;
	}

}