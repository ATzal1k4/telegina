<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Vote extends ORM {

	protected $_table_name = "votes";
	protected $_primary_key = "vote_id";
	protected $_table_columns = array(
		'vote_id' => NULL,
		'question' => NULL,
		'date_create' => NULL,
		'date_modif' => NULL,
		'is_deleted' => NULL,
		'is_hide' => NULL,
	);
	protected $_has_many = array(
		'items' => array(
			'model' => 'voteitem',
			'foreign_key' => 'vote_id'
		),
	);

	public function rules() {
		return array(
			'vote_id' => array(
				array('digit'),
			),
			'question' => array(
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
			'question' => array(
				array('trim'),
				array('strip_tags'),
			),
		);
	}

	public function labels() {
		return array(
			'vote_id' => __('model_vote_vote_id'),
			'question' => __('model_vote_question'),
			'date_create' => __('model_vote_date_create'),
			'date_modif' => __('model_vote_date_modif'),
			'is_deleted' => __('model_vote_is_deleted'),
			'is_hide' => __('model_vote_is_hide'),
		);
	}

}