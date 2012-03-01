<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Object extends ORM {

	protected $_table_name = 'objects';
	protected $_primary_key = 'id';
	protected $_table_columns = array(
		'id',
		'object_name',
		'source_id',
		'is_deleted',
		'is_hide',
		'date_create',
		'date_modif',
		'date_end',
		'page_id',
		'title',
		'position',
	);

	public function delete() {
		try {
			$this->set('is_deleted', 1)->save();
		} catch (Kohana_Exception $exc) {
			ErrorManager::getInstance()->addException($exc);
		}
	}
	
	public function recover() {
		try {
			$this->set('is_deleted', 0)->save();
		} catch (Kohana_Exception $exc) {
			ErrorManager::getInstance()->addException($exc);
		}
	}
	
	public function hide() {
		try {
			$this->set('is_hide', 1)->save();
		} catch (Kohana_Exception $exc) {
			ErrorManager::getInstance()->addException($exc);
		}
	}

	public function show() {
		try {
			$this->set('is_hide', 0)->save();
		} catch (Kohana_Exception $exc) {
			ErrorManager::getInstance()->addException($exc);
		}
	}
	
	
	
}