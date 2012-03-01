<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
abstract class Controller_Ajax extends Controller {
	
	public function __construct(Request $request, Response $response) {
		parent::__construct($request, $response);
	}
	
	public function before() {
		parent::before();
	}
	
	public function after() {
		parent::after();
	}
	
}