<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
return array(
	'album_id' => array(
		'digit' => '',
	),
	'title' => array(
		'not_empty' => '',
		'min_length' => '',
		'max_length' => '',
	),
	'description' => array(
		'min_length' => '',
	),
	'main_photo' => array(
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