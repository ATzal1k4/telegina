<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Menu extends ORM {

	protected $_table_name = "menus";
	protected $_primary_key = "menu_id";
	protected $_table_columns = array(
		'menu_id' => NULL,
		'title' => NULL,
		'is_main' => NULL,
		'date_create' => NULL,
		'date_modif' => NULL,
		'is_deleted' => NULL,
		'is_hide' => NULL
	);
	protected $_has_many = array(
		'items' => array(
			'model' => 'menuitem',
			'foreign_key' => 'menu_id'
		),
	);

	public function rules() {
		return array(
			'menu_id' => array(
				array('digit')
			),
			'title' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 255)),
			),
			'is_main' => array(
				array('logical'),
			),
			'date_create' => array(
				array('not_empty'),
				array('date'),
			),
			'date_modif' => array(
				array('not_empty'),
				array('date'),
			),
			'is_deleted' => array(
				array('logical'),
			),
			'is_hide' => array(
				array('logical'),
			),
		);
	}

	public function filters() {
		return array(
			'menu_id' => array(),
			'title' => array(
				array('strip_tags'),
				array('trim'),
			),
			'is_main' => array(),
			'date_create' => array(),
			'date_modif' => array(),
			'is_deleted' => array(),
			'is_hide' => array(),
		);
	}

	public function labels() {
		return array(
			'menu_id' => __('model_menu_menu_id'),
			'title' => __('model_menu_title'),
			'is_main' => __('model_menu_is_main'),
			'date_create' => __('model_menu_date_create'),
			'date_modif' => __('model_menu_date_modif'),
			'is_deleted' => __('model_menu_is_deleted'),
			'is_hide' => __('model_menu_is_hide'),
		);
	}

}