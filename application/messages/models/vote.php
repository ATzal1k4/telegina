<?php

defined('SYSPATH') or die('No direct script access.');
return array(
	'question' => array(
		'not_empty' => "Поле :field обязательно для заполнения"
	),
	'vote_id' => array(
		'digit' => '',
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