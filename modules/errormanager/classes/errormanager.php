<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ErrorManager {

	protected static $instance = NULL;
	private $errors = array();
	private $exceptions = array();

	/**
	 * Получить экземпляр менеджера
	 * @return \ErrorManager 
	 */
	public static function getInstance() {
		if (self::$instance == NULL) {
			self::$instance = new ErrorManager();
		}
		return self::$instance;
	}

	public function noErrors() {
		if (count($this->getErrors()) == 0) {
			return TRUE;
		}
		return FALSE;
	}

	public function noExceptions() {
		if (count($this->getExceptions()) == 0) {
			return TRUE;
		}
		return FALSE;
	}

	public function noProblems() {
		return $this->noExceptions() and $this->noErrors();
	}

	/**
	 * Получить ошибки
	 * @return array
	 */
	public function getErrors() {
		return $this->errors;
	}

	/**
	 * Установить ошибки
	 * @param array $errors
	 * @return \ErrorManager 
	 */
	public function setErrors(array $errors) {
		$this->errors = $errors;
		return $this;
	}

	/**
	 * Добавить ошибку
	 * @param string $error
	 * @return \ErrorManager 
	 */
	public function addError($error) {
		array_push($this->errors, $error);
		return $this;
	}

	/**
	 * Зарегестрировать исключение
	 * @param Exception $e
	 * @return \ErrorManager 
	 */
	public function addException(Exception $exc) {
		array_push($this->exceptions, $exc);
		return $this;
	}

	/**
	 * Получить исключения
	 * @return array
	 */
	public function getExceptions() {
		return $this->exceptions;
	}

	public function render() {
		return View::factory('errormanager/out')
						->set('errors', $this->getErrors())
						->set('exceptions', $this->getExceptions());
	}

	public static function notify() {

		if (!ErrorManager::getInstance()->noErrors())
			foreach (ErrorManager::getInstance()->getErrors() as $error) {
				Kohana::$log->add(Log::ERROR, $error);
			}

		if (!ErrorManager::getInstance()->noExceptions())
			foreach (ErrorManager::getInstance()->getExceptions() as $exc) {
				if ($exc instanceof Exception) {
					Kohana::$log->add(Log::ERROR, $exc->getMessage());
					Kohana::$log->add(Log::ERROR, $exc->getTraceAsString());
				}
				
				
			}
	}

	protected function __construct() {
		
	}

	private function __clone() {
		
	}

	public function __toString() {
		return $this->render();
	}

}