<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Bench_Comment extends Codebench {
	
	public function __construct() {
		
		$this->loops = 100000;
		
		$this->subjects = array(
			'1',
			'3',
			'8',
			'2'
		);
		
		parent::__construct();
		
	}

	public function bench_test1($var) {
		return (int) $var;
	}

	public function bench_test2($var) {
		return intval($var);
	}

}