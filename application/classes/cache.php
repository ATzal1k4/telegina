<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Cache extends Kohana_Cache {

	const CACHE_APC = 'apc';
	const CACHE_WINCACHE = 'wincache';
	const CACHE_FILE = 'file';
	const CACHE_MEMCACHE = 'memcache';
	const CACHE_MEMCACHETAG = 'memcachetag';
	const CACHE_SQLITE = 'sqlite';

}