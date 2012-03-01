<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-29 00:39:55 --- ERROR: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\controller\admin.php [ 97 ]
2012-02-29 00:39:55 --- STRACE: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\controller\admin.php [ 97 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 01:16:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/s/subpage/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-29 01:16:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/s/subpage/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#3 {main}
2012-02-29 01:23:01 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM_Validation_Exception::__construct() must be an instance of Validation, none given, called in C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin\systempages.php on line 140 and defined ~ MODPATH\orm\classes\kohana\orm\validation\exception.php [ 34 ]
2012-02-29 01:23:01 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_ORM_Validation_Exception::__construct() must be an instance of Validation, none given, called in C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin\systempages.php on line 140 and defined ~ MODPATH\orm\classes\kohana\orm\validation\exception.php [ 34 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm\validation\exception.php(34): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 34, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin\systempages.php(140): Kohana_ORM_Validation_Exception->__construct('PIPEC')
#2 [internal function]: Controller_Admin_SystemPages->action_subpage()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_SystemPages))
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#7 {main}
2012-02-29 01:23:38 --- ERROR: Kohana_Exception [ 0 ]: PIPEC ~ APPPATH\classes\controller\admin\systempages.php [ 140 ]
2012-02-29 01:23:38 --- STRACE: Kohana_Exception [ 0 ]: PIPEC ~ APPPATH\classes\controller\admin\systempages.php [ 140 ]
--
#0 [internal function]: Controller_Admin_SystemPages->action_subpage()
#1 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_SystemPages))
#2 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#5 {main}
2012-02-29 01:30:07 --- ERROR: Kohana_Exception [ 0 ]: PIPEC ~ APPPATH\classes\controller\admin\systempages.php [ 140 ]
2012-02-29 01:30:07 --- STRACE: Kohana_Exception [ 0 ]: PIPEC ~ APPPATH\classes\controller\admin\systempages.php [ 140 ]
--
#0 [internal function]: Controller_Admin_SystemPages->action_subpage()
#1 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_SystemPages))
#2 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#5 {main}
2012-02-29 01:38:18 --- ERROR: ErrorException [ 1 ]: Call to a member function saved() on a non-object ~ APPPATH\classes\controller\admin\systempages.php [ 136 ]
2012-02-29 01:38:18 --- STRACE: ErrorException [ 1 ]: Call to a member function saved() on a non-object ~ APPPATH\classes\controller\admin\systempages.php [ 136 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 01:46:24 --- ERROR: ErrorException [ 1 ]: Call to a member function fulltree() on a non-object ~ APPPATH\classes\controller\admin\systempages.php [ 95 ]
2012-02-29 01:46:24 --- STRACE: ErrorException [ 1 ]: Call to a member function fulltree() on a non-object ~ APPPATH\classes\controller\admin\systempages.php [ 95 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 02:21:02 --- ERROR: Kohana_Exception [ 0 ]: The search_id property does not exist in the Model_SystemPage class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-02-29 02:21:02 --- STRACE: Kohana_Exception [ 0 ]: The search_id property does not exist in the Model_SystemPage class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('search_id', NULL)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin\systempages.php(101): Kohana_ORM->__set('search_id', NULL)
#2 [internal function]: Controller_Admin_SystemPages->action_list()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_SystemPages))
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#7 {main}
2012-02-29 02:26:33 --- ERROR: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH\views\admin\systempages\add.php [ 9 ]
2012-02-29 02:26:33 --- STRACE: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH\views\admin\systempages\add.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 22:07:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:07:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:07:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:07:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:08:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:08:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:08:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:08:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:08:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:08:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:51:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:51:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:51:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:51:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:51:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:51:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:51:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:51:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:52:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:52:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:55:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:55:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:58:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:58:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:58:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:58:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-29 22:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 22:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}