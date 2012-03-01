<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Configitem extends ORM {

	protected $_table_name = "config_items";
	protected $_primary_key = "item_id";
	protected $_table_columns = array(
		'item_id' => NULL,
		'config_id' => NULL,
		'name' => NULL,
		'title' => NULL,
		'value' => NULL,
		'type' => NULL,
	);
	protected $_belongs_to = array(
		'config' => array(
			'model' => 'config',
			'foreign_key' => 'config_id'
		),
	);
	public static $itemTypes = array(
		'checkbox',
		'color',
		'date',
		'datetime',
		'email',
		'text',
		'url',
		'tel',
		'radio',
		'textarea'
	);

	public function rules() {
		return array(
			'item_id' => array(
				array('digit'),
			),
			'config_id' => array(
				array('not_empty'),
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
			'value' => array(
			),
			'type' => array(
				array('not_empty'),
				array(array($this, 'typeAvailable')),
			),
		);
	}

	public function filters() {
		return array(
			'item_id' => array(
			),
			'config_id' => array(
			),
			'name' => array(
				array('strip_tags'),
				array('trim'),
			),
			'title' => array(
				array('strip_tags'),
				array('trim'),
			),
			'value' => array(
			),
			'type' => array(
				array('strip_tags'),
				array('trim'),
			),
		);
	}

	public function labels() {
		return array(
			'item_id' => 'model_configitem_item_id',
			'config_id' => __('model_configitem_config_id'),
			'name' => __('model_configitem_name'),
			'title' => __('model_configitem_title'),
			'value' => __('model_configitem_value'),
			'type' => __('model_configitem_type'),
		);
	}

	public function typeAvailable($type) {
		return in_array($type, Model_Configitem::$itemTypes);
	}

}