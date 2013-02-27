<?php defined('SYSPATH') or die('No direct script access.');
/*
 * See http://www.php.net/manual/en/mongo.construct.php for configuration options.
 */
return array(
	Kohana::DEVELOPMENT => array(
		'database'  => 'meadows',
		'server'	=> 'mongodb://localhost:27017',
		'options'   => array(),
		'profiling' => TRUE,
	),
	Kohana::STAGING => array(
		'database'  => 'meadows',
		'server'	=> 'mongodb://localhost:27017',
		'options'   => array(),
		'profiling' => TRUE,
	),
	'default' => array(
		'database'  => 'meadows',
		'server'	=> 'mongodb://localhost:27017',
		'options'   => array(),
		'profiling' => TRUE,
	),
);
