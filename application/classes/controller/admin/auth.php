<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Auth extends Controller {
	
	private $auth = NULL;


	public function before() {
		parent::before();
		$this->auth = Auth::instance();
	}

	public function action_login() {
		if ($this->auth->logged_in('admin')) {
			$this->request->redirect('/admin/');
		}

		if (isset($_POST['submit'])) {
			$data = Arr::extract($_POST, array('login', 'password', 'remember'));
			$status = Auth::instance()->login($data['login'], $data['password'], (bool) $data['remember']);

			if ($status) {
				$_SESSION['KCFINDER'] = array();
				$_SESSION['KCFINDER']['disabled'] = false;
				$this->request->redirect('/admin/');
			} else {
				$errors = array(Kohana::message('auth/user', 'no_user'));
			}
		}

		$content = View::factory('admin/auth/index')
				->bind('data', $data)
				->bind('errors', $errors);
		$this->response->body($content);
	}

	public function action_logout() {
		if (Auth::instance()->logout()) {
			$_SESSION['KCFINDER']['disabled'] = TRUE;
			$this->request->redirect('/admin/login/');
		}
	}

	private function newUser($name, $pass, $email) {
		$users = ORM::factory('user');
		$users->create_user(array(
			'username' => $name,
			'password' => $pass,
			'email' => $email,
			'password_confirm' => $pass
				), array(
			'username',
			'password',
			'email'
		));

		$role = ORM::factory('role')
				->where('name', '=', 'login')
				->find();
		$users->add('roles', $role);
		$role = ORM::factory('role')
				->where('name', '=', 'admin')
				->find();
		$users->add('roles', $role);
	}

}