<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Default list of image uploading options
 */
return array(
	'max_size' => 100000,
	'allowed_types' => array(
		'image/jpeg',
		'image/png',
	),
	'default_type' => 'jpg',
	'quality' => 90,
	'crop' => TRUE,
	'local_cache_dir' => 'static/cache/_images',
	's3_dir' => 'static',
	'driver' => 'GD',
	'smart_resize' => TRUE,
	'profiles' => array(
		'posts' => array(
			'directory' => 'images/posts',
			'sizes' => array(
				'original' => array(
					'quality' => 100,
				),
				'main' => array(
					'quality' => 85,
					'width' => 620,
					'height' => 465,
				),
				'medium' => array(
					'quality' => 85,
					'width' => 250,
					'height' => 188,
				),
				'small' => array(
					'quality' => 85,
					'width' => 150,
					'height' => 113,
				),
				'thumb' => array(
					'quality' => 85,
					'width' => 60,
					'height' => 45,
				),
			),
		),
	),
);