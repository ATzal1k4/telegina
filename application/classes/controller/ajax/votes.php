<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Ajax_Votes extends Controller_Ajax {

	public function action_add() {
		if ($this->request->is_ajax()) {
			$errors = array();
			$id = abs((int) $_POST['item']);
			$item = ORM::factory('voteitem', $id);

			if ($item->loaded()) {
				$voter = ORM::factory('voter')
						->where('vote_item_id', '=', $item->pk())
						->and_where('ip', '=', Request::$client_ip)
						->limit(1)
						->find();

				if (!$voter->loaded()) {

					$voter = ORM::factory('voter')
							->set('ip', Request::$client_ip)
							->set('vote_id', $item->vote_id)
							->set('vote_item_id', $item->pk());
					$item->count_answer++;

					try {

						$item->save();
						$voter->save();
						echo Widget::load('vote', array('param' => $item->vote_id));
					} catch (ORM_Validation_Exception $exc) {
						$errors = $exc->errors();
						Zend_Debug::dump($errors);
					}
				} else {
					$errors = 'error';
					die($errors);
				}
			} else {
				$errors = 'error';
				die($errors);
			}
		}
	}

}