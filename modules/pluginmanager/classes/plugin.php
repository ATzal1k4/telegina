<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author user
 */
abstract class Plugin {

	private $baseController = NULL;
	protected $cacheLifeTime;
	public static $default_cache_life_time = 60;

	public function __construct(Controller_Base $controller, $cache_lifetime = FALSE) {
		$this->baseController = $controller;
		if ($cache_lifetime === TRUE) {
			$cache_lifetime = Plugin::$default_cache_life_time;
		}
		$this->cacheLifeTime = $cache_lifetime;
	}

	/**
	 * Получить вывод плагина
	 * @return string 
	 */
	final public function render() {
		if ($this->getCacheLifeTime() === FALSE) {
			return $this->getResult();
		}

		$result = $this->getBaseController()
				->getCacheManager()
				->get($this->getName());

		if ($result == NULL) {
			$result = $this->getResult();
			$this->getBaseController()
					->getCacheManager()
					->set($this->getName(), $result, $this->getCacheLifeTime());
		}

		return $result;
	}

	abstract public function getResult();

	/**
	 * Получить имя плагина
	 * @return string 
	 */
	abstract public function getName();

	/**
	 * Получить время жизни кэша
	 * @return int
	 */
	public function getCacheLifeTime() {
		return $this->cacheLifeTime;
	}

	/**
	 * Установить время жизни кэша
	 * @param int $cacheLifeTime
	 * @return \Plugin 
	 */
	public function setCacheLifeTime($cacheLifeTime) {
		$this->cacheLifeTime = $cacheLifeTime;
		return $this;
	}

	/**
	 * Получить базовый контроллер
	 * @return Controller_Base 
	 */
	public function getBaseController() {
		return $this->baseController;
	}

	/**
	 * Добавить скрипт на страницу
	 * @param string $script
	 * @param array $attributes
	 * @return \Plugin 
	 */
	public function addScript($script, array $attributes = array()) {
		$script = PluginManager::$mediaDir . $this->getName() . '/' . $script;
		$this->getBaseController()->getFrontManager()->addScript($script, $attributes);
		return $this;
	}

	/**
	 * Добавить стиль на страницу
	 * @param string $style
	 * @param array $attributes
	 * @return \Plugin 
	 */
	public function addStyle($style, array $attributes = array()) {
		$style = PluginManager::$mediaDir . $this->getName() . '/' . $style;
		$this->getBaseController()->getFrontManager()->addStyle($style, $attributes);
		return $this;
	}

}
