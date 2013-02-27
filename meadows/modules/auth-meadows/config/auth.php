<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
	'driver' => 'mongo',
	'hash_method' => 'sha256',
	'hash_key' => '4af9de33347772afc6ffef4c85c5ebeb',
	'lifetime' => 1209600,
	'session_key' => 'auth_user',
	'access_token' => array(
		'lifetime' => 2592000, // 30 days
		'deactivation_duration' => 1296000, // 15 days to use the forced-login url
	),
);