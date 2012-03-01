<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Date extends Kohana_Date {
	
	public static function publicFormat($date) {
		
		$date = new DateTime($date);
		
		$weekDay = __($date->format("D"));
		$month = __($date->format('M'));
		
		return $weekDay.', '.$date->format("d").' '.$month.' '.$date->format('Y');
		
	}
	
}