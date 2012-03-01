<?php

defined('SYSPATH') or die('No direct script access.');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Album extends ORM {

	protected $_table_name = "albums";
	protected $_primary_key = "album_id";
	protected $_table_columns = array(
		'album_id' => NULL,
		'title' => NULL,
		'description' => NULL,
		'main_photo' => NULL,
		'date_create' => NULL,
		'date_modif' => NULL,
		'is_deleted' => NULL,
		'is_hide' => NULL
	);
	protected $_has_many = array(
		'photos' => array(
			'model' => 'photo',
			'foreign_key' => 'album_id'
		),
	);
	protected $_belongs_to = array(
		'cover' => array(
			'model' => 'photo',
			'foreign_key' => 'main_photo'
		),
	);

	public function rules() {
		return array(
			'album_id' => array(
				array('digit'),
			),
			'title' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 1024)),
			),
			'description' => array(
				array('min_length', array(':value', 12)),
			),
			'main_photo' => array(
				array('digit'),
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
			'album_id' => array(
			),
			'title' => array(
				array('trim'),
				array('strip_tags'),
			),
			'description' => array(
				array('trim'),
				array('strip_tags'),
			),
			'main_photo' => array(
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
			'album_id' => __('model_album_album_id'),
			'title' => __('model_album_title'),
			'description' => __('model_album_description'),
			'main_photo' => __('model_album_main_photo'),
			'date_create' => __('model_album_date_create'),
			'date_modif' => __('model_album_date_modif'),
			'is_deleted' => __('model_album_is_deleted'),
			'is_hide' => __('model_album_is_hide'),
		);
	}

}