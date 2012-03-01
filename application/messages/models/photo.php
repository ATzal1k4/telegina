<?php

defined('SYSPATH') or die('No direct script access.');
return array(
	'photo_id' => array(
		'digit' => '',
	),
	'album_id' => array(
		'not_empty' => '',
		'digit' => '',
	),
	'title' => array(
		'not_empty' => '',
		'min_length' => '',
		'max_length' => '',
	),
	'src' => array(
		'not_empty' => '',
		'max_length' => '',
	),
	'description' => array(
		
	),
	'date_create' => array(
		'not_empty' => '',
		'date' => '',
	),
	'date_modif' => array(
		'not_empty' => '',
		'date' => '',
	),
	'is_deleted' => array(
		'not_empty' => '',
		'logical' => '',
	),
	'is_hide' => array(
		'logical' => '',
		'not_empty' => '',
	),
);