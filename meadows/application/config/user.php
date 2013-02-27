<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Configuration of user authentication, security, roles and permission rules.
 *
 * The roles are defined as an array of permission rules where the key of the rules
 * is the role name/ID.  The permission rules are to follow the pattern of (all lowercase):
 *
 *    <verb> <subject>
 *
 * example: 'edit all profiles'
 *
 * For content CRUD, the verbs are 'create', 'view', 'edit', 'delete'.
 */
return array(
	'roles' => array(
		'admin' => array(
			'view dashboard',
			'view admin navbar',
			'create a post',
			'edit own post',
			'edit all posts',
			'create a page',
			'edit own page',
			'edit all pages',
			'edit announcement',
		),
		'content_admin' => array(
			'view dashboard',
		),
		'authenticated' => array(
			
		),
		'anonymous' => array(
			
		),
	),
);