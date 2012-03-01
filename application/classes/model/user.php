<?php

defined('SYSPATH') or die('No direct access allowed.');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_User extends Model_Auth_User {

	protected $_table_name = 'users';
	protected $_primary_key = 'id';
	protected $_table_columns = array(
		'id' => NULL,
		'email' => NULL,
		'username' => NULL,
		'password' => NULL,
		'logins' => NULL,
		'last_login' => NULL,
	);
	protected $_has_many = array(
		'user_tokens' => array(
			'model' => 'user_token'
		),
		'roles' => array(
			'model' => 'role', 
			'through' => 'roles_users'
		),
		'ulogins' => array(
			
		),
	);

	public function rules() {
		return array_merge(parent::rules(), array(
				));
	}

	public function filters() {
		return array_merge(parent::filters(), array(
					'email' => array(
						array('trim'),
						array('strip_tags'),
					),
					'username' => array(
						array('trim'),
						array('strip_tags'),
					),
				));
	}

	public function labels() {
		return array(
			'id' => __('model_user_id'),
			'email' => __('model_user_email'),
			'username' => __('model_user_username'),
			'password' => __('model_user_password'),
			'logins' => __('model_user_logins'),
			'last_login' => __('model_user_last_login'),
		);
	}

}