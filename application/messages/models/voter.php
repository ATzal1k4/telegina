<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
return array(
	'vote_item_id' => array(
		'digit' => '',
		'not_empty' => '',
	),
	'voter_id' => array(
		'digit' => '',
	),
	'vote_id' => array(
		'digit' => '',
		'not_empty' => '',
	),
	'ip' => array(
		'max_length' => '',
		'not_empty' => '',
		'uniqueIP' => '',
	),
);