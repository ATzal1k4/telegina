<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-12 15:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:00:48 --- ERROR: Database_Exception [ 1146 ]: Table 'wt1000450_2.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-02-12 15:00:48 --- STRACE: Database_Exception [ 1146 ]: Table 'wt1000450_2.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(0)
#6 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(17): Kohana_ORM::factory('page', 0)
#7 [internal function]: Controller_Public_Pages->action_index()
#8 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#9 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#12 {main}
2012-02-12 15:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:01:39 --- ERROR: Database_Exception [ 1146 ]: Table 'wt1000450_2.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-02-12 15:01:39 --- STRACE: Database_Exception [ 1146 ]: Table 'wt1000450_2.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(0)
#6 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(17): Kohana_ORM::factory('page', 0)
#7 [internal function]: Controller_Public_Pages->action_index()
#8 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#9 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#12 {main}
2012-02-12 15:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:01:44 --- ERROR: Database_Exception [ 1146 ]: Table 'wt1000450_2.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-02-12 15:01:44 --- STRACE: Database_Exception [ 1146 ]: Table 'wt1000450_2.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(0)
#6 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(17): Kohana_ORM::factory('page', 0)
#7 [internal function]: Controller_Public_Pages->action_index()
#8 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#9 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#12 {main}
2012-02-12 15:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:01:57 --- ERROR: Database_Exception [ 1146 ]: Table 'wt1000450_2.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-02-12 15:01:57 --- STRACE: Database_Exception [ 1146 ]: Table 'wt1000450_2.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(0)
#6 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(17): Kohana_ORM::factory('page', 0)
#7 [internal function]: Controller_Public_Pages->action_index()
#8 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#9 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#12 {main}
2012-02-12 15:01:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:01:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:02:05 --- ERROR: Database_Exception [ 1146 ]: Table 'wt1000450_2.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-02-12 15:02:05 --- STRACE: Database_Exception [ 1146 ]: Table 'wt1000450_2.pages' doesn't exist [ SHOW FULL COLUMNS FROM `pages` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('pages')
#2 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(0)
#6 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(17): Kohana_ORM::factory('page', 0)
#7 [internal function]: Controller_Public_Pages->action_index()
#8 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#9 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#12 {main}
2012-02-12 15:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 36 ]
2012-02-12 15:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 36 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(18): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 36 ]
2012-02-12 15:25:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 36 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(18): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:25:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:25:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:25:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 36 ]
2012-02-12 15:25:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 36 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(18): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 37 ]
2012-02-12 15:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 37 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 37 ]
2012-02-12 15:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 37 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:26:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:26:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:27:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Эта страница была скрыта от общего доступа ~ APPPATH/classes/controller/public/pages.php [ 33 ]
2012-02-12 15:27:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Эта страница была скрыта от общего доступа ~ APPPATH/classes/controller/public/pages.php [ 33 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:27:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Эта страница была скрыта от общего доступа ~ APPPATH/classes/controller/public/pages.php [ 33 ]
2012-02-12 15:27:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Эта страница была скрыта от общего доступа ~ APPPATH/classes/controller/public/pages.php [ 33 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 37 ]
2012-02-12 15:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 37 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:27:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:27:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:27:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 37 ]
2012-02-12 15:27:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 37 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:27:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:27:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 37 ]
2012-02-12 15:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 37 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:28:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:28:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Эта страница была скрыта от общего доступа ~ APPPATH/classes/controller/public/pages.php [ 33 ]
2012-02-12 15:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Эта страница была скрыта от общего доступа ~ APPPATH/classes/controller/public/pages.php [ 33 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 29 ]
2012-02-12 15:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 29 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 29 ]
2012-02-12 15:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 29 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:29:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:29:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 34 ]
2012-02-12 15:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 34 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:29:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:29:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:29:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 34 ]
2012-02-12 15:29:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 34 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:29:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:29:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 34 ]
2012-02-12 15:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 34 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:29:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:29:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:29:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 34 ]
2012-02-12 15:29:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 34 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:29:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 34 ]
2012-02-12 15:29:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 34 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:29:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:29:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 34 ]
2012-02-12 15:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 34 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:29:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:29:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 40 ]
2012-02-12 15:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Эта страница была удалена ~ APPPATH/classes/controller/public/pages.php [ 40 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 15:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 15:32:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 15:32:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:05:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:05:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:32:09 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/admin.php [ 16 ]
2012-02-12 16:32:09 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/admin.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-12 16:32:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:32:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:32:39 --- ERROR: View_Exception [ 0 ]: The requested view admin/auth/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-02-12 16:32:39 --- STRACE: View_Exception [ 0 ]: The requested view admin/auth/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/auth/inde...')
#1 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/auth/inde...', NULL)
#2 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/admin/auth.php(31): Kohana_View::factory('admin/auth/inde...')
#3 [internal function]: Controller_Admin_Auth->action_login()
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-12 16:32:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:32:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:36:24 --- ERROR: View_Exception [ 0 ]: The requested view admin/auth/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-02-12 16:36:24 --- STRACE: View_Exception [ 0 ]: The requested view admin/auth/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/auth/inde...')
#1 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/auth/inde...', NULL)
#2 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/admin/auth.php(31): Kohana_View::factory('admin/auth/inde...')
#3 [internal function]: Controller_Admin_Auth->action_login()
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-12 16:36:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:36:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:36:27 --- ERROR: View_Exception [ 0 ]: The requested view admin/auth/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-02-12 16:36:27 --- STRACE: View_Exception [ 0 ]: The requested view admin/auth/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/auth/inde...')
#1 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/auth/inde...', NULL)
#2 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/admin/auth.php(31): Kohana_View::factory('admin/auth/inde...')
#3 [internal function]: Controller_Admin_Auth->action_login()
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-12 16:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:36:36 --- ERROR: View_Exception [ 0 ]: The requested view admin/auth/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-02-12 16:36:36 --- STRACE: View_Exception [ 0 ]: The requested view admin/auth/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/auth/inde...')
#1 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/auth/inde...', NULL)
#2 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/admin/auth.php(31): Kohana_View::factory('admin/auth/inde...')
#3 [internal function]: Controller_Admin_Auth->action_login()
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-12 16:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:36:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-02-12 16:36:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-12 16:36:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:36:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:37:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-02-12 16:37:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('pages')
#1 {main}
2012-02-12 16:37:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:37:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:38:28 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'OFFSET 0' at line 1 [ SELECT `page`.* FROM `pages` AS `page` WHERE `is_deleted` = 0 OFFSET 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-02-12 16:38:28 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'OFFSET 0' at line 1 [ SELECT `page`.* FROM `pages` AS `page` WHERE `is_deleted` = 0 OFFSET 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `page`.*...', 'Model_Page', Array)
#1 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /usr/home/hosting/wt1000450/htdocs2/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /usr/home/hosting/wt1000450/htdocs2/application/classes/entity.php(115): Kohana_ORM->find_all()
#4 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/admin/pages.php(17): Entity::lists('page', NULL, 0)
#5 [internal function]: Controller_Admin_Pages->action_list()
#6 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#7 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#10 {main}
2012-02-12 16:38:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:38:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:39:03 --- ERROR: View_Exception [ 0 ]: The requested view pages/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-02-12 16:39:03 --- STRACE: View_Exception [ 0 ]: The requested view pages/list could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/view.php(137): Kohana_View->set_filename('pages/list')
#1 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/view.php(30): Kohana_View->__construct('pages/list', NULL)
#2 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/admin/pages.php(24): Kohana_View::factory('pages/list')
#3 [internal function]: Controller_Admin_Pages->action_list()
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#5 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-12 16:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:40:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:40:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:40:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:40:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:42:48 --- ERROR: View_Exception [ 0 ]: The requested view admin/auth/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-02-12 16:42:48 --- STRACE: View_Exception [ 0 ]: The requested view admin/auth/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/auth/inde...')
#1 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/auth/inde...', NULL)
#2 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/admin/auth.php(31): Kohana_View::factory('admin/auth/inde...')
#3 [internal function]: Controller_Admin_Auth->action_login()
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#5 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#8 {main}
2012-02-12 16:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:43:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:43:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 16:53:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 16:53:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-12 17:29:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 35 ]
2012-02-12 17:29:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH/classes/controller/public/pages.php [ 35 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/application/classes/controller/public/pages.php(19): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /usr/home/hosting/wt1000450/htdocs2/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-12 17:29:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-12 17:29:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /usr/home/hosting/wt1000450/htdocs2/index.php(109): Kohana_Request->execute()
#1 {main}