<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Module_Auth extends Module {

	public function before() {
		parent::before();
	}

	public function action_register() {


		if (isset($_POST['submit'])) {
			$user = new Model_User();
			$user->create_user($this->request->post(), array(
				'username',
				'password',
				'email',
			));

			Auth::instance()->force_login($user);
			$this->request->redirect();
		}

		$content = View::factory('module/auth/register');
		$this->setContent($content);
	}

	public function action_login() {

		$user = Auth::instance()->auto_login();

		if ($user instanceof Model_User and $user->loaded()) {
			$this->request->redirect($this->request->referrer());
		}

		if (isset($_POST['submit'])) {

			$data = array(
				'username' => Arr::get($_POST, 'username'),
				'password' => Arr::get($_POST, 'password'),
				'remember' => isset($_POST['remember'])
			);

			if (Auth::instance()->login($data['username'], $data['password'], $data['remember'])) {
				$this->request->redirect();
			}
		}

		$content = View::factory('module/auth/login');
		$this->setContent($content);
		Module::$fullPage = TRUE;
	}

	public function action_logout() {
		if (Auth::instance()->logout()) {
			$this->request->redirect();
		}
	}

}