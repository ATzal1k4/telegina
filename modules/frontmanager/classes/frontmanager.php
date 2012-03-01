<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class FrontManager {

	private static $instance = null;
	private $scripts = array(),
			$styles = array(),
			$scriptTexts = array(),
			$styleTexts = array();
	private $title = "",
			$content = "",
			$specialHead = '',
			$pluginContent = '';

	/**
	 * Получить заголовок
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Установить заголовок
	 * @param string $title
	 * @return FrontManager
	 */
	public function setTitle($title) {
		if ($this->getTitle() != "") {
			$this->title .= " :: " . $title;
		} else {
			$this->title = $title;
		}
		return $this;
	}

	/**
	 * Получить контент
	 * @return string
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 *
	 * @param string $content
	 * @return FrontManager
	 */
	public function setContent($content) {
		$this->content = $content;
		return $this;
	}

	/**
	 * Получить содержимое вывода плагинов
	 * @return string
	 */
	public function getPluginContent() {
		return $this->pluginContent;
	}

	/**
	 * Добавить содержимое вывода плагинов
	 * @param string $pluginContent
	 * @return FrontManager
	 */
	public function setPluginContent($pluginContent) {
		if ($pluginContent != "") {
			if (strpos($this->pluginContent, $pluginContent) === FALSE) {
				$this->pluginContent .= $pluginContent;
			}
		}

		return $this;
	}

	/**
	 * Подключить js-скрипт к странице
	 * @param string $script
	 * @return FrontManager
	 */
	public function addScript($script, array $attributes = array()) {
		if (!in_array(array($script, $attributes), $this->scripts)) {
			array_push($this->scripts, array($script, $attributes));
		}
		return $this;
	}

	/**
	 * Подключить стиль к странице
	 * @param string $style
	 * @return FrontManager
	 */
	public function addStyle($style, array $attributes = array()) {
		if (!in_array(array($style, $attributes), $this->styles)) {
			array_push($this->styles, array($style, $attributes));
		}
		return $this;
	}

	/**
	 * Установить <!--ltIE6--> примочки
	 * @param string $head
	 * @return \FrontManager 
	 */
	public function setSpecialHead($head) {
		if (strpos($this->specialHead, $head) === FALSE) {
			$this->specialHead .= $head;
		}

		return $this;
	}

	/**
	 * Подключить js-jquery к странице
	 * @return FrontManager
	 */
	public function addJQueryJS() {
		return $this->addScript("media/js/jquery/jquery-1.7.1.js");
	}

	/**
	 * Подключить TinyMCE редактор к странице
	 * @return FrontManager
	 */
	public function addTinyMCE() {
		return $this->addScript("media/js/tiny_mce/tiny_mce.js")
						->addScript("media/js/my_tiny_mce/basic.js");
	}

	/**
	 * Подключить CSS Framework HTML KickStart к странице
	 * @param boolean $public TRUE если подключение происходит в public части приложения
	 * @return FrontManager
	 */
	public function add99Line($public = FALSE) {

		$suffix = '';
		if ($public) {
			$suffix = '_public';
		}

		return $this->setSpecialHead('<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->')
						->addJQueryJS()
						->addScript("media/99Line" . $suffix . "/js/prettify.js")
						->addScript("media/99Line" . $suffix . "/js/kickstart.js")
						->addStyle("media/99Line" . $suffix . "/css/kickstart.css", array('media' => 'all'))
						->addStyle("media/99Line" . $suffix . "/style.css", array('media' => 'all'));
	}

	/**
	 * Подключить флэш-мультиаплофдер к странице
	 * @return FrontManager
	 */
	public function addUploadify() {
		return $this->addJQueryJS()
						->addScript("media/uploadify/swfobject.js")
						->addScript("media/uploadify/jquery.uploadify.v2.1.4.min.js")
						->addScript("media/uploadify/my-upload.js");
	}

	/**
	 * Подключить jquery.form к странице
	 * @return FrontManager
	 */
	public function addJQueryFormJS() {
		return $this->addScript('media/js/jquery/jquery.form.js');
	}

	/**
	 * Подключить CKEditor-редактор к странице
	 * @return FrontManager 
	 */
	public function addCKEditor() {
		return $this->addScript('media/ckeditor/ckeditor.js');
	}

	/**
	 * Добавить js
	 * @param scring $jsText
	 * @return FrontManager 
	 */
	public function addScriptText($jsText) {
		array_push($this->scriptTexts, '<script>' . $jsText . '</script>');
		return $this;
	}

	/**
	 * Добавить css
	 * @param string $cssText
	 * @return FrontManager 
	 */
	public function addStyleText($cssText) {
		array_push($this->styleTexts, '<style>' . $cssText . '</style>');
		return $this;
	}

	/**
	 * Добавить текстовый редактор CKEditor к элементу по id
	 * @param string $textareaID
	 * @return FrontManager 
	 */
	public function addCKEditorOn($textareaID) {
		$this->addScriptText('CKEDITOR.replace("' . $textareaID . '");');

		return $this;
	}

	/**
	 * Получить скрипты-ссылки подключенные к странице
	 * @return array 
	 */
	public function getScripts() {
		return $this->scripts;
	}

	/**
	 * Получить стили-ссылки подключенные к странице
	 * @return array 
	 */
	public function getStyles() {
		return $this->styles;
	}

	/**
	 * Получить скрипты-текстовики
	 * @return array
	 */
	public function getScriptTexts() {
		return $this->scriptTexts;
	}

	/**
	 * Получить стили-текстовики
	 * @return array
	 */
	public function getStyleTexts() {
		return $this->styleTexts;
	}

	/**
	 * Получить специальный блок в head
	 * @return string
	 */
	public function getSpecialHead() {
		return $this->specialHead;
	}

	/**
	 * Получить экземпляр мееджера
	 * @return FrontManager
	 */
	public static function getInstance() {
		if (self::$instance == NULL) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	private function __construct() {
		;
	}

	private function __clone() {
		;
	}

}