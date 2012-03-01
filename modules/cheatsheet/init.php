<?php defined('SYSPATH') or die('No direct script access.');

Route::set('cheatsheet', 'cs')
	->defaults(array(
		'controller' => 'cheatsheet',
		'action'     => 'index',
	));