<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Admin_Photos extends Controller_Admin {

	public function getEntity() {
		return 'photo';
	}

	public function before() {
		parent::before();
		$this->setupTitle('Альбомы', '/admin/albums');
	}

	public function action_list() {

		$id = abs((int) $this->request->param("id"));
		$album = ORM::factory('album', $id);

		$photos = ORM::factory($this->getEntity())
				->where('is_deleted', '=', 0)
				->and_where('album_id', '=', $id)
				->find_all()
				->as_array();

		$content = View::factory('admin/' . $this->getEntity() . 's/list')
				->bind('album', $album)
				->set('photos', $photos);
		$this->setContent($content);
		$this->setupTitle('Фотографии альбома "'.$album->title.'"');
	}

	public function action_add() {
		$id = abs((int) $this->request->param("id"));
		$album = ORM::factory('album', $id);
		$errors = array();

		if (isset($_POST['submit'])) {
			$data = Arr::extract($_POST, array('title', 'description'));

			try {

				$photo = ORM::factory($this->getEntity());
				$photo->values($data);
				$photo->is_hide = isset($_POST['is_hide']);
				$photo->set("date_create", date(DEFAULT_DATE_FORMAT))
						->set("date_modif", date(DEFAULT_DATE_FORMAT))
						->set('album_id', $album->album_id);

				if (isset($_FILES['file']['name'])) {
					$photo->set('src', Entity::uploadImage($_FILES['file']['tmp_name']));
				}

				$photo->save();

				$this->request->redirect('/admin/' . $this->getEntity() . 's/list/' . $album->album_id);
			} catch (ORM_Validation_Exception $exc) {
				$errors = $exc->errors('models');
			}
		}


		$content = View::factory('admin/' . $this->getEntity() . 's/add')
				->bind('errors', $errors)
				->bind('album', $album)
				->bind('data', $data);
		$this->setContent($content);
	}

	public function action_edit() {

		$id = abs((int) $this->request->param("id"));
		$photo = ORM::factory($this->getEntity(), $id);
		$errors = array();

		if (isset($_POST['submit'])) {
			$data = Arr::extract($_POST, array('title', 'description'));

			try {

				$photo->values($data);
				$photo->is_hide = isset($_POST['is_hide']);
				$photo->set("date_modif", date(DEFAULT_DATE_FORMAT))
						->set('album_id', $photo->album_id);

				if (isset($_FILES['file']['name']) && ($_FILES['file']['size'] > 0)) {
					$photo->set('src', Entity::uploadImage($_FILES['file']['tmp_name']));
				}

				$photo->save();

				$this->request->redirect('/admin/' . $this->getEntity() . 's/list/' . $photo->album_id);
			} catch (ORM_Validation_Exception $exc) {
				$errors = $exc->errors('models');
			}
		}


		$content = View::factory('admin/' . $this->getEntity() . 's/edit')
				->bind('errors', $errors)
				->bind('photo', $photo);
		$this->setContent($content);
	}

	public function action_mainphoto() {
		$id = abs((int) $this->request->param("id"));
		$photo = ORM::factory($this->getEntity(), $id);
		$album = ORM::factory('album', $photo->album_id)
				->set("main_photo", $photo->photo_id);
		try {
			$album->save();
			$this->request->redirect("/admin/{$this->getEntity()}s/list/{$album->album_id}");
		} catch (ORM_Validation_Exception $exc) {
			throw new Exception("Не удалось выполнить операцию");
		}
	}

}