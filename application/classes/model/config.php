<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Config extends ORM {

	protected $_table_name = "configs";
	protected $_primary_key = "config_id";
	protected $_table_columns = array(
		'config_id' => NULL,
		'module_id' => NULL,
		'name' => NULL,
		'title' => NULL,
	);
	protected $_has_many = array(
		'items' => array(
			'model' => 'configitem',
			'foreign_key' => 'config_id'
		),
	);
	protected $_belongs_to = array(
		'module' => array(
			'model' => 'module',
			'foreign_key' => 'module_id'
		),
	);

	public function rules() {
		return array(
			'config_id' => array(
				array('digit'),
			),
			'module_id' => array(
				array('digit'),
			),
			'name' => array(
				array('not_empty'),
				array('alpha'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 255)),
				array(array($this, 'nameAvailable')),
			),
			'title' => array(
				array('not_empty'),
				array('alpha'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 255)),
			),
		);
	}

	public function filters() {
		return array(
			'config_id' => array(
			),
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
		);
	}

	public function labels() {
		return array(
			'config_id' => __('model_config_config_id'),
			'module_id' => __('model_config_module_id'),
			'name' => __('model_config_name'),
			'title' => __('model_config_title'),
		);
	}

	public function nameAvailable($name) {
		return !ORM::factory('config')
						->where('name', '=', $name)
						->and_where('config_id', '<>', $this->pk())
						->find()
						->loaded();
	}

}