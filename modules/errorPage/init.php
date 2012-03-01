<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
Route::set('error', 'error/<action>(/<message>)', array('action' => '[0-9]++', 'message' => '.+'))
		->defaults(array(
			'controller' => 'error'
		));

