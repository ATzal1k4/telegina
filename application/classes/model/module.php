<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Module extends ORM {

	protected $_table_name = 'modules';
	protected $_primary_key = 'module_id';
	protected $_table_columns = array(
		'module_id' => NULL,
		'name' => NULL,
		'title' => NULL,
		'type' => NULL,
		'is_hide' => NULL
	);
	
	protected $_has_many = array(
		'configs' => array(
			'model' => 'config',
			'foreign_key' => 'module_id'
		),
	);
	protected $_has_one = array();
	protected $_belongs_to = array();


	public static $moduleTypes = array(
		'module',
		'widget',
		'plugin',
	);

	public function rules() {

		return array(
			'module_id' => array(
				array('digit'),
			),
			'name' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 255)),
			),
			'title' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 255)),
			),
			'type' => array(
				array('not_empty'),
				array(array($this, 'typeAvailable')),
			),
			'is_hide' => array(
				array('logical'),
			),
		);
	}

	public function filters() {
		return array(
			'module_id' => array(
				
			),
			'name' => array(
				array('trim'),
				array('strip_tags'),
			),
			'title' => array(
				array('trim'),
				array('strip_tags'),
			),
			'type' => array(
				array('trim'),
				array('strip_tags'),
			),
			'is_hide' => array(
			),
		);
	}

	public function labels() {
		return array(
			'module_id' => __('model_module_module_id'),
			'name' => __('model_module_name'),
			'title' => __('model_module_title'),
			'type' => __('model_module_type'),
			'is_hide' => __('model_module_is_hide'),
		);
	}

	public function typeAvailable($type) {
		return in_array($type, Model_Module::$moduleTypes);
	}

}