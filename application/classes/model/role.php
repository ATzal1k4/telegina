<?php

defined('SYSPATH') or die('No direct access allowed.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Role extends Model_Auth_Role {

	protected $_table_name = 'roles';
	protected $_primary_key = 'id';
	protected $_table_columns = array(
		'id' => NULL,
		'name' => NULL,
		'description' => NULL,
	);

	public function rules() {
		return array_merge(parent::rules(), array(
			
		));
	}

	public function labels() {
		return array(
			'id' => __('model_role_id'),
			'name' => __('model_role_name'),
			'description' => __('model_role_description'),
		);
	}
	
	public function filters() {
		return array_merge(parent::filters(), array(
			
		));
	}

}