<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Voteitem extends ORM {

	protected $_table_name = "vote_items";
	protected $_primary_key = "vote_item_id";
	protected $_table_columns = array(
		'vote_item_id' => NULL,
		'vote_id' => NULL,
		'text' => NULL,
		'count_answer' => NULL,
		'date_create' => NULL,
		'date_modif' => NULL,
		'is_deleted' => NULL,
		'is_hide' => NULL,
		'position' => NULL,
	);
	protected $_belongs_to = array(
		'vote' => array(
			'model' => 'vote',
			'foreign_key' => 'vote_id'
		),
	);

	public function rules() {
		return array(
			'vote_item_id' => array(
				array('digit'),
			),
			'vote_id' => array(
				array('digit'),
				array('not_empty'),
			),
			'text' => array(
				array('not_empty'),
			),
			'position' => array(
				array('not_empty'),
				array('digit'),
				//array(array($this, 'validPosition'), array('position', ':value')),
			),
			'count_answer' => array(
				array('digit'),
			),
			'date_create' => array(
				//array('not_empty'),
				array('date'),
			),
			'date_modif' => array(
				//array('not_empty'),
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
			'text' => array(
				array('trim'),
				array('strip_tags'),
			),
		);
	}

	public function labels() {
		return array(
			'vote_item_id' => __('model_vote_item_vote_item_id'),
			'vote_id' => __('model_vote_item_vote_id'),
			'text' => __('model_vote_item_text'),
			'count_answer' => __('model_vote_item_count_answer'),
			'position' => __('model_vote_item_position'),
			'date_create' => __('model_vote_item_date_create'),
			'date_modif' => __('model_vote_item_date_modif'),
			'is_deleted' => __('model_vote_item_is_deleted'),
			'is_hide' => __('model_vote_item_is_hide'),
		);
	}

	/**
	 * ** TODOIT **
	 * @param int $position
	 * @return boolean 
	 */
	public function validPosition($field, $value) {
		
		$model = ORM::factory($this->object_name())
				->where($field, '=', $value)
				->and_where('vote_id', '=', $this->vote_id)
				->find();
		
		if ($this->loaded()) {
			
			if ($model->loaded()) {
				
				if ($model->pk() == $this->pk()) {
					return TRUE;
				} else {
					return FALSE;
				}
				
			} else {
				return TRUE;
			}
			
		}
		
		return (!$model->loaded());
	}

}