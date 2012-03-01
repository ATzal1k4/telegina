<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Model_City extends ORM {
	protected $_table_name = "city_";
	protected $_primary_key = "id_city";
	protected $_table_columns = array(
		'id_city' => NULL,
		'id_region' => NULL,
		'id_country' => NULL,
		'city_name_ru' => NULL,
		'city_name_en' => NULL,
	);
	
	protected $_belongs_to = array(
		'country' => array(
			'model' => 'country',
			'foreign_key' => 'id_country'
		),
		'region' => array(
			'model' => 'region',
			'foreign_key' => 'id_region'
		),
	);
	
	public function labels() {
		return array(
			'city_name_ru' => __('model_city_city_name_ru'),
			'city_name_en' => __('model_city_city_name_en'),
			
		);
	}
}