<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class CacheManager {

	private $cacheManager = NULL;
	private $cacheType;
	private static $instance = NULL;

	public function getCacheManager() {
		return $this->cacheManager;
	}

	public function setCacheManager(Cache $cache) {
		$this->cacheManager = $cache;
	}
	
	public function getCacheType() {
		return $this->cacheType;
	}

	public function setCacheType($cacheType) {
		$this->cacheType = $cacheType;
	}

	
	/**
	 *
	 * @return Cache
	 */
	public static function getInstance() {
		if (self::$instance == NULL) {
			self::$instance = new CacheManager();
			self::$instance->setCacheType(CacheManager::$instance->initCacheManager());
		}
		return self::$instance->getCacheManager();
	}

	private function initCacheManager() {
		try {
			$this->setCacheManager(Cache::instance(Cache::CACHE_MEMCACHETAG));
			return Cache::CACHE_MEMCACHETAG;
		} catch (Cache_Exception $exc) {
			try {
				$this->setCacheManager(Cache::instance(Cache::CACHE_MEMCACHE));
				return Cache::CACHE_MEMCACHE;
			} catch (Cache_Exception $exc) {
				try {
					$this->setCacheManager(Cache::instance(Cache::CACHE_APC));
					return Cache::CACHE_APC;
				} catch (Cache_Exception $exc) {
					try {
						$this->setCacheManager(Cache::instance(Cache::CACHE_WINCACHE));
						return Cache::CACHE_WINCACHE;
					} catch (Cache_Exception $exc) {
						try {
							$this->setCacheManager(Cache::instance(Cache::CACHE_FILE));
							return Cache::CACHE_FILE;
						} catch (Cache_Exception $exc) {
							try {
								$this->setCacheManager(Cache::instance(Cache::CACHE_SQLITE));
								return Cache::CACHE_SQLITE;
							} catch (Cache_Exception $exc) {
								throw $exc;
							}
						}
					}
				}
			}
		}
	}

}