<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Voter extends ORM {

	protected $_table_name = 'voters';
	protected $_primary_key = 'voter_id';
	protected $_table_columns = array(
		'voter_id' => NULL,
		'vote_id' => NULL,
		'ip' => NULL,
		'vote_item_id' => NULL,
	);
	protected $_belongs_to = array(
		'vote' => array(
			'model' => 'vote',
			'foreign_key' => 'vote_id'
		),
		'vote_item' => array(
			'model' => 'voteitem',
			'foreign_key' => 'vote_item_id'
		),
	);

	public function rules() {
		return array(
			'vote_item_id' => array(
				array('digit'),
				array('not_empty'),
			),
			'vote_id' => array(
				array('digit'),
				array('not_empty'),
			),
			'voter_id' => array(
				array('digit'),
			),
			'ip' => array(
				array('not_empty'),
				array('max_length', array(':value', 23)),
				array(array($this, 'uniqueIP'), array('ip', ':value')),
			),
		);
	}

	public function filters() {
		return array(
		);
	}

	public function labels() {
		return array(
			'vote_item_id' => __('model_voter_vote_item_id'),
			'vote_id' => __('model_voter_vote_id'),
			'voter_id' => __('model_voter_voter_id'),
			'ip' => __('model_voter_ip'),
		);
	}

	/**
	 * TODOIT
	 * @param type $ip
	 * @return boolean 
	 */
	public function uniqueIP($field, $value) {
		$model = ORM::factory($this->object_name())
				->where($field, '=', $value)
				->and_where('vote_item_id', '=', $this->vote_item_id)
				->and_where('vote_id', '=', $this->vote_id)
				->find();

		if ($this->loaded()) {
			return (!($model->loaded() AND $model->pk() != $this->pk()));
		}

		return (!$model->loaded());
	}

}