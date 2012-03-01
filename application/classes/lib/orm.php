<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Lib_ORM extends ORM {

	protected $_base_table = 'object';
	protected $_base_primary_key = 'object_id';
	protected $_base_primary_key_value = NULL;
	protected $_base_foreign_key = 'source_id';
	protected $_base_foreign_key_value = NULL;
	protected $_base_foreign_table_name = 'table_name';
	protected $_base_foreign_table_name_value = NULL;
	protected $_is_hide = NULL;
	protected $_is_deleted = NULL;
	protected $_date_create = NULL;
	protected $_date_modif = NULL;
	protected $_base_columns = array(
		'object_id' => NULL,
		'table_name' => NULL,
		'source_id' => NULL,
		'is_deleted' => NULL,
		'is_hide' => NULL,
		'date_create' => NULL,
		'date_modif' => NULL,
		'date_end_show' => NULL,
	);

	public function __construct($id = NULL) {
		$this->_initialize();

		if ($id !== NULL) {
			if (is_array($id)) {
				foreach ($id as $column => $value) {
					// Passing an array of column => values
					$this->where($column, '=', $value);
				}

				$this->find();
			} else {
				// Passing the primary key
				$this->where($this->_object_name . '.' . $this->_primary_key, '=', $id)->find();
			}
		} elseif (!empty($this->_cast_data)) {
			// Load preloaded data from a database call cast
			$this->_load_values($this->_cast_data);

			$this->_cast_data = array();
		}
	}

	public function delete() {
		if (!$this->_loaded)
			throw new Kohana_Exception('Cannot delete :model model because it is not loaded.', array(':model' => $this->_object_name));

		// Use primary key value
		$id = $this->pk();

		// Delete the object
		DB::update($this->_base_table)
				->set(array('is_deleted' => 1))
				->where($this->_base_primary_key, '=', $id)
				->execute($this->_db);
		
		$this->_is_deleted = TRUE;

		return $this->clear();
	}
	
	public function undelete() {
		if (!$this->_loaded)
			throw new Kohana_Exception('Cannot delete :model model because it is not loaded.', array(':model' => $this->_object_name));

		// Use primary key value
		$id = $this->pk();

		// Delete the object
		DB::update($this->_table_name)
				->set(array('is_deleted' => 0))
				->where($this->_primary_key, '=', $id)
				->execute($this->_db);
		
		$this->_is_deleted = FALSE;

		return $this->clear();
	}
	
	public function hide() {
		if (!$this->_loaded)
			throw new Kohana_Exception('Cannot delete :model model because it is not loaded.', array(':model' => $this->_object_name));

		// Use primary key value
		$id = $this->pk();

		// Delete the object
		DB::update($this->_base_table)
				->set(array('is_deleted' => 1))
				->where($this->_base_primary_key, '=', $id)
				->execute($this->_db);
		
		$this->_is_deleted = TRUE;

		return $this->clear();
	}

}