<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * Базовый класс виджетов
 */

abstract class Controller_Widget extends Controller_Template {

	public function before() {
		parent::before();

		if (Request::current()->is_initial()) {
			$this->auto_render = FALSE;
		}
	}
	
	abstract public function action_index();

}
