<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Controller_Base extends Controller_Template {

	private $pluginManager = NULL;
	private $widgetManager = NULL;
	private $frontManager = NULL;
	private $sessionManager = NULL;
	private $cacheManager = NULL;
	private $errorManager = NULL;
	private $authManager = NULL;

	public function __construct(Request $request, Response $response) {
		parent::__construct($request, $response);
		$this->setPluginManager(PluginManager::getInstance());
		$this->setFrontManager(FrontManager::getInstance());
		$this->setErrorManager(ErrorManager::getInstance());
		$this->setSessionManager(Session::instance());
		$this->setAuthManager(Auth::instance());
		$this->setCacheManager(CacheManager::getInstance());
		$this->setWidgetManager(WidgetManager::getInstance());
		
	}
	
	/**
	 * Получить менеджер виджетов
	 * @return WidgetManager 
	 */
	public function getWidgetManager() {
		return $this->widgetManager;
	}

	/**
	 * Установить менеджер виджетов
	 * @param WidgetManager $widgetManager
	 * @return \Controller_Base 
	 */
	public function setWidgetManager(WidgetManager $widgetManager) {
		$this->widgetManager = $widgetManager;
		return $this;
	}

	
	/**
	 * Получить менеджер авторизации
	 * @return Auth
	 */
	public function getAuthManager() {
		return $this->authManager;
	}

	/**
	 * Установить менеджер авторизации
	 * @param Auth $authManager
	 * @return \Controller_Base 
	 */
	public function setAuthManager(Auth $authManager) {
		$this->authManager = $authManager;
		return $this;
	}

	/**
	 * Get session
	 * @return Session
	 */
	public function getSessionManager() {
		return $this->sessionManager;
	}

	/**
	 * Set session
	 * @param Session $session
	 * @return Controller_Base
	 */
	public function setSessionManager(Session $session) {
		$this->sessionManager = $session;
		return $this;
	}

	/**
	 * Получить экземпляр Кэша
	 * @return Cache
	 */
	public function getCacheManager() {
		return $this->cacheManager;
	}

	

	/**
	 * Установить экземпляр кэша
	 * @param Cache $cache
	 * @return \Controller_Base 
	 */
	public function setCacheManager(Cache $cache) {
		$this->cacheManager = $cache;
		return $this;
	}

	/**
	 * Получить экземпляр PluginManager
	 * @return PluginManager
	 */
	public function getPluginManager() {
		return $this->pluginManager;
	}

	/**
	 * Set PluginManager
	 * @param PluginManager $pluginManager
	 * @return Controller_Base
	 */
	public function setPluginManager(PluginManager $pluginManager) {
		$this->pluginManager = $pluginManager;
		return $this;
	}

	/**
	 * Получить менеджет контента
	 * @return FrontManager 
	 */
	public function getFrontManager() {
		return $this->frontManager;
	}

	/**
	 * Установить менеджер контента
	 * @param FrontManager $frontManager
	 * @return \Controller_Base 
	 */
	public function setFrontManager(FrontManager $frontManager) {
		$this->frontManager = $frontManager;
		return $this;
	}

	/**
	 * Получить менеджер ошибок
	 * @return ErrorManager
	 */
	public function getErrorManager() {
		return $this->errorManager;
	}

	/**
	 * Установить менеджер ошибок
	 * @param ErrorManager $errorManager
	 * @return \Controller_Base 
	 */
	public function setErrorManager(ErrorManager $errorManager) {
		$this->errorManager = $errorManager;
		return $this;
	}

	/**
	 *
	 */
	public function before() {
		parent::before();
	}

	/**
	 *
	 */
	public function after() {
		$this->getWidgetManager()->render();
		$this->getPluginManager()->render();
		$this->getErrorManager()->notify();
		$this->template
				->set("title", $this->getFrontManager()->getTitle())
				->set("content", $this->getFrontManager()->getContent())
				->set("styles", $this->getFrontManager()->getStyles())
				->set("styleTexts", $this->getFrontManager()->getStyleTexts())
				->set("scriptTexts", $this->getFrontManager()->getScriptTexts())
				->set("scripts", $this->getFrontManager()->getScripts())
				->set('pluginContent', $this->getFrontManager()->getPluginContent())
				->set("specialHead", $this->getFrontManager()->getSpecialHead())
				->set('errors', $this->getErrorManager()->render())
		;
		
		
		parent::after();
	}

	public function goBack() {
		$this->request->redirect($this->request->referrer());
	}

	public function setContent($content) {
		$this->getFrontManager()->setContent($content);
		return $this;
	}

	/**
	 * Установить заголовок
	 * @param string $title
	 * @return \Controller_Base 
	 */
	public function setTitle($title) {
		$this->getFrontManager()->setTitle($title);
		return $this;
	}

	/**
	 * Get errors
	 * @return array errors
	 */
	public function getErrors() {
		return $this->getErrorManager()->getErrors();
	}

	/**
	 * Set errors
	 * @param array $errors
	 * @return \Controller_Base
	 */
	public function setErrors(array $errors) {
		$this->getErrorManager()->setErrors($errors);
		return $this;
	}

	/**
	 * Add Error Message
	 * @param string $error
	 * @return \Controller_Base
	 */
	public function addError($error) {
		$this->getErrorManager()->addError($error);
		return $this;
	}

}