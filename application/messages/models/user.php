<?php

defined('SYSPATH') or die('No direct access allowed.');
return array(
	'username' => array(
		'not_empty' => '',
		'max_length' => '',
		'unique' => '',
	),
	'password' => array(
		'not_empty' => '',
	),
	'email' => array(
		'not_empty' => '',
		'email' => '',
		'unique' => '',
	),
);