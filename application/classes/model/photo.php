<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Photo extends ORM {

	protected $_table_name = "photos";
	protected $_primary_key = "photo_id";
	protected $_table_columns = array(
		'photo_id' => NULL,
		'album_id' => NULL,
		'title' => NULL,
		'description' => NULL,
		'src' => NULL,
		'date_create' => NULL,
		'date_modif' => NULL,
		'is_deleted' => NULL,
		'is_hide' => NULL
	);
	protected $_belongs_to = array(
		'album' => array(
			'model' => 'album',
			'foreign_key' => 'album_id'
		),
	);

	public function rules() {
		return array(
			'photo_id' => array(
				array('digit'),
			),
			'album_id' => array(
				array('digit'),
				array('not_empty'),
			),
			'title' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 255)),
			),
			'src' => array(
				array('not_empty'),
				array('max_length', array(':value', 255)),
			),
			'description' => array(
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
			'src' => array(
				array('trim'),
				array('strip_tags'),
			),
		);
	}

	public function labels() {
		return array(
			'photo_id' => __('model_photo_photo_id'),
			'album_id' => __('model_photo_album_id'),
			'title' => __('model_photo_title'),
			'src' => __('model_photo_src'),
			'description' => __('model_photo_description'),
			'date_create' => __('model_photo_date_create'),
			'date_modif' => __('model_photo_date_modif'),
			'is_deleted' => __('model_photo_is_deleted'),
			'is_hide' => __('model_photo_is_hide'),
		);
	}

}