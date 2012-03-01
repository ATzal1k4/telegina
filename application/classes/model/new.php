<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_New extends ORM {

	protected $_table_name = "news";
	protected $_primary_key = "new_id";
	protected $_table_columns = array(
		'new_id' => NULL,
		'title' => NULL,
		'author' => NULL,
		'announce' => NULL,
		'text' => NULL,
		'date_create' => NULL,
		'date_modif' => NULL,
		'is_deleted' => NULL,
		'is_hide' => NULL
	);
	
	protected $_has_many = array(
		'object' => array(
			'model' => 'object',
			'foreign_key' => 'source_id'
		),
	);

	public function rules() {
		return array(
			'new_id' => array(
				array('digit'),
			),
			'title' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 1024)),
			),
			'author' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 255)),
			),
			'announce' => array(
				array('not_empty'),
			),
			'text' => array(
				array('not_empty'),
			),
			'date_create' => array(
				array('not_empty'),
				array('date'),
			),
			'date_modif' => array(
				array('not_empty'),
				array('date'),
			),
			'is_hide' => array(
				array('logical'),
			),
			'is_deleted' => array(
				array('logical'),
			),
		);
	}

	public function filters() {
		return array(
			'title' => array(
				array('trim'),
				array('strip_tags'),
			),
			'author' => array(
				array('trim'),
				array('strip_tags'),
			),
			'announce' => array(
				array('trim')
			),
			'text' => array(
				array('trim')
			),
		);
	}

	public function labels() {
		return array(
			'new_id' => __('model_new_new_id'),
			'title' => __('model_new_title'),
			'author' => __('model_new_author'),
			'announce' => __('model_new_announce'),
			'text' => __('model_new_text'),
			'date_create' => __('model_new_date_create'),
			'date_modif' => __('model_new_date_modif'),
			'is_deleted' => __('model_new_is_deleted'),
			'is_hide' => __('model_new_is_hide'),
		);
	}

}