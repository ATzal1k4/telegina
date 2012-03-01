<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Comment extends ORM {

	protected $_table_name = 'comments';
	protected $_primary_key = 'comment_id';
	protected $_table_columns = array(
		'comment_id' => NULL,
		'parent_id' => NULL,
		'text' => NULL,
		'email' => NULL,
		'nick' => NULL,
		'site' => NULL,
		'date_create' => NULL,
		'date_modif' => NULL,
		'is_deleted' => NULL,
		'is_hide' => NULL
	);
	protected $_has_many = array(
		'children' => array(
			'model' => 'comment',
			'foreign_key' => 'parent_id'
		),
	);

	public function rules() {
		return array(
			'comment_id' => array(
				array('digit'),
			),
			'parent_id' => array(
				array('digit'),
			),
			'text' => array(
				array('not_empty'),
				array('min_length', array(':value', 12)),
			),
			'email' => array(
				array('not_empty'),
				array('email'),
				array('max_length', array(':value', 255)),
			),
			'nick' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 255)),
			),
			'site' => array(
				array('url'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 255)),
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
				array('logical')
			),
			'is_deleted' => array(
				array('logical')
			),
		);
	}

	public function filters() {
		return array(
			'comment_id' => array(),
			'parent_id' => array(),
			'text' => array(
				array('trim'),
			),
			'email' => array(
				array('trim')
			),
			'nick' => array(
				array('trim')
			),
			'site' => array(
				array('trim')
			),
			'date_create' => array(
				array('trim')
			),
			'date_modif' => array(
				array('trim')
			),
			'is_hide' => array(),
			'is_deleted' => array(),
		);
	}

	public function labels() {
		return array(
			'comment_id' => __('model_comment_comment_id'),
			'parent_id' => __('model_comment_parent_id'),
			'text' => __('model_comment_text'),
			'email' => __('model_comment_email'),
			'nick' => __('model_comment_nick'),
			'site' => __('model_comment_site'),
			'date_create' => __('model_comment_date_create'),
			'date_modif' => __('model_comment_date_modif'),
			'is_hide' => __('model_comment_is_hide'),
			'is_deleted' => __('model_comment_is_deleted'),
		);
	}

}