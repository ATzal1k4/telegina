<?php

defined('SYSPATH') or die('No direct access allowed.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
return array(
	'id' => array(
		'digit' => '',
	),
	'user_id' => array(
		'digit' => '',
		'not_empty' => '',
	),
	'user_agent' => array(
		'not_empty' => '',
		'max_length' => '',
	),
	'token' => array(
		'not_empty' => '',
		'max_length' => '',
	),
	'type' => array(
		'not_empty' => '',
		'max_length' => '',
	),
	'created' => array(
		'digit' => '',
		'not_empty' => '',
	),
	'expires' => array(
		'digit' => '',
		'not_empty' => '',
	),
);