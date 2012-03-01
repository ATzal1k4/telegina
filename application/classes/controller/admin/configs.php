<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Admin_Configs extends Controller_Admin {

	public function getEntity() {
		return 'config';
	}

	public function action_list() {

		$configs = ORM::factory($this->getEntity())
				->find_all()
				->as_array();

		$content = View::factory('admin/configs/list')
				->bind('configs', $configs);
		$this->setContent($content);
	}

	public function action_save() {

		$id = abs((int) $this->request->param('id'));
		$config = ORM::factory($this->getEntity(), $id);
		
		$errors = array();

		if (isset($_POST['submit'])) {

			$items = $config->items->find_all();
			foreach ($items as $item) {
				$value = Arr::get($_POST, $item->name);
				if (Valid::not_empty($value)) {

					if ($item->type == 'email' && !Valid::email($value)) {
						$errors[$item->name] = "Поле {$item->title} должно содержать корректный E-Mail адрес";
						break;
					}
					if ($item->type == 'url' && !Valid::url($value)) {
						$errors[$item->name] = "Поле {$item->title} должно быть ссылкой";
						break;
					}
				} else {
					$errors[$item->name] = "Поле {$item->title} не может быть пустым";
					break;
				}
			}

			if (count($errors) == 0) {
				try {

					foreach ($items as $item) {
						$item->set('value', Arr::get($_POST, $item->name))
								->save();
					}
					
					$this->request->redirect('/admin/configs/list');
					
				} catch (ORM_Validation_Exception $exc) {
					$errors = $exc->errors('models');
				}
			}
		}
		
		$content = View::factory('admin/configs/list')
				->bind('errors', $errors)
				->set('configs', ORM::factory($this->getEntity())->find_all()->as_array());
		$this->setContent($content)
				->setTitle("Настройки");
		
	}
	

}