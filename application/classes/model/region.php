<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_Region extends ORM {
	protected $_table_name = "region_";
	protected $_primary_key = "id_region";
	protected $_table_columns = array(
		'id_region' => NULL,
		'id_country' => NULL,
		'region_name_ru' => NULL,
		'region_name_en' => NULL,
	);
	
	protected $_belongs_to = array(
		'country' => array(
			'model' => 'country',
			'foreign_key' => 'id_country'
		),		
	);
	
	protected $_has_many = array(
		'cities' => array(
			'model' => 'city',
			'foreign_key' => 'id_region'
		),
	);


	public function labels() {
		return array(
			'region_name_ru' => __('model_region_region_name_ru'),
			'region_name_en' => __('model_region_region_name_en'),
			
		);
	}
}