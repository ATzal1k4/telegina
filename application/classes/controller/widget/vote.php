<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Widget_Vote extends Controller_Widget {

	public $template = 'widget/vote';

	public function before() {
		parent::before();
		//FrontManager::getInstance()->addJQueryFormJS();
	}

	public function action_index() {

		$ip = Request::$client_ip;
		$vote_id = (int) Request::current()->param('param');

		if ($vote_id > 0) {
			$vote = ORM::factory('vote', $vote_id);
		} else {
			$voteCount = ORM::factory('vote')
					->where('is_deleted', '=', 0)
					->and_where('is_hide', '=', 0)
					->count_all();

			$vote = ORM::factory('vote')
					->where('is_deleted', '=', 0)
					->and_where('is_hide', '=', 0)
					->offset(rand(0, $voteCount - 1))
					->limit(1)
					->find();
		}



		if ($vote->loaded()) {

			$this->template->bind('vote', $vote);

			$voter = ORM::factory('voter')
					->where('ip', '=', $ip)
					->and_where('vote_id', '=', $vote->pk())
					->limit(1)
					->find();
			if ($voter->loaded()) {
				$this->template->set('voterExists', true);
			} else {
				$this->template->set('voterExists', FALSE);
			}
		} else {
			echo 'Error: No vote';
			$this->auto_render = FALSE;
		}
	}

}