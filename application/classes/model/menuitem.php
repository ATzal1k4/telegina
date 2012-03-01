<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Menuitem extends ORM {

	protected $_table_name = "menu_items";
	protected $_primary_key = "menu_item_id";
	protected $_table_columns = array(
		'menu_item_id' => NULL,
		'text' => NULL,
		'menu_id' => NULL,
		'parent_id' => NULL,
		'url' => NULL,
		'position' => NULL,
		'date_create' => NULL,
		'date_modif' => NULL,
		'is_deleted' => NULL,
		'is_hide' => NULL,
	);
	protected $_belongs_to = array(
		'menu' => array(
			'model' => 'menu',
			'foreign_key' => 'menu_id'
		),
	);
	
	protected $_has_many = array(
		'children' => array(
			'model' => 'menuitem',
			'foreign_key' => 'parent_id'
		),
	);

	public function rules() {
		return array(
			'menu_item_id' => array(
				array('digit')
			),
			'text' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 255)),
			),
			'menu_id' => array(
				array('not_empty'),
				array(array($this, 'issetMenu')),
				array('digit')
			),
			'parent_id' => array(
				array(array($this, 'issetParent')),
				array('digit'),
			),
			'url' => array(
				array('not_empty'),
				array('max_length', array(':value', 1024)),
			),
			'position' => array(
				array('not_empty'),
				array(array($this, 'validPosition')),
				array('digit')
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
			'menu_item_id' => array(
			),
			'text' => array(
				array('strip_tags'),
				array('trim'),
			),
			'menu_id' => array(
			),
			'parent_id' => array(
			),
			'url' => array(
				array('strip_tags'),
				array('trim'),
			),
			'position' => array(
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
			'menu_item_id' => __('model_menu_item_menu_item_id'),
			'text' => __('model_menu_item_text'),
			'menu_id' => __('model_menu_item_menu_id'),
			'parent_id' => __('model_menu_item_parent_id'),
			'url' => __('model_menu_item_url'),
			'position' => __('model_menu_item_position'),
			'date_create' => __('model_menu_item_date_create'),
			'date_modif' => __('model_menu_item_date_modif'),
			'is_deleted' => __('model_menu_item_is_deleted'),
			'is_hide' => __('model_menu_item_is_hide'),
		);
	}

	public function issetMenu($menu_id) {
		return ORM::factory('menu', $menu_id)->loaded();
	}

	public function issetParent($parent_id) {
		return ORM::factory('menuitem', $parent_id)->loaded();
	}

	/**
	 * Валидация позиции ** TODOIT **
	 * @param type $position
	 * @return boolean 
	 */
	public function validPosition($position) {
		
		if (true) {
			return TRUE;
		}
		return !ORM::factory('menuitem')
						->where('position', '=', $position)
						->and_where('menu_id', '=', $this->menu_id)
						->find()
						->loaded();
	}

}