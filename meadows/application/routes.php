<?php defined('SYSPATH') OR die('No direct access allowed.');

// User authentication
Route::set('user/auth/login', 'login')
	->defaults(array(
		'directory' => 'user',
		'controller' => 'auth',
		'action' => 'login',
	));

Route::set('user/auth/logout', 'logout')
	->defaults(array(
		'directory' => 'user',
		'controller' => 'auth',
		'action' => 'logout',
	));

// Posts
Route::set('post/block', 'post/block(/<action>)')
	->defaults(array(
		'directory' => 'post',
		'controller' => 'block',
		'action' => 'upcoming_events',
	));

Route::set('post/index', 'news')
	->defaults(array(
		'controller' => 'post',
		'action' => 'index',
	));

Route::set('post/view', 'news(/<slug>)')
	->defaults(array(
		'controller' => 'post',
		'action' => 'view',
	));

// Meal Menu
Route::set('meal/menu/block', 'meal/menu/block(/<action>)')
->defaults(array(
	'directory' => 'meal/menu',
	'controller' => 'block',
	'action' => 'upcoming',
));

Route::set('meal/menu', 'meals/menu')
->defaults(array(
	'directory' => 'meal',
	'controller' => 'menu',
	'action' => 'index',
));

// Pages
foreach (Page::get_pages() as $page)
{
	if ( ! empty($page->slug))
	{
		Route::set('page/'.$page->id, $page->slug)
			->defaults(array(
				'controller' => 'router',
				'action' => 'index',
			));
	}
}

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'home',
		'action' => 'index',
	));