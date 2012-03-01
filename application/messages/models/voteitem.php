<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
return array(
	'vote_item_id' => array(
		'digit' => '',
	),
	'count_answer' => array(
		'digit' => '',
	),
	'vote_id' => array(
		'digit' => '',
		'not_empty' => '',
	),
	'position' => array(
		'digit' => '',
		'not_empty' => '',
		'validPosition' => 'Неверная позиция',
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