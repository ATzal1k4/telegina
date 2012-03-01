<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
return array(
	'comment_id' => array(
		'digit' => '',
	),
	'parent_id' => array(
		'digit' => '',
	),
	'text' => array(
		'not_empty' => '',
		'min_length' => '',
	),
	'email' => array(
		'not_empty' => '',
		'email' => '',
		'max_length' => '',
	),
	'nick' => array(
		'not_empty' => '',
		'min_length' => '',
		'max_length' => '',
	),
	'site' => array(
		'url' => '',
		'min_length' => '',
		'max_length' => '',
	),
	'date_create' => array(
		'not_empty' => '',
		'date' => '',
	),
	'date_modif' => array(
		'not_empty' => '',
		'date' => '',
	),
	'is_hide' => array(
		'not_empty' => '',
		'logical' => '',
	),
	'is_deleted' => array(
		'not_empty' => '',
		'logical' => '',
	),
);