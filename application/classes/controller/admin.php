<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Admin extends Controller_Base {

	public static $goBackTagURL = 'go_back_url';
	public $template = 'admin';
	public $limitPerPage = 5;
	private $routeNameForList = 'admin_list';
	private $controllerNameForList = NULL;
	private $editedEntity = NULL;
	private $titleBreadStack = array();

	public function before() {
		parent::before();

		if (!$this->getAuthManager()->logged_in('admin')) {
			$this->request->redirect('/admin/login');
		}

		//$this->getTitleBread();
		$title = "Панель администратора";

		$this->setupTitle($title, '/admin');

		$this->getFrontManager()->add99Line(FALSE);
		$this->getFrontManager()->addJQueryJS();
		$this->getPluginManager()
				//->registerPlugin(new Plugin_WonderSerfing($this))
				->render();
	}

	public function after() {
		$this->getTitleBread();
		parent::after();
	}

	public function action_index() {
		
	}

	public function action_add() {

		try {
			if (isset($_POST['submit'])) {
				$data = Arr::extract($_POST, $this->getEntityPublicFields());

				$entity = ORM::factory($this->getEntity());
				$entity->values($data);
				$entity = $this->onAddInPost($entity);

				try {
					$entity->save();
					$this->goBackUsingSession();
				} catch (ORM_Validation_Exception $exc) {
					$this->getErrorManager()->setErrors($exc->errors(Entity::$errorMsgsDir));
				} catch (Exception $e) {
					$this->getErrorManager()->addException($e);
				}
			}

			if ($this->noErrors())
				$this->getSessionManager()->set(Controller_Admin::$goBackTagURL, $this->request->referrer());

			$this->onAddInShow();

			$content = View::factory("admin/{$this->getEntity()}s/add")
					->set("errors", $this->getErrorManager()->getErrors())
					->bind('data', $data)
					->set('entityName', $this->getEntity());

			$content = $this->onAddWithContent($content);

			$this->setContent($content);
		} catch (Exception $exc) {
			$this->getErrorManager()->addException($exc);
		}
	}

	public function action_edit() {

		$id = abs((int) $this->request->param('id'));
		$entity = ORM::factory($this->getEntity(), $id);

		if ($entity->loaded()) {

			$this->setEditedEntity($entity);

			if (isset($_POST['submit'])) {

				$data = Arr::extract($_POST, $this->getEntityPublicFields());
				$entity->values($data);
				$entity = $this->onEditInPost($entity);

				try {
					$entity->save();
					$this->goBackUsingSession();
				} catch (ORM_Validation_Exception $exc) {
					$this->setErrors($exc->errors(Entity::$errorMsgsDir));
				} catch (Exception $e) {
					$this->getErrorManager()->addException($e);
				}
			}

			if ($this->noErrors()) {

				$this->getSessionManager()->set(Controller_Admin::$goBackTagURL, $this->request->referrer());
			}

			$this->onEditInShow();

			$content = View::factory("admin/{$this->getEntity()}s/edit")
					->bind('entity', $entity)
					->set('entityName', $this->getEntity())
					->set('errors', $this->getErrors())
					->bind('data', $data);

			$content = $this->onEditWithContent($content);
		} else {
			$this->addError("Object of ['{$this->getEntity()}'] not loaded!");
			$content = View::factory('admin/errors/list')
					->set('errors', $this->getErrors());
		}

		$this->setContent($content);
	}

	public function action_list() {
		try {
			$entities = ORM::factory($this->getEntity())->where('is_deleted', '=', 0);
			$entities = $this->onListInShow($entities);
			$pageNum = (int) $this->request->param('page');
			$perPage = ($this->request->param('per_page') == NULL) ? $this->limitPerPage : $this->request->param('per_page');
			if ($pageNum < 1) {
				$pageNum = 1;
			}
			$routeParams = array(
				'directory' => 'admin',
				'controller' => $this->getControllerNameForList() . 's',
				'per_page' => $perPage,
			);
			$pagination = new Pagination($entities, $pageNum, $this->getRouteNameForList(), $routeParams, $perPage);

			$content = View::factory("admin/{$this->getEntity()}s/list")
					->bind('pagination', $pagination)
					->set('entityName', $this->getEntity());
			$content = $this->onListWithContent($content);
			$this->setContent($content);
		} catch (Exception $exc) {
			$this->getErrorManager()->addException($exc);
		}
	}

	public function action_up() {
		
	}

	public function action_down() {
		
	}

	public function action_hide() {
		$this->manipulateEntity('hide');
	}

	public function action_show() {
		$this->manipulateEntity('show');
	}

	public function action_delete() {
		$this->manipulateEntity('delete');
	}

	public function action_undelete() {
		$this->manipulateEntity('undelete');
	}

	public function action_upload() {
		
	}

	public function action_download() {
		
	}

	public function __construct(Request $request, Response $response) {
		parent::__construct($request, $response);
		$this->setControllerNameForList($this->getEntity());
	}

	/**
	 * @return string Название модели
	 */
	public function getEntity() {
		
	}

	/**
	 * @return array Массив публичных колонок для модели
	 */
	public function getEntityPublicFields() {
		
	}

	/**
	 * Метод вызываемый при сохранении объекта при редактировании
	 * @param ORM $entities
	 * @return ORM
	 */
	public function onEditInPost(ORM $entities) {
		return $entities;
	}

	/**
	 * Метод вызываемый при сохранении объекта при создании
	 * @param ORM $entities
	 * @return ORM
	 */
	public function onAddInPost(ORM $entities) {
		return $entities;
	}

	/**
	 * Выполняет какие-либо операции при отображении страницы редактирования объекта
	 */
	public function onEditInShow() {
		
	}

	/**
	 * Выполняет какие-либо операции при отображении страницы создания объекта
	 */
	public function onAddInShow() {
		
	}

	/**
	 * Выборка объектов для показа в списке
	 * @param ORM $entities
	 * @return ORM
	 */
	public function onListInShow(ORM $entities) {
		return $entities;
	}

	/**
	 * Дополнительные действия с отображением при редактировании
	 * @param View $content
	 * @return View
	 */
	public function onEditWithContent(View $content) {
		return $content;
	}

	/**
	 * Дополнительные действия с отображением при выводе списка
	 * @param View $content
	 * @return \View 
	 */
	public function onListWithContent(View $content) {
		return $content;
	}

	/**
	 * Дополнительные действия с отображением при выводе страницы создания
	 * @param View $content
	 * @return \View 
	 */
	public function onAddWithContent(View $content) {
		return $content;
	}

	/**
	 * Редирект на предыдущую страницу
	 */
	public function goBackUsingSession() {
		try {

			$url = $this->getSessionManager()->get(Controller_Admin::$goBackTagURL);
			if (!$url) {
				throw new Kohana_Exception("Could not go back because system unknowun URL");
			}
			$this->request->redirect($url);
		} catch (Kohana_Exception $exc) {
			$this->getErrorManager()->addException($exc);
		} catch (Exception $exc) {
			$this->getErrorManager()->addException($exc);
		}
	}

	/**
	 * Метод манипуляций объектами (показать, скрыть, удалить)
	 * @param string $action
	 */
	private function manipulateEntity($action = 'show') {
		try {
			$id = abs((int) $this->request->param("id"));
			$entity = ORM::factory($this->getEntity(), $id);
			$this->setEditedEntity($entity);


			switch ($action) {
				case 'show':
					Entity::show($entity);
					break;
				case 'hide':
					Entity::hide($entity);
					break;
				case 'delete':
					Entity::delete($entity);
					break;
				case 'undelete':
					Entity::undelete($entity);
					break;
				default:
					throw new Kohana_Exception("Unknown method :method for Entity class", array(':method' => $action));
					break;
			}

			$this->goBack();
		} catch (Kohana_Exception $exc) {
			$this->getErrorManager()->addException($exc);
		} catch (Exception $exc) {
			$this->getErrorManager()->addException($exc);
		}
	}

	/**
	 * Получить имя роута для выборки
	 * @return string
	 */
	public function getRouteNameForList() {
		return $this->routeNameForList;
	}

	/**
	 * Установить имя роута для выборки
	 * @param string $routeNameForList
	 * @return Controller_Admin
	 */
	public function setRouteNameForList($routeNameForList) {
		$this->routeNameForList = (string) $routeNameForList;
		return $this;
	}

	/**
	 * Нет ли ошибок? TRUE если нет.
	 * @return boolean
	 */
	public function noErrors() {
		return $this->getErrorManager()->noProblems();
	}

	/**
	 * Метод-заглушка для onAddInPost
	 * @param ORM $entities
	 * @return ORM
	 */
	public function onAddInPostIsHideDCreateDModif(ORM $entities) {
		try {
			$entities = $entities->set('is_hide', isset($_POST['is_hide']))
					->set('date_create', date(DEFAULT_DATE_FORMAT))
					->set('date_modif', date(DEFAULT_DATE_FORMAT));

			return $entities;
		} catch (ORM_Validation_Exception $exc) {
			$this->getErrorManager()->setErrors($exc->errors(Entity::$errorMsgsDir));
		} catch (Kohana_Exception $exc) {
			$this->getErrorManager()->addException($exc);
		}
	}

	/**
	 * Метод заглушка для onEditInPost
	 * @param ORM $entities
	 * @return ORM
	 */
	public function onEditInPostIsHideDModif(ORM $entities) {
		try {
			$entities = $entities->set('is_hide', isset($_POST['is_hide']))
					->set('date_modif', date(DEFAULT_DATE_FORMAT));

			return $entities;
		} catch (ORM_Validation_Exception $exc) {
			$this->getErrorManager()->setErrors($exc->errors(Entity::$errorMsgsDir));
		} catch (Kohana_Exception $exc) {
			$this->getErrorManager()->addException($exc);
		}
	}

	public function getTitleBread() {
		$data = array(
			'param' => base64_encode(serialize($this->titleBreadStack))
		);
		$this->getWidgetManager()
				->registerWidget(new Widget('breadcrumb', FALSE, $data), $this->template);
	}

	public function addTitleBread(array $titleBread) {
		if (isset($titleBread['title']) and isset($titleBread['href'])) {
			array_push($this->titleBreadStack, $titleBread);
			return $this;
		} else {
			throw new Exception("Invalid array indexes in titleBread");
		}
	}

	public function setupTitle($title, $href = '') {
		$this->setTitle($title);
		try {
			$this->addTitleBread(array(
				'title' => $title,
				'href' => $href
			));
		} catch (Exception $exc) {
			$this->getErrorManager()->addException($exc);
		}
	}

	/**
	 * Подучить редактируемую сущность
	 * @return ORM
	 */
	public function getEditedEntity() {
		return $this->editedEntity;
	}

	/**
	 * Установить редактируемую сущность
	 * @param ORM $editedEntity
	 * @return \Controller_Admin 
	 */
	public function setEditedEntity(ORM $editedEntity) {
		$this->editedEntity = $editedEntity;
		return $this;
	}

	/**
	 * Получить название контроллера в пагинацию
	 * @return string
	 */
	public function getControllerNameForList() {
		return $this->controllerNameForList;
	}

	/**
	 * Установить название контроллера в пагинацию
	 * @param string $controllerNameForList
	 * @return \Controller_Admin 
	 */
	public function setControllerNameForList($controllerNameForList) {
		$this->controllerNameForList = $controllerNameForList;
		return $this;
	}

	/**
	 *
	 * @return ORM
	 * @throws Kohana_Exception 
	 */
	public function initEntity() {
		$id = $this->request->param('id');
		$id = abs((int) $id);

		try {
			$entity = ORM::factory($this->getEntity(), $id);
			if ($entity->loaded()) {
				return $entity;
			} else {
				throw new Kohana_Exception("Object ['{$this->getEntity()}'] not loaded");
			}
		} catch (Kohana_Exception $exc) {
			$this->getErrorManager()->addException($exc);
		}
	}

}