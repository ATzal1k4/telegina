<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Country extends ORM {

	protected $_table_name = "country_";
	protected $_primary_key = "id_country";
	protected $_table_columns = array(
		'id_country' => NULL,
		'country_name_ru' => NULL,
		'country_name_en' => NULL,
	);
	
	protected $_has_many = array(
		'cities' => array(
			'model' => 'city',
			'foreign_key' => 'id_country'
		),
		'regions' => array(
			'model' => 'region',
			'foreign_key' => 'id_country'
		),
	);

	public function labels() {
		return array(
			'country_name_ru' => __('model_country_country_name_ru'),
			'country_name_en' => __('model_country_country_name_en'),
		);
	}

}