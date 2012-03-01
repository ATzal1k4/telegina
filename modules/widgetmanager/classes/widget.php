<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * Класс для получения виджетов
 */

class Widget {

	protected $controllersFolder = 'widget'; // Название папки с контроллерами виджетов
	protected $routeName = 'widget'; // Название файла конфигураций виджетов по умолчанию
	protected $params = array();   // Массив передаваемых параметров
	protected $name;   // Название виждета (контроллер)
	protected $cacheLifeTime = FALSE;
	public static $default_cache_lifetime = 60;

	/**
	 * Отрендерить виджет
	 * @param string $widgetName Название виджета
	 * @param int $cacheLifeTime время жизни кеша. По умолчанию FALSE - не кешировать
	 * @param array $params параметры для виджета
	 * <pre>
	 * $params = array(
	 * 		'param' => string $parameter
	 * )
	 * </pre>
	 * @param string $routeName
	 * @return string Отрендеренный виджет.
	 */
	public static function load($widgetName, $cacheLifeTime = FALSE, array $params = NULL, $routeName = NULL) {
		$widget = new Widget($widgetName, $cacheLifeTime, $params, $routeName);
		return $widget->render();
	}

	public function __construct($widgetName, $cacheLifeTime = FALSE, array $params = NULL, $routeName = NULL) {

		$this->cacheLifeTime = $cacheLifeTime;

		if ($params != NULL) {
			$this->params = $params;
		}

		if ($routeName != NULL) {
			$this->routeName = $routeName;
		}

		$this->name = $widgetName;
	}

	public function render() {

		if ($this->getCacheLifeTime() !== FALSE) {

			$result = CacheManager::getInstance()->get($this->getName());
			if (!$result) {
				$this->params['controller'] = $this->getName();
				$url = Route::get($this->getRouteName())->uri($this->getParams());
				$result = Request::factory($url)->execute();
				CacheManager::getInstance()->set($this->getName(), $result, $this->getCacheLifeTime());
			}
			return $result;
		} else {
			$this->params['controller'] = $this->getName();
			$url = Route::get($this->getRouteName())->uri($this->getParams());
			return Request::factory($url)->execute();
		}
	}

	/**
	 * Получить название виджета
	 * @return string Название виджета
	 */
	public function getName() {
		return $this->name;
	}

	public function getParams() {
		return $this->params;
	}

	public function getRouteName() {
		return $this->routeName;
	}

	public function getCacheLifeTime() {
		return $this->cacheLifeTime;
	}

	public function getCacheKey() {
		return $this->getName() . serialize($this->getParams()) . $this->getRouteName();
	}

}
