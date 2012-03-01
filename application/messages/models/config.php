<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
return array(
	'config_id' => array(
		'digit' => '',
	),
	'module_id' => array(
		'digit' => '',
	),
	'name' => array(
		'not_empty' => '',
		'alpha' => '',
		'min_length' => '',
		'max_length' => '',
		'nameAvailable' => '',
	),
	'title' => array(
		'not_empty' => '',
		'alpha' => '',
		'min_length' => '',
		'max_length' => '',
	),
);