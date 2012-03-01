<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Widget_Calendar extends Controller_Widget {

	public $template = 'widget/calendar';

	public function action_index() {
		Calendar::$start_monday = TRUE;
		$calendar = Calendar::factory(Arr::get($_GET, 'month', date('m')), Arr::get($_GET, 'year', date('Y')));
		
		$event = $calendar->event('Victory')
				->condition('timestamp', time())
				->add_class('holyday')
				//->output("День победы (TEST)")
				;
		
		$calendar->attach($event);

		$this->template->set('calendar', $calendar->render());
	}

}