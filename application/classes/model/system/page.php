<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_System_Page extends ORM_MPTT {
	
	protected $_table_name = 'system_pages';
	
	protected $_table_columns = array(
		'page_id' => NULL,
		'level' => NULL,
		'lft' => NULL,
		'rgt' => NULL,
		'parent_id' => NULL,
		'scope' => NULL,
		'position' => NULL,
		'is_deleted' => NULL,
		'is_hide' => NULL,
		'show_in_menu' => NULL,
		'date_create' => NULL,
		'date_modif' => NULL,
		'search' => NULL,
		'module_id' => NULL,
		'alias' => NULL,
		'title' => NULL,
	);
	
	protected $_belongs_to = array(
		'module' => array(
			'model' => 'module',
			'foreign_key' => 'module_id',
		),
	);
	
	public function rules() {
		return array(
			'alias' => array(
				array('not_empty')
			),
		);
	}
	
}