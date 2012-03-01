<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
Route::set('widget', 'widget(/<controller>(/<param>))', array('param' => '.+'))
		->defaults(array(
			'action' => 'index',
			'directory' => 'widget',
		));