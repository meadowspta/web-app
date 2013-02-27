<?php defined('SYSPATH') OR die('No direct access allowed.');

// Allow resizify to use more memory
ini_set('memory_limit','500M');

class Meadows_Image {

	protected $config;
	protected $file;
	protected $profile;
	protected $base_filename;
	protected $response = array(); 
	
	/**
	 * Setup the image processing.
	 * 
	 * @param string - the image profile to user.
	 * @param string - the base filename for the images to be generated.
	 */
	public function __construct($profile, $base_filename)
	{
		$this->config = Kohana::$config->load('image');
		$this->response['errors'] = array();
		$this->profile = $profile;
		$this->base_filename = (string) $base_filename;
	}

	/**
	 * Handle image uploading
	 *
	 * @param array - the $_FILES file form data.
	 */
	public function upload($file)
	{
		$this->file = $file;
		$this->check_file_limit();
		$this->check_supported_types();
		
		if (empty($this->response['errors']))
		{
			$this->check_directory();
			$this->generate_images();
		}
		
		$this->response['success'] = FALSE;
		if (empty($this->response['errors']))
		{
			$this->response['success'] = TRUE;
			unset($this->response['errors']);
		}
		
		return $this->response;
	}
	
	/**
	 * Create a Kohana image object and return it
	 * 
	 * @return object
	 */
	public function image($image)
	{
		return Image::factory($image, $this->config->driver);
	}

	/**
	 * Check if uploaded file has exceeded file limit
	 *
	 * @return void.
	 */
	private function check_file_limit()
	{
		if ($this->file['size'] > ($this->config->max_size * 1024))
		{
			$this->response['errors'][] = "Max file size: {$this->config->max_size} Kb";
		}
	}

	/**
	 * Check if file type is supported
	 *
	 * @return void.
	 */
	private function check_supported_types()
	{
		if ( ! in_array($this->file['type'], $this->config->allowed_types))
		{
			$this->response['errors'][] = "Unsupported file type: ".$this->file['type'];
		}
	}
	
	/**
	 * Calculates actions to take and dimensions to use
	 * 
	 * @param array $original
	 * @param array $to
	 * @return array
	 */
	public function calculate_actions($original, $to)
	{
		// init actions
		$actions = array();
		// copy original dimensions to current
		$current = $original;
		
		// if aspect ratio is the same then just a simple resize will work
		if ( ! $this->same_aspect_ratio($current, $to))
		{
			// calculate resize first if requested
			if ($to['smart_resize'])
				$actions = $this->calculate_resize ($current, $to);

			// do a crop
			$actions[] = $this->calculate_crop($current, $to);

			// resize 
			$actions[] = $this->calculate_resize($current, $to);
		}
		// a single resize will work since aspect ratio is the same
		else
		{
			$actions[] = $this->just_resize($current, $to);
		}
		
		return $actions;
	}
	
	/**
	 * Calculate resize dimensions, original values passed by reference
	 * 
	 * @param array $current
	 * @param array $to
	 * @return array
	 */
	public function calculate_resize( &$current, $to)
	{
		/**
		 * always choose height for multiplier, because we are doing landscape pics
		 * 
		 * IF ! ASPECT RATIO
		 * get current height then - the modulo of current height from to 
		 * height then divide by current height and round to get the multiplier
		 * 
		 * IF SAME ASPECT RATIO is TRUE
		 */
		$multiplier = ( ! $this->same_aspect_ratio($current, $to))
					? round(($current['height'] - ($current['height'] % $to['height'])) / $current['height'], 5)
					: round(($to['height'] / $current['height']), 5);
		
		// modify original height and width by modifier for next step
		$current['width'] = round($current['width'] * $multiplier);
		$current['height'] = round($current['height'] * $multiplier);
		
		return array(
			'method'	=> 'resize',
			'width'		=> $current['width'],
			'height'	=> $current['height'],
		);
	}
	
	/**
	 * Function to calculate crop dimensions, also modifies $current by 
	 * reference
	 * 
	 * @param array $current
	 * @return array
	 */
	public function calculate_crop( &$current, $to)
	{
		$multiplier = $current['height'] / $to['height'];
		$current['width'] = round($to['width'] * $multiplier);
		
		return array(
			'method'	=> 'crop',
			'width'		=> $current['width'], 
			'height'	=> $current['height'],
		);
	}
	
	/**
	 * Just perform a simple resize and keep the aspect ratio. Since all our
	 * pictures are landscaped, this method only takes height into accout
	 * 
	 * @param array $original
	 * @param array $to
	 * @return array
	 */
	public function just_resize($original, $to)
	{
		// since all our pictures are landscapes no need to take width into account
		$multiplier = round($to['height'] / $original['height'], 5);
		$width = round($original['width'] * $multiplier);
		
		return array(
			'method'	=> 'resize',
			'width'		=> $width,
			'height'	=> $to['height'],
		);
	}
	
	/**
	 * Determines if images have the same aspect ratio
	 * 
	 * @param array $current
	 * @param array $to
	 * @return bool
	 */
	public function same_aspect_ratio($current, $to)
	{
		return (round(($current['height'] / $current['width']), 2) == round(($to['height'] / $to['width']), 2));
	}
	
	/**
	 * Check to see if we are trying to resize to a larger dimension than what
	 * the original is, if it doesn't check out then false is returned, so that
	 * the image can be copied instead of resized
	 * 
	 * @param array $original
	 * @param array $to
	 * @return bool 
	 */
	public function check_dimensions($original, $to)
	{
		// check if to size is bigger than original
		return	(($to['width'] > $original['width']) || ($to['height'] > $original['height']))
				? false
				: true;
	}
	
	/**
	 * Create image directory for the image profile.
	 * 
	 * @return void.
	 */
	private function check_directory()
	{
		$directory_parts = explode(DIRECTORY_SEPARATOR, $this->config['profiles'][$this->profile]['directory']);
		
		$directory = 'static';
		foreach ($directory_parts as $part)
		{
			// If directory does not exist then create it.
			$directory .= DIRECTORY_SEPARATOR.$part;
			if ( ! file_exists($directory))
			{
				mkdir($directory);
			}
		}
	}
	
	/**
	 * Generate the images files.
	 *
	 * @return void.
	 */
	private function generate_images()
	{
		$image = $this->image($this->file['tmp_name']);
		
		foreach ($this->config['profiles'][$this->profile]['sizes'] as $size_id => $size)
		{
			$ext = File::ext_by_mime($this->file['type']) == 'jpe' ? 'jpg' : File::ext_by_mime($this->file['type']);
			$filename = $this->base_filename.'_'.$size_id.'.'.$ext;
			$destination = 'static'.DIRECTORY_SEPARATOR.$this->config['profiles'][$this->profile]['directory'].DIRECTORY_SEPARATOR.$filename;
			
			// Resize if necessary.
			if (isset($size['width']))
			{
				$image->resize($size['width'], $size['height']);
			}
			$image->save($destination, $size['quality']);
			
			$this->response['files'][$size_id] = $destination;
		}
	}

}