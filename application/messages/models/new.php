<?php

defined('SYSPATH') or die('No direct script access.');
return array(
	'new_id' => array(
		'digit' => '',
	),
	'title' => array(
		'not_empty' => '',
		'min_length' => '',
		'max_length' => '',
	),
	'author' => array(
		'not_empty' => '',
		'min_length' => '',
		'max_length' => '',
	),
	'announce' => array(
		'min_length' => '',
	),
	'text' => array(
		'not_empty' => '',
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