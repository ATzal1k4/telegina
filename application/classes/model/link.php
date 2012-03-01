<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_Link extends ORM{
	protected $_table_name = "links";
	protected $_primary_key = "link_id";
	protected $_table_columns = array(
		'link_id' => NULL,
		'title' => NULL,
		'url' => NULL,
		'date_create' => NULL,
		'date_modif' => NULL,
		'is_deleted' => NULL,
		'is_hide' => NULL
	);
	
	public function rules() {
		return array(
			'link_id' => array(
				array('digit')
			),
			'title' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 255)),
			),
			'url' => array(
				array('not_empty'),
				array('url'),
				array('max_length', array(':value', 1024)),
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
			'link_id' => array(
			),
			'title' => array(
				array('strip_tags'),
				array('trim'),
			),
			'url' => array(
				array('strip_tags'),
				array('trim'),
			),
			'date_create' => array(
			),
			'date_modif' => array(
			),
			'is_deleted' => array(
			),
			'is_hide' => array(
			),
		);
	}
	
	public function labels() {
		return array(
			'link_id' => __('model_link_link_id'),
			'title' => __('model_link_title'),
			'url' => __('model_link_url'),
			'date_create' => __('model_link_date_create'),
			'date_modif' => __('model_link_date_modif'),
			'is_deleted' => __('model_link_is_deleted'),
			'is_hide' => __('model_link_is_hide'),
			
		);
	}
	
}