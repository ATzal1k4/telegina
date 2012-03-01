<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Page extends ORM {

	protected $_table_name = "pages";
	protected $_primary_key = "page_id";
	protected $_table_columns = array(
		'page_id' => NULL,
		'alias' => NULL,
		'title' => NULL,
		'text' => NULL,
		'date_create' => NULL,
		'date_modif' => NULL,
		'is_deleted' => NULL,
		'is_hide' => NULL
	);
	
	protected $_has_one = array(
		'object' => array(
			'model' => 'object',
			'foreign_key' => 'source_id'
		),
	);

	public function rules() {
		return array(
			'page_id' => array(
				array('digit'),
			),
			'alias' => array(
				array('not_empty'),
				array(array($this, 'aliasAvailable')),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 1024)),
			),
			'title' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 1024)),
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
			'alias' => array(
				array('trim'),
				array('strip_tags'),
			),
			'text' => array(
				array('trim')
			),
		);
	}

	public function labels() {
		return array(
			'page_id' => __('model_page_page_id'),
			'alias' => __('model_page_alias'),
			'title' => __('model_page_title'),
			'text' => __('model_page_text'),
			'date_create' => __('model_page_date_create'),
			'date_modif' => __('model_page_date_modif'),
			'is_deleted' => __('model_page_is_deleted'),
			'is_hide' => __('model_page_is_hide'),
		);
	}

	public function aliasAvailable($alias) {
		return !ORM::factory("page")
						->where('alias', '=', $alias)
						->and_where('page_id', '<>', $this->pk())
						->loaded();
	}

}