<?php

defined('SYSPATH') or die('No direct access allowed.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_User_Token extends Model_Auth_User_Token {

	protected $_table_name = 'user_tokens';
	protected $_primary_key = 'id';
	protected $_table_columns = array(
		'id' => NULL,
		'user_id' => NULL,
		'user_agent' => NULL,
		'token' => NULL,
		'type' => NULL,
		'created' => NULL,
		'expires' => NULL,
	);

	public function rules() {
		return array(
			'id' => array(
				array('digit'),
			),
			'user_id' => array(
				array('digit'),
				array('not_empty'),
			),
			'user_agent' => array(
				array('not_empty'),
				array('max_length', array(':value', 40)),
			),
			'token' => array(
				array('not_empty'),
				array('max_length', array(':value', 40)),
			),
			'type' => array(
				array('not_empty'),
				array('max_length', array(':value', 100)),
			),
			'created' => array(
				array('digit'),
				array('not_empty'),
			),
			'expires' => array(
				array('digit'),
				array('not_empty'),
			),
		);
	}

	public function filters() {
		return array(
			'id' => array(),
			'user_id' => array(),
			'user_agent' => array(),
			'token' => array(),
			'type' => array(),
			'created' => array(),
			'expires' => array(),
		);
	}

	public function labels() {
		return array(
			'id' => __('model_user_token_id'),
			'user_id' => __('model_user_token_user_id'),
			'user_agent' => __('model_user_token_user_agent'),
			'token' => __('model_user_token_token'),
			'type' => __('model_user_token_type'),
			'created' => __('model_user_token_created'),
			'expires' => __('model_user_token_expires'),
		);
	}

}