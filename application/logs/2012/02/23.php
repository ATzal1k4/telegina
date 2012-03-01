<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-23 00:02:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/views/admin/menus/list.php [ 20 ]
2012-02-23 00:02:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: menus ~ APPPATH/views/admin/menus/list.php [ 20 ]
--
#0 /home/user/www/telegina/application/views/admin/menus/list.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/user/www/...', 20, Array)
#1 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#2 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#3 /home/user/www/telegina/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/user/www/telegina/application/views/admin.php(74): Kohana_View->__toString()
#5 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#6 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#7 /home/user/www/telegina/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/user/www/telegina/application/classes/controller/base.php(46): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Menus))
#11 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 00:02:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:02:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:04:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:04:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:04:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:04:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:04:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:04:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:04:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/admin/menus/edit.php [ 7 ]
2012-02-23 00:04:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/admin/menus/edit.php [ 7 ]
--
#0 /home/user/www/telegina/application/views/admin/menus/edit.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/user/www/...', 7, Array)
#1 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#2 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#3 /home/user/www/telegina/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/user/www/telegina/application/views/admin.php(74): Kohana_View->__toString()
#5 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#6 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#7 /home/user/www/telegina/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/user/www/telegina/application/classes/controller/base.php(46): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Menus))
#11 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 00:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:05:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:05:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:05:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:05:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:05:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:05:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:06:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:06:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:06:23 --- ERROR: ErrorException [ 1 ]: Class Controller_Admin_Menuitems contains 5 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::getEntityPublicFields, Controller_Admin::onEditInPost, Controller_Admin::onAddInPost, ...) ~ APPPATH/classes/controller/admin/menuitems.php [ 8 ]
2012-02-23 00:06:23 --- STRACE: ErrorException [ 1 ]: Class Controller_Admin_Menuitems contains 5 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::getEntityPublicFields, Controller_Admin::onEditInPost, Controller_Admin::onAddInPost, ...) ~ APPPATH/classes/controller/admin/menuitems.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-23 00:06:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:06:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:11:27 --- ERROR: ErrorException [ 1 ]: Class Controller_Admin_Menuitems contains 4 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::onEditInPost, Controller_Admin::onAddInPost, Controller_Admin::onEditInShow, ...) ~ APPPATH/classes/controller/admin/menuitems.php [ 8 ]
2012-02-23 00:11:27 --- STRACE: ErrorException [ 1 ]: Class Controller_Admin_Menuitems contains 4 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::onEditInPost, Controller_Admin::onAddInPost, Controller_Admin::onEditInShow, ...) ~ APPPATH/classes/controller/admin/menuitems.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-23 00:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:11:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:11:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:12:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:12:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:12:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:12:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:12:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:12:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:13:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/list/2/perPage/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:13:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/list/2/perPage/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:13:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:13:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:13:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:13:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:13:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:13:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:13:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:13:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:13:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:13:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:14:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:14:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:14:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:14:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:14:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:14:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:14:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:14:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:14:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:14:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:15:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:15:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:15:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:15:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:15:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:15:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:15:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:15:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:15:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:15:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:15:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:15:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:16:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:16:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:16:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:16:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:16:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:16:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:26:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:26:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:27:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:27:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:27:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:27:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:27:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:27:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:27:45 --- ERROR: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH/classes/controller/admin.php [ 71 ]
2012-02-23 00:27:45 --- STRACE: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH/classes/controller/admin.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-23 00:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:28:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:28:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:28:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:28:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:29:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH/views/admin/menuitems/edit.php [ 8 ]
2012-02-23 00:29:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH/views/admin/menuitems/edit.php [ 8 ]
--
#0 /home/user/www/telegina/application/views/admin/menuitems/edit.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/user/www/...', 8, Array)
#1 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#2 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#3 /home/user/www/telegina/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/user/www/telegina/application/views/admin.php(74): Kohana_View->__toString()
#5 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#6 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#7 /home/user/www/telegina/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/user/www/telegina/application/classes/controller/base.php(46): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Menuitems))
#11 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 00:29:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:29:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:32:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:32:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/css/example.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/css/example.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:32:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:32:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:32:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:32:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:32:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:32:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/css/example.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/css/example.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:32:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:32:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:37:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:37:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:37:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:37:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:37:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH/views/admin/menuitems/edit.php [ 8 ]
2012-02-23 00:37:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH/views/admin/menuitems/edit.php [ 8 ]
--
#0 /home/user/www/telegina/application/views/admin/menuitems/edit.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/user/www/...', 8, Array)
#1 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#2 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#3 /home/user/www/telegina/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/user/www/telegina/application/views/admin.php(74): Kohana_View->__toString()
#5 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#6 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#7 /home/user/www/telegina/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/user/www/telegina/application/classes/controller/base.php(46): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Menuitems))
#11 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 00:37:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:37:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:39:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:39:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:39:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:39:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:39:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:39:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:40:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:40:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:50:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:50:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:50:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:50:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:51:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:51:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:51:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:51:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:51:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:51:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:51:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:51:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:51:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:51:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:51:56 --- ERROR: Exception [ 0 ]: Операция не удалась ~ APPPATH/classes/controller/admin/menuitems.php [ 114 ]
2012-02-23 00:51:56 --- STRACE: Exception [ 0 ]: Операция не удалась ~ APPPATH/classes/controller/admin/menuitems.php [ 114 ]
--
#0 [internal function]: Controller_Admin_Menuitems->action_down()
#1 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Menuitems))
#2 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#5 {main}
2012-02-23 00:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:52:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:52:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:52:14 --- ERROR: Exception [ 0 ]: Операция не удалась ~ APPPATH/classes/controller/admin/menuitems.php [ 127 ]
2012-02-23 00:52:14 --- STRACE: Exception [ 0 ]: Операция не удалась ~ APPPATH/classes/controller/admin/menuitems.php [ 127 ]
--
#0 [internal function]: Controller_Admin_Menuitems->action_up()
#1 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Menuitems))
#2 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#5 {main}
2012-02-23 00:52:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:52:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:52:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:52:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:52:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:52:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:52:20 --- ERROR: Exception [ 0 ]: Операция не удалась ~ APPPATH/classes/controller/admin/menuitems.php [ 127 ]
2012-02-23 00:52:20 --- STRACE: Exception [ 0 ]: Операция не удалась ~ APPPATH/classes/controller/admin/menuitems.php [ 127 ]
--
#0 [internal function]: Controller_Admin_Menuitems->action_up()
#1 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Menuitems))
#2 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#5 {main}
2012-02-23 00:52:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:52:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:52:33 --- ERROR: Exception [ 0 ]: Операция не удалась ~ APPPATH/classes/controller/admin/menuitems.php [ 114 ]
2012-02-23 00:52:33 --- STRACE: Exception [ 0 ]: Операция не удалась ~ APPPATH/classes/controller/admin/menuitems.php [ 114 ]
--
#0 [internal function]: Controller_Admin_Menuitems->action_down()
#1 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Menuitems))
#2 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#5 {main}
2012-02-23 00:52:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:52:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:52:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:52:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:53:32 --- ERROR: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH/classes/controller/admin.php [ 40 ]
2012-02-23 00:53:32 --- STRACE: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH/classes/controller/admin.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-23 00:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:53:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:53:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:56:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:56:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:56:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:56:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 00:56:26 --- ERROR: ErrorException [ 1 ]: Class Controller_Admin_News contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::onAddInPost, Controller_Admin::onEditInShow, Controller_Admin::onAddInShow) ~ APPPATH/classes/controller/admin/news.php [ 8 ]
2012-02-23 00:56:26 --- STRACE: ErrorException [ 1 ]: Class Controller_Admin_News contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::onAddInPost, Controller_Admin::onEditInShow, Controller_Admin::onAddInShow) ~ APPPATH/classes/controller/admin/news.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-23 00:56:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 00:56:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:03:50 --- ERROR: ErrorException [ 1 ]: Class Controller_Admin_News contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::onAddInPost, Controller_Admin::onEditInShow, Controller_Admin::onAddInShow) ~ APPPATH/classes/controller/admin/news.php [ 8 ]
2012-02-23 01:03:50 --- STRACE: ErrorException [ 1 ]: Class Controller_Admin_News contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::onAddInPost, Controller_Admin::onEditInShow, Controller_Admin::onAddInShow) ~ APPPATH/classes/controller/admin/news.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-23 01:03:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:03:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:03:52 --- ERROR: ErrorException [ 1 ]: Class Controller_Admin_News contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::onAddInPost, Controller_Admin::onEditInShow, Controller_Admin::onAddInShow) ~ APPPATH/classes/controller/admin/news.php [ 8 ]
2012-02-23 01:03:52 --- STRACE: ErrorException [ 1 ]: Class Controller_Admin_News contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::onAddInPost, Controller_Admin::onEditInShow, Controller_Admin::onAddInShow) ~ APPPATH/classes/controller/admin/news.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-23 01:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:03:53 --- ERROR: ErrorException [ 1 ]: Class Controller_Admin_News contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::onAddInPost, Controller_Admin::onEditInShow, Controller_Admin::onAddInShow) ~ APPPATH/classes/controller/admin/news.php [ 8 ]
2012-02-23 01:03:53 --- STRACE: ErrorException [ 1 ]: Class Controller_Admin_News contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::onAddInPost, Controller_Admin::onEditInShow, Controller_Admin::onAddInShow) ~ APPPATH/classes/controller/admin/news.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-23 01:03:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:03:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:03:54 --- ERROR: ErrorException [ 1 ]: Class Controller_Admin_News contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::onAddInPost, Controller_Admin::onEditInShow, Controller_Admin::onAddInShow) ~ APPPATH/classes/controller/admin/news.php [ 8 ]
2012-02-23 01:03:54 --- STRACE: ErrorException [ 1 ]: Class Controller_Admin_News contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::onAddInPost, Controller_Admin::onEditInShow, Controller_Admin::onAddInShow) ~ APPPATH/classes/controller/admin/news.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-23 01:03:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:03:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:04:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:04:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:04:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:04:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:04:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:04:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:04:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:04:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: new ~ APPPATH/views/admin/news/edit.php [ 7 ]
2012-02-23 01:04:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: new ~ APPPATH/views/admin/news/edit.php [ 7 ]
--
#0 /home/user/www/telegina/application/views/admin/news/edit.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/user/www/...', 7, Array)
#1 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#2 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#3 /home/user/www/telegina/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/user/www/telegina/application/views/admin.php(74): Kohana_View->__toString()
#5 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#6 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#7 /home/user/www/telegina/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/user/www/telegina/application/classes/controller/base.php(46): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_News))
#11 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 01:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:05:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:05:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:06:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: new ~ APPPATH/views/admin/news/edit.php [ 7 ]
2012-02-23 01:06:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: new ~ APPPATH/views/admin/news/edit.php [ 7 ]
--
#0 /home/user/www/telegina/application/views/admin/news/edit.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/user/www/...', 7, Array)
#1 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#2 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#3 /home/user/www/telegina/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/user/www/telegina/application/views/admin.php(74): Kohana_View->__toString()
#5 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#6 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#7 /home/user/www/telegina/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/user/www/telegina/application/classes/controller/base.php(46): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_News))
#11 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 01:06:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:06:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:06:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:06:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/add/css/example.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/add/css/example.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:07:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/add/css/example.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:07:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/add/css/example.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:07:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:07:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:08:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:08:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:08:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:08:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:08:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: new ~ APPPATH/views/admin/news/edit.php [ 7 ]
2012-02-23 01:08:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: new ~ APPPATH/views/admin/news/edit.php [ 7 ]
--
#0 /home/user/www/telegina/application/views/admin/news/edit.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/user/www/...', 7, Array)
#1 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#2 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#3 /home/user/www/telegina/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/user/www/telegina/application/views/admin.php(74): Kohana_View->__toString()
#5 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#6 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#7 /home/user/www/telegina/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/user/www/telegina/application/classes/controller/base.php(46): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_News))
#11 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 01:08:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:08:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:09:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:09:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:09:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: entityName ~ APPPATH/views/admin/news/add.php [ 9 ]
2012-02-23 01:09:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: entityName ~ APPPATH/views/admin/news/add.php [ 9 ]
--
#0 /home/user/www/telegina/application/views/admin/news/add.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/user/www/...', 9, Array)
#1 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#2 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#3 /home/user/www/telegina/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/user/www/telegina/application/views/admin.php(74): Kohana_View->__toString()
#5 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#6 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#7 /home/user/www/telegina/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/user/www/telegina/application/classes/controller/base.php(46): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_News))
#11 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 01:09:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:09:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/add/css/example.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/add/css/example.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:11:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:11:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:11:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: new ~ APPPATH/views/admin/news/edit.php [ 7 ]
2012-02-23 01:11:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: new ~ APPPATH/views/admin/news/edit.php [ 7 ]
--
#0 /home/user/www/telegina/application/views/admin/news/edit.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/user/www/...', 7, Array)
#1 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#2 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#3 /home/user/www/telegina/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/user/www/telegina/application/views/admin.php(74): Kohana_View->__toString()
#5 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#6 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#7 /home/user/www/telegina/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/user/www/telegina/application/classes/controller/base.php(46): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_News))
#11 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 01:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/edit/css/example.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/edit/css/example.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:11:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:11:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:12:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:12:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:12:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:12:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:12:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:12:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:12:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:12:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:12:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:12:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:12:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:12:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:12:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:12:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:12:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photos/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:12:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photos/bg.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:12:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:12:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:13:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:13:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:14:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:14:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:14:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:14:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:14:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:14:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:14:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:14:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:15:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:15:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:15:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:15:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:15:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:15:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:16:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:16:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:16:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/edit/css/example.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:16:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/edit/css/example.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:16:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:16:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:16:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:16:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:16:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:16:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:18:19 --- ERROR: ErrorException [ 1 ]: Class Controller_Admin_Albums contains 5 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::getEntityPublicFields, Controller_Admin::onEditInPost, Controller_Admin::onAddInPost, ...) ~ APPPATH/classes/controller/admin/albums.php [ 8 ]
2012-02-23 01:18:19 --- STRACE: ErrorException [ 1 ]: Class Controller_Admin_Albums contains 5 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::getEntityPublicFields, Controller_Admin::onEditInPost, Controller_Admin::onAddInPost, ...) ~ APPPATH/classes/controller/admin/albums.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-23 01:18:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:18:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:21:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: albums ~ APPPATH/views/admin/albums/list.php [ 20 ]
2012-02-23 01:21:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: albums ~ APPPATH/views/admin/albums/list.php [ 20 ]
--
#0 /home/user/www/telegina/application/views/admin/albums/list.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/user/www/...', 20, Array)
#1 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#2 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#3 /home/user/www/telegina/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/user/www/telegina/application/views/admin.php(74): Kohana_View->__toString()
#5 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#6 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#7 /home/user/www/telegina/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/user/www/telegina/application/classes/controller/base.php(46): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Albums))
#11 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 01:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:23:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:23:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:23:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:23:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:23:58 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 812 ]
2012-02-23 01:23:58 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 812 ]
--
#0 /home/user/www/telegina/system/classes/kohana/request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', '/home/user/www/...', 812, Array)
#1 /home/user/www/telegina/system/classes/kohana/request.php(198): Kohana_Request->__construct('admin', NULL)
#2 /home/user/www/telegina/index.php(110): Kohana_Request::factory()
#3 {main}
2012-02-23 01:23:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:23:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:25:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:25:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:25:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:25:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:25:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:25:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:25:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:25:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:25:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:25:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:25:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:25:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:26:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:26:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:28:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:28:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:28:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:28:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:28:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:28:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:28:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:28:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:28:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:28:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:28:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:28:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:28:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:28:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:28:55 --- ERROR: ErrorException [ 1 ]: Class Controller_Admin_Guestbook contains 5 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::getEntityPublicFields, Controller_Admin::onEditInPost, Controller_Admin::onAddInPost, ...) ~ APPPATH/classes/controller/admin/guestbook.php [ 8 ]
2012-02-23 01:28:55 --- STRACE: ErrorException [ 1 ]: Class Controller_Admin_Guestbook contains 5 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::getEntityPublicFields, Controller_Admin::onEditInPost, Controller_Admin::onAddInPost, ...) ~ APPPATH/classes/controller/admin/guestbook.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-23 01:28:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:28:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:28:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:28:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:29:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:29:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:32:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:32:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:37:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:37:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:37:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:37:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:37:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:37:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:38:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:38:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:38:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:38:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:38:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:38:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:38:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:38:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:38:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:38:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:38:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:38:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:38:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:38:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:38:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:38:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:38:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: album ~ APPPATH/views/admin/albums/edit.php [ 7 ]
2012-02-23 01:38:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: album ~ APPPATH/views/admin/albums/edit.php [ 7 ]
--
#0 /home/user/www/telegina/application/views/admin/albums/edit.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/user/www/...', 7, Array)
#1 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#2 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#3 /home/user/www/telegina/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /home/user/www/telegina/application/views/admin.php(74): Kohana_View->__toString()
#5 /home/user/www/telegina/system/classes/kohana/view.php(61): include('/home/user/www/...')
#6 /home/user/www/telegina/system/classes/kohana/view.php(343): Kohana_View::capture('/home/user/www/...', Array)
#7 /home/user/www/telegina/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /home/user/www/telegina/application/classes/controller/base.php(46): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Albums))
#11 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 01:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:38:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:38:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:39:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:39:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:39:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:39:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:40:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:40:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:40:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:40:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:41:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:41:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:41:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:41:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:41:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:41:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:41:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:41:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:42:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:42:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:42:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:42:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:42:31 --- ERROR: ErrorException [ 1 ]: Class Controller_Admin_Photos contains 5 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::getEntityPublicFields, Controller_Admin::onEditInPost, Controller_Admin::onAddInPost, ...) ~ APPPATH/classes/controller/admin/photos.php [ 8 ]
2012-02-23 01:42:31 --- STRACE: ErrorException [ 1 ]: Class Controller_Admin_Photos contains 5 abstract methods and must therefore be declared abstract or implement the remaining methods (Controller_Admin::getEntityPublicFields, Controller_Admin::onEditInPost, Controller_Admin::onAddInPost, ...) ~ APPPATH/classes/controller/admin/photos.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-23 01:42:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:42:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:46:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:46:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/photos/mainphoto/3 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/photos/mainphoto/3 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:46:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:46:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:46:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:46:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:46:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:46:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:46:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:46:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:47:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:47:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:47:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:47:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:47:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:47:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:47:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:47:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:47:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:47:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 01:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 01:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:09:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:09:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:09:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:09:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:09:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:09:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:10:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:10:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:11:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:11:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:12:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:12:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:12:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:12:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:12:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:12:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:12:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:12:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:13:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:13:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:13:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:13:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:13:35 --- ERROR: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_deleted' in 'where clause' [ SELECT module.* FROM modules AS module WHERE is_deleted = 0 ] ~ MODPATH/profilertoolbar/classes/kohana/database/pdo.php [ 158 ]
2012-02-23 02:13:35 --- STRACE: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_deleted' in 'where clause' [ SELECT module.* FROM modules AS module WHERE is_deleted = 0 ] ~ MODPATH/profilertoolbar/classes/kohana/database/pdo.php [ 158 ]
--
#0 /home/user/www/telegina/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PDO->query(1, 'SELECT module.*...', 'Model_Module', Array)
#1 /home/user/www/telegina/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_PDO))
#2 /home/user/www/telegina/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /home/user/www/telegina/modules/kohana-pagination/classes/pagination.php(18): Kohana_ORM->find_all()
#4 /home/user/www/telegina/application/classes/controller/admin.php(117): Pagination->__construct(Object(Model_Module), 1, 'admin_list', Array, 1)
#5 /home/user/www/telegina/application/classes/controller/admin/module.php(13): Controller_Admin->action_list()
#6 /home/user/www/telegina/application/classes/controller/admin/modules.php(31): Controller_Admin_Module->action_list()
#7 [internal function]: Controller_Admin_Modules->action_list()
#8 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modules))
#9 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#12 {main}
2012-02-23 02:13:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:13:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:14:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:14:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:15:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:15:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:28:17 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin::setTitle() should be compatible with that of Controller_Base::setTitle() ~ APPPATH/classes/controller/admin.php [ 5 ]
2012-02-23 02:28:17 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin::setTitle() should be compatible with that of Controller_Base::setTitle() ~ APPPATH/classes/controller/admin.php [ 5 ]
--
#0 /home/user/www/telegina/application/classes/controller/admin.php(5): Kohana_Core::error_handler(2048, 'Declaration of ...', '/home/user/www/...', 5, Array)
#1 /home/user/www/telegina/system/classes/kohana/core.php(496): require('/home/user/www/...')
#2 [internal function]: Kohana_Core::auto_load('Controller_Admi...')
#3 /home/user/www/telegina/application/classes/controller/admin/menus.php(8): spl_autoload_call('Controller_Admi...')
#4 /home/user/www/telegina/system/classes/kohana/core.php(496): require('/home/user/www/...')
#5 [internal function]: Kohana_Core::auto_load('controller_admi...')
#6 [internal function]: spl_autoload_call('controller_admi...')
#7 /home/user/www/telegina/system/classes/kohana/request/client/internal.php(85): class_exists('controller_admi...')
#8 /home/user/www/telegina/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/user/www/telegina/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#11 {main}
2012-02-23 02:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:28:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:28:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:30:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:30:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:36:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:36:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:37:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:37:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:38:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:38:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:46:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:46:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 02:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 02:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:13:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:13:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:15:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:15:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:15:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:15:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:15:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:15:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:15:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:15:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:15:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:15:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:15:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:15:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:22:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:22:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:23:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:23:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:23:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:23:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:23:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:23:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:24:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:24:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:26:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:26:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:33:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:33:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:37:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:37:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:38:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:38:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:38:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:38:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:38:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:38:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:38:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:38:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:38:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:38:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:39:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-02-23 03:39:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/user/www/telegina/index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 03:59:31 --- ERROR: Database_Exception [ 1049 ]: SQLSTATE[42000] [1049] Unknown database 'wt1000450_2' ~ MODPATH\profilertoolbar\classes\kohana\database\pdo.php [ 59 ]
2012-02-23 03:59:31 --- STRACE: Database_Exception [ 1049 ]: SQLSTATE[42000] [1049] Unknown database 'wt1000450_2' ~ MODPATH\profilertoolbar\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\profilertoolbar\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT menu.* F...', false, Array)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_PDO))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\menu.php(24): Kohana_ORM->find()
#5 [internal function]: Controller_Widget_Menu->action_index()
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Menu))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(29): Widget::load('menu')
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(11): Controller_Public->before()
#13 [internal function]: Controller_Public_Pages->before()
#14 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#15 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#18 {main}
2012-02-23 04:02:41 --- ERROR: Database_Exception [ 1049 ]: SQLSTATE[42000] [1049] Unknown database 'wt1000450_2' ~ MODPATH\profilertoolbar\classes\kohana\database\pdo.php [ 59 ]
2012-02-23 04:02:41 --- STRACE: Database_Exception [ 1049 ]: SQLSTATE[42000] [1049] Unknown database 'wt1000450_2' ~ MODPATH\profilertoolbar\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\profilertoolbar\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT menu.* F...', false, Array)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_PDO))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\menu.php(24): Kohana_ORM->find()
#5 [internal function]: Controller_Widget_Menu->action_index()
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Menu))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(29): Widget::load('menu')
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(11): Controller_Public->before()
#13 [internal function]: Controller_Public_Pages->before()
#14 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#15 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#18 {main}
2012-02-23 04:34:12 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Controller_Admin::setupTitle(), called in C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\albums.php on line 33 and defined ~ APPPATH\classes\controller\admin.php [ 348 ]
2012-02-23 04:34:12 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Controller_Admin::setupTitle(), called in C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\albums.php on line 33 and defined ~ APPPATH\classes\controller\admin.php [ 348 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin.php(348): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Program File...', 348, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\albums.php(33): Controller_Admin->setupTitle('???????????????...')
#2 [internal function]: Controller_Admin_Albums->action_edit()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Albums))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#7 {main}
2012-02-23 04:43:30 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Юешеду - assumed 'Юешеду' ~ APPPATH\classes\controller\admin\menus.php [ 27 ]
2012-02-23 04:43:30 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Юешеду - assumed 'Юешеду' ~ APPPATH\classes\controller\admin\menus.php [ 27 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\menus.php(27): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\Program File...', 27, Array)
#1 [internal function]: Controller_Admin_Menus->action_edit()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Menus))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 04:47:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/css/example.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-23 04:47:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/css/example.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 04:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/edit/css/example.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-23 04:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/edit/css/example.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 04:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/add/css/example.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-23 04:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/news/add/css/example.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 05:03:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: links ~ APPPATH\views\admin\links\list.php [ 21 ]
2012-02-23 05:03:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: links ~ APPPATH\views\admin\links\list.php [ 21 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin\links\list.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 21, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin.php(74): Kohana_View->__toString()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(47): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Links))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 05:04:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: link ~ APPPATH\views\admin\links\edit.php [ 7 ]
2012-02-23 05:04:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: link ~ APPPATH\views\admin\links\edit.php [ 7 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin\links\edit.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 7, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin.php(74): Kohana_View->__toString()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(47): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Links))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 05:17:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: votes ~ APPPATH\views\admin\votes\list.php [ 20 ]
2012-02-23 05:17:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: votes ~ APPPATH\views\admin\votes\list.php [ 20 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin\votes\list.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 20, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin.php(74): Kohana_View->__toString()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(47): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Votes))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 05:18:11 --- ERROR: ErrorException [ 1 ]: Call to undefined method Pagination::redult() ~ APPPATH\views\admin\votes\list.php [ 20 ]
2012-02-23 05:18:11 --- STRACE: ErrorException [ 1 ]: Call to undefined method Pagination::redult() ~ APPPATH\views\admin\votes\list.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-23 05:30:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH\views\admin\voteitems\edit.php [ 8 ]
2012-02-23 05:30:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH\views\admin\voteitems\edit.php [ 8 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin\voteitems\edit.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 8, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin.php(74): Kohana_View->__toString()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(47): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 07:29:29 --- ERROR: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\profilertoolbar\classes\kohana\database\pdo.php [ 242 ]
2012-02-23 07:29:29 --- STRACE: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\profilertoolbar\classes\kohana\database\pdo.php [ 242 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_PDO->list_columns('ulogins')
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(Array)
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\ulogin\classes\kohana\ulogin.php(98): Kohana_ORM::factory('ulogin', Array)
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\ulogin.php(19): Kohana_Ulogin->login()
#7 [internal function]: Controller_Widget_Ulogin->action_index()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Ulogin))
#9 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(34): Widget::load('ulogin')
#14 [internal function]: Controller_Public->before()
#15 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_News))
#16 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#19 {main}
2012-02-23 07:32:21 --- ERROR: ErrorException [ 8 ]: Undefined index: identity ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 98 ]
2012-02-23 07:32:21 --- STRACE: ErrorException [ 8 ]: Undefined index: identity ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 98 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\ulogin\classes\kohana\ulogin.php(98): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 98, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\ulogin.php(19): Kohana_Ulogin->login()
#2 [internal function]: Controller_Widget_Ulogin->action_index()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Ulogin))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(34): Widget::load('ulogin')
#9 [internal function]: Controller_Public->before()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_News))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 07:32:33 --- ERROR: ErrorException [ 8 ]: Undefined index: identity ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 98 ]
2012-02-23 07:32:33 --- STRACE: ErrorException [ 8 ]: Undefined index: identity ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 98 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\ulogin\classes\kohana\ulogin.php(98): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 98, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\ulogin.php(19): Kohana_Ulogin->login()
#2 [internal function]: Controller_Widget_Ulogin->action_index()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Ulogin))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(34): Widget::load('ulogin')
#9 [internal function]: Controller_Public->before()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_News))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-23 07:33:28 --- ERROR: ErrorException [ 8 ]: Undefined index: identity ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 98 ]
2012-02-23 07:33:28 --- STRACE: ErrorException [ 8 ]: Undefined index: identity ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 98 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\ulogin\classes\kohana\ulogin.php(98): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 98, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\ulogin.php(19): Kohana_Ulogin->login()
#2 [internal function]: Controller_Widget_Ulogin->action_index()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Ulogin))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(34): Widget::load('ulogin')
#9 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(11): Controller_Public->before()
#10 [internal function]: Controller_Public_Pages->before()
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#15 {main}
2012-02-23 08:01:16 --- ERROR: ErrorException [ 8 ]: Undefined index: identity ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 98 ]
2012-02-23 08:01:16 --- STRACE: ErrorException [ 8 ]: Undefined index: identity ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 98 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\ulogin\classes\kohana\ulogin.php(98): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 98, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\ulogin.php(18): Kohana_Ulogin->login()
#2 [internal function]: Controller_Widget_Ulogin->action_index()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Ulogin))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(34): Widget::load('ulogin')
#9 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(11): Controller_Public->before()
#10 [internal function]: Controller_Public_Pages->before()
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#15 {main}
2012-02-23 08:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/register was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-23 08:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/register was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#3 {main}
2012-02-23 09:50:50 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH\classes\kohana\arr.php [ 277 ]
2012-02-23 09:50:50 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH\classes\kohana\arr.php [ 277 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\arr.php(277): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\Program File...', 277, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\calendar.php(14): Kohana_Arr::get(Array, Array, '02')
#2 [internal function]: Controller_Widget_Calendar->action_index()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Calendar))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(38): Widget::load('calendar')
#9 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(11): Controller_Public->before()
#10 [internal function]: Controller_Public_Pages->before()
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#15 {main}
2012-02-23 09:51:08 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH\classes\kohana\arr.php [ 277 ]
2012-02-23 09:51:08 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH\classes\kohana\arr.php [ 277 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\arr.php(277): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\Program File...', 277, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\calendar.php(14): Kohana_Arr::get(Array, Array, '02')
#2 [internal function]: Controller_Widget_Calendar->action_index()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Calendar))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(38): Widget::load('calendar')
#9 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(11): Controller_Public->before()
#10 [internal function]: Controller_Public_Pages->before()
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#15 {main}
2012-02-23 09:51:13 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH\classes\kohana\arr.php [ 277 ]
2012-02-23 09:51:13 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH\classes\kohana\arr.php [ 277 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\arr.php(277): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\Program File...', 277, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\calendar.php(14): Kohana_Arr::get(Array, Array, '02')
#2 [internal function]: Controller_Widget_Calendar->action_index()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Calendar))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(38): Widget::load('calendar')
#9 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(11): Controller_Public->before()
#10 [internal function]: Controller_Public_Pages->before()
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#15 {main}
2012-02-23 09:51:17 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH\classes\kohana\arr.php [ 277 ]
2012-02-23 09:51:17 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH\classes\kohana\arr.php [ 277 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\arr.php(277): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\Program File...', 277, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\calendar.php(14): Kohana_Arr::get(Array, Array, '02')
#2 [internal function]: Controller_Widget_Calendar->action_index()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Calendar))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(38): Widget::load('calendar')
#9 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(11): Controller_Public->before()
#10 [internal function]: Controller_Public_Pages->before()
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#15 {main}
2012-02-23 16:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/configs/general was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-23 16:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/configs/general was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#3 {main}
2012-02-23 16:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/configs/save/1 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-23 16:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/configs/save/1 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-23 16:58:48 --- ERROR: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_deleted' in 'where clause' [ SELECT module.* FROM modules AS module WHERE is_deleted = 0 AND type = 'module' ] ~ MODPATH\profilertoolbar\classes\kohana\database\pdo.php [ 158 ]
2012-02-23 16:58:48 --- STRACE: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_deleted' in 'where clause' [ SELECT module.* FROM modules AS module WHERE is_deleted = 0 AND type = 'module' ] ~ MODPATH\profilertoolbar\classes\kohana\database\pdo.php [ 158 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT module.*...', 'Model_Module', Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_PDO))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\kohana-pagination\classes\pagination.php(18): Kohana_ORM->find_all()
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin.php(125): Pagination->__construct(Object(Model_Module), 1, 'admin_list', Array, 5)
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\module.php(25): Controller_Admin->action_list()
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\modules.php(31): Controller_Admin_Module->action_list()
#7 [internal function]: Controller_Admin_Modules->action_list()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modules))
#9 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#12 {main}
2012-02-23 17:00:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: entities ~ APPPATH\views\admin\modules\list.php [ 18 ]
2012-02-23 17:00:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: entities ~ APPPATH\views\admin\modules\list.php [ 18 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin\modules\list.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 18, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin.php(74): Kohana_View->__toString()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(47): Kohana_Controller_Template->after()
#9 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\modules.php(14): Controller_Base->after()
#10 [internal function]: Controller_Admin_Modules->after()
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Modules))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#15 {main}
2012-02-23 17:21:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: entityType ~ APPPATH\views\admin\modules\list.php [ 23 ]
2012-02-23 17:21:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: entityType ~ APPPATH\views\admin\modules\list.php [ 23 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin\modules\list.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 23, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin.php(74): Kohana_View->__toString()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(47): Kohana_Controller_Template->after()
#9 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\modules.php(14): Controller_Base->after()
#10 [internal function]: Controller_Admin_Modules->after()
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Modules))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#15 {main}
2012-02-23 17:27:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: entityType ~ APPPATH\views\admin\modules\list.php [ 23 ]
2012-02-23 17:27:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: entityType ~ APPPATH\views\admin\modules\list.php [ 23 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin\modules\list.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 23, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin.php(74): Kohana_View->__toString()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(47): Kohana_Controller_Template->after()
#9 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\modules.php(14): Controller_Base->after()
#10 [internal function]: Controller_Admin_Modules->after()
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Modules))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#15 {main}
2012-02-23 17:27:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: entityType ~ APPPATH\views\admin\modules\list.php [ 23 ]
2012-02-23 17:27:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: entityType ~ APPPATH\views\admin\modules\list.php [ 23 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin\modules\list.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 23, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin.php(74): Kohana_View->__toString()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(47): Kohana_Controller_Template->after()
#9 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\modules.php(14): Controller_Base->after()
#10 [internal function]: Controller_Admin_Modules->after()
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Modules))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#15 {main}
2012-02-23 17:27:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: entityType ~ APPPATH\views\admin\modules\list.php [ 23 ]
2012-02-23 17:27:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: entityType ~ APPPATH\views\admin\modules\list.php [ 23 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin\modules\list.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 23, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin.php(74): Kohana_View->__toString()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(47): Kohana_Controller_Template->after()
#9 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\modules.php(14): Controller_Base->after()
#10 [internal function]: Controller_Admin_Modules->after()
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Modules))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#15 {main}
2012-02-23 17:35:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: entityType ~ APPPATH\views\admin\modules\edit.php [ 7 ]
2012-02-23 17:35:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: entityType ~ APPPATH\views\admin\modules\edit.php [ 7 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin\modules\edit.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 7, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin.php(74): Kohana_View->__toString()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(47): Kohana_Controller_Template->after()
#9 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\plugins.php(14): Controller_Base->after()
#10 [internal function]: Controller_Admin_Plugins->after()
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Plugins))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#15 {main}
2012-02-23 18:34:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:34:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:35:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:35:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:35:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:35:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:35:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:35:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:35:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:35:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:35:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:35:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:36:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:36:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:36:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:36:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:36:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:36:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:36:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:36:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:36:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:36:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:37:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:37:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:39:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:39:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:40:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:40:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:41:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:41:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:47:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:47:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:48:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:48:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:48:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:48:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 18:49:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 18:49:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:05:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:05:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:05:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:05:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:05:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:05:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:05:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:05:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:05:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:05:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:05:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:05:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:07:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:07:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:07:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:07:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:07:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:07:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:07:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:07:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:09:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:09:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:11:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:11:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:12:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:12:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:25:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:25:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:25:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:25:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:26:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:26:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:26:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:26:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:30:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:30:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:30:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:30:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(21): Controller_Public_Pages->checkPage(Object(Model_Page))
#1 [internal function]: Controller_Public_Pages->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-23 19:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Запрашиваемой страницы не существует ~ APPPATH\classes\controller\public\pages.php [ 43 ]
2012-02-23 19:51:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL news2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-23 19:52:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL news2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-23 19:52:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL news2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#3 {main}
2012-02-23 19:52:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL news2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-23 19:52:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL news2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#3 {main}
2012-02-23 19:56:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL giude was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-23 19:56:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL giude was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#3 {main}
2012-02-23 19:57:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL giude was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-23 19:57:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL giude was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#3 {main}
2012-02-23 19:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL giude/api was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-23 19:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL giude/api was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#3 {main}
2012-02-23 20:12:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\cheatsheet\classes\controller\cheatsheet.php [ 43 ]
2012-02-23 20:12:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\cheatsheet\classes\controller\cheatsheet.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-23 20:13:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL cs was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-23 20:13:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL cs was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#3 {main}
2012-02-23 22:56:42 --- ERROR: Cache_Exception [ 0 ]: Memcache PHP extention not loaded ~ MODPATH\profilertoolbar\classes\kohana\cache\memcache.php [ 120 ]
2012-02-23 22:56:42 --- STRACE: Cache_Exception [ 0 ]: Memcache PHP extention not loaded ~ MODPATH\profilertoolbar\classes\kohana\cache\memcache.php [ 120 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\cache\classes\kohana\cache.php(137): Kohana_Cache_Memcache->__construct(Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(24): Kohana_Cache::instance('memcache')
#2 [internal function]: Controller_Base->__construct(Object(Request), Object(Response))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#7 {main}
2012-02-23 23:38:42 --- ERROR: ErrorException [ 8 ]: unserialize() [function.unserialize]: Error at offset 0 of 1 bytes ~ APPPATH\classes\controller\public\pages.php [ 23 ]
2012-02-23 23:38:42 --- STRACE: ErrorException [ 8 ]: unserialize() [function.unserialize]: Error at offset 0 of 1 bytes ~ APPPATH\classes\controller\public\pages.php [ 23 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'unserialize() [...', 'C:\Program File...', 23, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(23): unserialize('4')
#2 [internal function]: Controller_Public_Pages->action_index()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#7 {main}