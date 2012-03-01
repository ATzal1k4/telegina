<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Widget_Ulogin extends Controller_Widget {

	public $template = 'widget/ulogin';

	public function action_index() {

		$user = Auth::instance()->get_user();

		if (!$user) {
			$ulogin = Ulogin::factory();
			if (!$ulogin->mode()) {
				$this->template->set('content', $ulogin->render());
			} else {
				try {
					$ulogin->login();
				} catch (ORM_Validation_Exception $e) {
					ErrorManager::getInstance()->setErrors($e->errors());
				}
			}
		} else {
			if ($user instanceof Model_User) {
				$ulogins = $user->ulogins->count_all();
				echo $ulogins;
			}
		}
	}

}