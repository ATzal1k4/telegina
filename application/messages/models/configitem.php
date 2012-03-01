<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
return array(
	'item_id' => array(
		'digit' => '',
	),
	'config_id' => array(
		'not_empty' => '',
		'digit' => '',
	),
	'name' => array(
		'not_empty' => '',
		'min_length' => '',
		'max_length' => '',
	),
	'title' => array(
		'not_empty' => '',
		'min_length' => '',
		'max_length' => '',
	),
	'value' => array(
	),
	'type' => array(
		'not_empty' => '',
		'typeAvailable' => '',
	),
);