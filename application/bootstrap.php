<?php

defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------
// Load the core Kohana class
require SYSPATH . 'classes/kohana/core' . EXT;

if (is_file(APPPATH . 'classes/kohana' . EXT)) {
	// Application extends the core
	require APPPATH . 'classes/kohana' . EXT;
} else {
	// Load empty core extension
	require SYSPATH . 'classes/kohana' . EXT;
}

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('Asia/Novosibirsk');

define("DEFAULT_DATE_FORMAT", "Y-m-d H:i:s");

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'ru_RU.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('ru-ru');


Cookie::$salt = '7wdjkri5j';

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV'])) {
	Kohana::$environment = constant('Kohana::' . strtoupper($_SERVER['KOHANA_ENV']));
}
//Kohana::$environment = Kohana::PRODUCTION;


/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init(array(
	'base_url' => '/',
	'index_file' => FALSE,
	'charset' => 'utf-8',
	'errors' => TRUE,
	'profile' => TRUE,
	'caching' => FALSE
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH . 'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */


Kohana::modules(array(
	'errormanager' => MODPATH . 'errormanager',
	'frontmanager' => MODPATH . 'frontmanager',
	'pluginmanager' => MODPATH . 'pluginmanager',
	'widgetmanager' => MODPATH . 'widgetmanager',
	'cachemanager' => MODPATH . 'cachemanager',
	'errorPage' => MODPATH . 'errorPage',
	'userinfo' => MODPATH . 'userinfo',
	'mPDF' => MODPATH . 'mPDF',
	// 'translation-api' => MODPATH . 'translation-api',
	'email' => MODPATH . 'email', // Для отправки email сообщений
	'email-queue' => MODPATH . 'email-queue', // Для массовой рассылки email сообщений
	'profilertoolbar' => MODPATH . 'profilertoolbar',
	'auth' => MODPATH . 'auth', // Basic authentication
	'cache' => MODPATH . 'cache', // Caching with multiple backends
	'codebench' => MODPATH . 'codebench', // Benchmarking tool
	'database' => MODPATH . 'database', // Database access
	'image' => MODPATH . 'image', // Image manipulation
	'orm' => MODPATH . 'orm', // Object Relationship Mapping
	'orm-mptt' => MODPATH . 'orm-mptt', // Object Relationship Mapping
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	'userguide' => MODPATH . 'userguide', // User guide and API documentation
	// 'cheatsheet' => MODPATH . 'cheatsheet',
	// 'pagination' => MODPATH . 'pagination', // Pagination
	'smartpagination' => MODPATH . 'smartpagination', // Smart Pagination
	'captcha' => MODPATH . 'captcha', // Captcha
	'ulogin' => MODPATH . 'ulogin', //uLogin
	'calendar' => MODPATH . 'calendar', // Calendar
	'zend' => MODPATH . 'zend', // Zend Framework
	
));

if (!Route::cache()) {

Route::set('auth', 'admin/<action>', array('action' => '(login|logout)'))
		->defaults(array(
			'directory' => 'admin',
			'controller' => 'auth',
			'action' => 'login',
		));

Route::set('admin', 'admin/<controller>/<action>(/<id>)', array(
	'action' => '(edit|add|hide|show|up|down|delete|mainphoto|save|addchild|hideinmenu|showinmenu|inpage|subpage|manage)'
))
		->defaults(array(
			'directory' => 'admin',
			'controller' => 'pages',
		));

Route::set('admin_sublist', 'admin(/<controller>(/list/<id>(/page-<page>(/perPage(/<per_page>)))))')
		->defaults(array(
			'directory' => 'admin',
			'controller' => 'pages',
			'action' => 'list',
			'page' => 1,
			'per_page' => NULL,
		));

Route::set('admin_list', 'admin(/<controller>(/list(/page-<page>(/perPage(/<per_page>)))))')
		->defaults(array(
			'directory' => 'admin',
			'controller' => 'pages',
			'action' => 'list',
			'page' => 1,
			'per_page' => NULL,
		));

Route::set('ajax', 'ajax(/<controller>(/<action>(/<id>)))')
		->defaults(array(
			'directory' => 'ajax',
		));


Route::set('system', '(<url>)', array('url' => '.+'))
		->defaults(array(
			'controller' => 'system',
			'action' => 'index',
			'url' => '',
		));

Route::cache(TRUE);}