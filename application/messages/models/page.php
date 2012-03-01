<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
return array(
	'alias' => array(
		'not_empty' => 'Поле "Алиас" обязательно для заполнения',
		'aliasAvailable' => 'Страница с таким алиасом уже существует',
		'min_length' => '',
		'max_length' => '',
	),
	'title' => array(
		'not_empty' => '',
		'min_length' => '',
		'max_length' => '',
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