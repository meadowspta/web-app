<?php defined('SYSPATH') OR die('No direct access allowed.');

class Meadows_Twig_Extensions extends Twig_Extension
{
	public function getName()
	{
		return 'huntingtonbank';
	}
	
	/**
	 * Returns the added filters
	 *
	 * @return array
	 */
	public function getFilters()
	{
		return array(
			// PHP filters
			'ucwords' => new Twig_Filter_Function('ucwords'),
			'ucfirst' => new Twig_Filter_Function('ucfirst'),
			'nl2br' => new Twig_Filter_Function('nl2br'),
			'is_array' => new Twig_Filter_Function('is_array'),
			'round' => new Twig_Filter_Function('num::round'),
			'floor' => new Twig_Filter_Function('floor'),
			'ceil' => new Twig_Filter_Function('ceil'),
			
			// Custom filters
			'shorten' => new Twig_Filter_Function('Meadows_Twig_Extensions::shorten'),
			'html_attributes' => new Twig_Filter_Function('Meadows_Twig_Extensions::html_attributes'),
			'asset_route' => new Twig_Filter_Function('Meadows_Twig_Extensions::asset_route'),
			'set_property' => new Twig_Filter_Function('Meadows_Twig_Extensions::set_property'),
			'access' => new Twig_Filter_Function('Model_User::user_has_access'),
			'bool2text' => new Twig_Filter_Function('Meadows_Twig_Extensions::bool2text'),
		);
	}
	
	/**
	 * Shortens a string and adds a trailer to the string if it's shorter than the specified count.
	 *
	 * @param string - the string to be shortened.
	 * @param int - the number of characters of the shortened text.
	 * @param string - the trailing string when the given string is shortened.
	 * @param boolean - TRUE|FALSE whether the shortener should shorten by words
	 * @return string - the shortened string with a trailer.
	 */
	public static function shorten($str, $count = 12, $trailer = '...', $word_safe = TRUE, $strip_html = TRUE)
	{
		$str = $strip_html ? strip_tags($str) : $str;
		
		if ($word_safe)
		{
			$words = explode(' ', $str);
			$new_str = implode(' ', array_slice($words, 0, $count));
		}
		else
		{
			$new_str =  substr($str, 0, $count);
		}
		
		return $new_str.(strlen($str) > $count ? $trailer : '');
	}
	
	/**
	 * Converts an array to an HTML attributes string.
	 *
	 * @param array - an associative array of HTML attributes.
	 * @param array - an associative array of default HTML attributes.
	 * @return string - a string in HTML tag format of the attributes.
	 */
	public static function html_attributes($attributes, $defaults = array())
	{
		if ($attributes)
		{
			// Merge the default attributes.
			$attributes = array_merge($defaults, $attributes);
			
			$attr = array();
			foreach ($attributes as $key => $value)
			{
				$attr[] = str_replace('_', '-', $key).'="'.$value.'"';
			}
			
			return implode(' ', $attr);
		}
	}
	
	/**
	 * Get the remote location of an asset file.
	 *
	 * @param string - the path of an asset.
	 * @return string - the path of the asset.
	 */
	public static function asset_route($path)
	{
		return Url::base().$path.'?v='.Meadows::$version;
	}
	
	/**
	 * Twig helper function to set values to data arrays.
	 *
	 * @param array - a data array that is to be modified.
	 * @param string - the property key of the data array.
	 * @param mixed - the value to be set to the property.
	 * @return array - the modified data array.
	 */
	public static function set_property($data, $property, $value)
	{
		$data[$property] = $value;
		return $data;
	}
	
	/**
	 * Checks a boolean value and returns text for the result.
	 *
	 * @param mixed - A boolean or binary int value.
	 * @param string - Text for when the boolean is TRUE.
	 * @param string - Text for when the boolean is FALSE.
	 * @return string - The resulting text.
	 */
	public static function bool2text($bool, $true_text = 'Y', $false_text = 'N')
	{
		if ($bool === TRUE || $bool == 1)
		{
			return $true_text;
		}
		return $false_text;
	}

}