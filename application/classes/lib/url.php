<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Lib_URL {

	private $url = NULL;
	private $segments = array();
	private $level = NULL;

	public function __construct($url) {
		$this->url = trim($url, '/');
		$this->segments = explode('/', $this->url);
	}

	public function getUrl() {
		return $this->url;
	}

	public function getSegments() {
		return $this->segments;
	}

	public function getLevel() {
		if ($this->level === NULL) {
			$this->level = count($this->segments);
		}
		return $this->level;
	}

	public function getSegment($num) {
		try {
			if ($num <= $this->getLevel()) {
				return $this->segments[$this->getLevel() - 1];
			} else {
				throw new Kohana_Exception("segment :num not available in :url",
						array(
							':num' => $num,
							':url' => $this->getUrl()
				));
			}
		} catch (Kohana_Exception $exc) {
			ErrorManager::getInstance()->addException($exc);
		}
	}

}