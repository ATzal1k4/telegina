<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Valid extends Kohana_Valid{
	
	public static function logical($value){
		return (((int) $value == 1) || ((int) $value == 0));
	}
	
	
	
}