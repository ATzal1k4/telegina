<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-26 04:11:13 --- ERROR: Database_Exception [ 1045 ]: SQLSTATE[28000] [1045] Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\profilertoolbar\classes\kohana\database\pdo.php [ 59 ]
2012-02-26 04:11:13 --- STRACE: Database_Exception [ 1045 ]: SQLSTATE[28000] [1045] Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\profilertoolbar\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\profilertoolbar\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT menu.* F...', false, Array)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_PDO))
#3 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#4 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\widget\menu.php(25): Kohana_ORM->find()
#5 [internal function]: Controller_Widget_Menu->action_index()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Menu))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\widget.php(60): Kohana_Request->execute()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\widget.php(36): Widget->render()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\public.php(32): Widget::load('menu')
#12 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\public\pages.php(11): Controller_Public->before()
#13 [internal function]: Controller_Public_Pages->before()
#14 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#18 {main}
2012-02-26 04:13:33 --- ERROR: Database_Exception [ 1049 ]: SQLSTATE[42000] [1049] Unknown database 'wt1000450_2' ~ MODPATH\profilertoolbar\classes\kohana\database\pdo.php [ 59 ]
2012-02-26 04:13:33 --- STRACE: Database_Exception [ 1049 ]: SQLSTATE[42000] [1049] Unknown database 'wt1000450_2' ~ MODPATH\profilertoolbar\classes\kohana\database\pdo.php [ 59 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\profilertoolbar\classes\kohana\database\pdo.php(136): Kohana_Database_PDO->connect()
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_PDO->query(1, 'SELECT menu.* F...', false, Array)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_PDO))
#3 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#4 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\widget\menu.php(25): Kohana_ORM->find()
#5 [internal function]: Controller_Widget_Menu->action_index()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Menu))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\widget.php(60): Kohana_Request->execute()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\widget.php(36): Widget->render()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\public.php(32): Widget::load('menu')
#12 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\public\pages.php(11): Controller_Public->before()
#13 [internal function]: Controller_Public_Pages->before()
#14 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#18 {main}
2012-02-26 04:24:47 --- ERROR: ErrorException [ 8 ]: Undefined index: identity ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 101 ]
2012-02-26 04:24:47 --- STRACE: ErrorException [ 8 ]: Undefined index: identity ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 101 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\ulogin\classes\kohana\ulogin.php(101): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 101, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\widget\ulogin.php(18): Kohana_Ulogin->login()
#2 [internal function]: Controller_Widget_Ulogin->action_index()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Ulogin))
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\widget.php(60): Kohana_Request->execute()
#7 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\widget.php(36): Widget->render()
#8 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\public.php(38): Widget::load('ulogin')
#9 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\public\pages.php(11): Controller_Public->before()
#10 [internal function]: Controller_Public_Pages->before()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#12 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#15 {main}
2012-02-26 04:27:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photos/bg.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-26 04:27:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photos/bg.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-26 05:10:11 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-26 05:10:11 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\model\auth\user\token.php(56): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\auth\orm.php(100): Model_Auth_User_Token->create()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('atzal1k4', '7wdjkri5j', true)
#4 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin\auth.php(27): Kohana_Auth->login('atzal1k4', '7wdjkri5j', true)
#5 [internal function]: Controller_Admin_Auth->action_login()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#10 {main}
2012-02-26 05:24:57 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-26 05:24:57 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\model\auth\user\token.php(56): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\auth\orm.php(100): Model_Auth_User_Token->create()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('atzal1k4', '7wdjkri5j', true)
#4 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin\auth.php(27): Kohana_Auth->login('atzal1k4', '7wdjkri5j', true)
#5 [internal function]: Controller_Admin_Auth->action_login()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#10 {main}
2012-02-26 05:25:27 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-26 05:25:27 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\model\auth\user\token.php(56): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\auth\orm.php(100): Model_Auth_User_Token->create()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('atzal1k4', '7wdjkri5j', true)
#4 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin\auth.php(27): Kohana_Auth->login('atzal1k4', '7wdjkri5j', true)
#5 [internal function]: Controller_Admin_Auth->action_login()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#10 {main}
2012-02-26 05:37:14 --- ERROR: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\profilertoolbar\classes\kohana\database\pdo.php [ 242 ]
2012-02-26 05:37:14 --- STRACE: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH\profilertoolbar\classes\kohana\database\pdo.php [ 242 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_PDO->list_columns('user_tokens')
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#4 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\model\auth\user\token.php(22): Kohana_ORM->__construct(NULL)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(37): Model_Auth_User_Token->__construct(NULL)
#6 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\auth\orm.php(98): Kohana_ORM::factory('user_token')
#7 C:\xampp\htdocs\telegina.loc\www\public_html\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('atzal1k4', '7wdjkri5j', true)
#8 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin\auth.php(27): Kohana_Auth->login('atzal1k4', '7wdjkri5j', true)
#9 [internal function]: Controller_Admin_Auth->action_login()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#11 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-26 05:37:52 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2012-02-26 05:37:52 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\cookie.php(115): Kohana_Cookie::salt('authautologin', 'a96ecf13da19d5d...')
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\auth\orm.php(103): Kohana_Cookie::set('authautologin', 'a96ecf13da19d5d...', 1209600)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('atzal1k4', '7wdjkri5j', true)
#3 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin\auth.php(27): Kohana_Auth->login('atzal1k4', '7wdjkri5j', true)
#4 [internal function]: Controller_Admin_Auth->action_login()
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-26 17:34:26 --- ERROR: ErrorException [ 1 ]: Class 'Cache_Xcache' not found ~ MODPATH\cache\classes\kohana\cache.php [ 137 ]
2012-02-26 17:34:26 --- STRACE: ErrorException [ 1 ]: Class 'Cache_Xcache' not found ~ MODPATH\cache\classes\kohana\cache.php [ 137 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-26 17:34:31 --- ERROR: ErrorException [ 1 ]: Class 'Cache_Xcache' not found ~ MODPATH\cache\classes\kohana\cache.php [ 137 ]
2012-02-26 17:34:31 --- STRACE: ErrorException [ 1 ]: Class 'Cache_Xcache' not found ~ MODPATH\cache\classes\kohana\cache.php [ 137 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-26 17:34:33 --- ERROR: ErrorException [ 1 ]: Class 'Cache_Xcache' not found ~ MODPATH\cache\classes\kohana\cache.php [ 137 ]
2012-02-26 17:34:33 --- STRACE: ErrorException [ 1 ]: Class 'Cache_Xcache' not found ~ MODPATH\cache\classes\kohana\cache.php [ 137 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-26 17:34:36 --- ERROR: ErrorException [ 1 ]: Class 'Cache_Xcache' not found ~ MODPATH\cache\classes\kohana\cache.php [ 137 ]
2012-02-26 17:34:36 --- STRACE: ErrorException [ 1 ]: Class 'Cache_Xcache' not found ~ MODPATH\cache\classes\kohana\cache.php [ 137 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-26 17:34:55 --- ERROR: ErrorException [ 1 ]: Class 'Cache_Eaccelerator' not found ~ MODPATH\cache\classes\kohana\cache.php [ 137 ]
2012-02-26 17:34:55 --- STRACE: ErrorException [ 1 ]: Class 'Cache_Eaccelerator' not found ~ MODPATH\cache\classes\kohana\cache.php [ 137 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-26 20:47:25 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to WidgetManager::registerWidget() must be an instance of View, none given, called in C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php on line 198 and defined ~ MODPATH\widgetmanager\classes\widgetmanager.php [ 48 ]
2012-02-26 20:47:25 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to WidgetManager::registerWidget() must be an instance of View, none given, called in C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php on line 198 and defined ~ MODPATH\widgetmanager\classes\widgetmanager.php [ 48 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\widgetmanager\classes\widgetmanager.php(48): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 48, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(198): WidgetManager->registerWidget(Object(Widget))
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\public.php(14): Controller_Base->before()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\public\pages.php(11): Controller_Public->before()
#4 [internal function]: Controller_Public_Pages->before()
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-26 20:54:48 --- ERROR: ErrorException [ 2 ]: Illegal offset type in unset ~ MODPATH\widgetmanager\classes\widgetmanager.php [ 62 ]
2012-02-26 20:54:48 --- STRACE: ErrorException [ 2 ]: Illegal offset type in unset ~ MODPATH\widgetmanager\classes\widgetmanager.php [ 62 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\widgetmanager\classes\widgetmanager.php(62): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\xampp\htdocs...', 62, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(199): WidgetManager->removeWidget(Object(Widget), Object(View))
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\public.php(14): Controller_Base->before()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\public\pages.php(11): Controller_Public->before()
#4 [internal function]: Controller_Public_Pages->before()
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-26 21:26:16 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\errormanager\classes\errormanager.php [ 98 ]
2012-02-26 21:26:16 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\errormanager\classes\errormanager.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-26 21:27:34 --- ERROR: Memcache PHP extention not loaded
2012-02-26 21:27:34 --- ERROR: Memcache PHP extention not loaded
2012-02-26 21:27:34 --- ERROR: PHP APC extension is not available.
2012-02-26 21:27:34 --- ERROR: PHP wincache extension is not available.
2012-02-26 21:28:31 --- ERROR: Memcache PHP extention not loaded
2012-02-26 21:28:31 --- ERROR: Memcache PHP extention not loaded
2012-02-26 21:28:31 --- ERROR: PHP APC extension is not available.
2012-02-26 21:28:31 --- ERROR: PHP wincache extension is not available.
2012-02-26 21:43:19 --- ERROR: Memcache PHP extention not loaded
2012-02-26 21:43:19 --- ERROR: Memcache PHP extention not loaded
2012-02-26 21:43:19 --- ERROR: PHP APC extension is not available.
2012-02-26 21:43:19 --- ERROR: PHP wincache extension is not available.
2012-02-26 21:43:22 --- ERROR: Memcache PHP extention not loaded
2012-02-26 21:43:22 --- ERROR: Memcache PHP extention not loaded
2012-02-26 21:43:22 --- ERROR: PHP APC extension is not available.
2012-02-26 21:43:22 --- ERROR: PHP wincache extension is not available.
2012-02-26 21:51:32 --- ERROR: Memcache PHP extention not loaded
2012-02-26 21:51:32 --- ERROR: Memcache PHP extention not loaded
2012-02-26 21:51:32 --- ERROR: PHP APC extension is not available.
2012-02-26 21:51:32 --- ERROR: PHP wincache extension is not available.
2012-02-26 21:52:01 --- ERROR: Memcache PHP extention not loaded
2012-02-26 21:52:01 --- ERROR: Memcache PHP extention not loaded
2012-02-26 21:52:01 --- ERROR: PHP APC extension is not available.
2012-02-26 21:52:01 --- ERROR: PHP wincache extension is not available.
2012-02-26 21:53:35 --- ERROR: Memcache PHP extention not loaded
2012-02-26 21:53:35 --- ERROR: Memcache PHP extention not loaded
2012-02-26 21:53:35 --- ERROR: PHP APC extension is not available.
2012-02-26 21:53:35 --- ERROR: PHP wincache extension is not available.
2012-02-26 21:57:44 --- ERROR: Memcache PHP extention not loaded
2012-02-26 21:57:44 --- ERROR: Memcache PHP extention not loaded
2012-02-26 21:57:44 --- ERROR: PHP APC extension is not available.
2012-02-26 21:57:44 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:10:29 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:10:29 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:10:29 --- ERROR: PHP APC extension is not available.
2012-02-26 22:10:29 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:10:31 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:10:31 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:10:31 --- ERROR: PHP APC extension is not available.
2012-02-26 22:10:31 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:10:33 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:10:33 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:10:33 --- ERROR: PHP APC extension is not available.
2012-02-26 22:10:33 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:10:35 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:10:35 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:10:35 --- ERROR: PHP APC extension is not available.
2012-02-26 22:10:35 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:10:38 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:10:38 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:10:38 --- ERROR: PHP APC extension is not available.
2012-02-26 22:10:38 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:23:18 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:23:18 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:23:18 --- ERROR: PHP APC extension is not available.
2012-02-26 22:23:18 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:23:27 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:23:27 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:23:27 --- ERROR: PHP APC extension is not available.
2012-02-26 22:23:27 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:23:33 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:23:33 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:23:33 --- ERROR: PHP APC extension is not available.
2012-02-26 22:23:33 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:23:37 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:23:37 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:23:37 --- ERROR: PHP APC extension is not available.
2012-02-26 22:23:37 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:23:39 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:23:39 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:23:39 --- ERROR: PHP APC extension is not available.
2012-02-26 22:23:39 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:23:40 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:23:40 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:23:40 --- ERROR: PHP APC extension is not available.
2012-02-26 22:23:40 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:23:59 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:23:59 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:23:59 --- ERROR: PHP APC extension is not available.
2012-02-26 22:23:59 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:24:13 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:24:13 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:24:13 --- ERROR: PHP APC extension is not available.
2012-02-26 22:24:13 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:24:37 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:24:37 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:24:37 --- ERROR: PHP APC extension is not available.
2012-02-26 22:24:37 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:24:39 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:24:39 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:24:39 --- ERROR: PHP APC extension is not available.
2012-02-26 22:24:39 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:24:41 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:24:41 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:24:41 --- ERROR: PHP APC extension is not available.
2012-02-26 22:24:41 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:24:44 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:24:44 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:24:44 --- ERROR: PHP APC extension is not available.
2012-02-26 22:24:44 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:24:50 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:24:50 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:24:50 --- ERROR: PHP APC extension is not available.
2012-02-26 22:24:50 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:24:51 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:24:51 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:24:51 --- ERROR: PHP APC extension is not available.
2012-02-26 22:24:51 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:24:57 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:24:57 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:24:57 --- ERROR: PHP APC extension is not available.
2012-02-26 22:24:57 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:01 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:01 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:01 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:01 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:08 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:08 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:08 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:08 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:09 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:09 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:09 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:09 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:10 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:10 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:10 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:10 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:11 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:11 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:11 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:11 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:13 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:13 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:13 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:13 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:15 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:15 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:15 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:15 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:16 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:16 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:16 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:16 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:17 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:17 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:17 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:17 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:19 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:19 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:19 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:19 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:20 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:20 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:20 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:20 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:21 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:21 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:21 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:21 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:22 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:22 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:22 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:22 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:23 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:23 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:23 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:23 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:24 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:24 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:24 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:24 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:25 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:25 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:25 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:25 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:26 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:26 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:26 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:26 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:34 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:34 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:34 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:34 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:36 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:36 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:36 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:36 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:38 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:38 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:38 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:38 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:25:44 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:44 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:25:44 --- ERROR: PHP APC extension is not available.
2012-02-26 22:25:44 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:39:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: cacheManager ~ MODPATH\cachemanager\classes\cachemanager.php [ 18 ]
2012-02-26 22:39:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: cacheManager ~ MODPATH\cachemanager\classes\cachemanager.php [ 18 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\cachemanager\classes\cachemanager.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 18, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\cachemanager\classes\cachemanager.php(54): CacheManager->setCacheManager(Object(Cache_Sqlite))
#2 C:\xampp\htdocs\telegina.loc\www\public_html\modules\cachemanager\classes\cachemanager.php(28): CacheManager->initCacheManager()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(25): CacheManager::getInstance()
#4 [internal function]: Controller_Base->__construct(Object(Request), Object(Response))
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-26 22:41:20 --- ERROR: ErrorException [ 2048 ]: Accessing static property CacheManager::$cacheManager as non static ~ MODPATH\cachemanager\classes\cachemanager.php [ 18 ]
2012-02-26 22:41:20 --- STRACE: ErrorException [ 2048 ]: Accessing static property CacheManager::$cacheManager as non static ~ MODPATH\cachemanager\classes\cachemanager.php [ 18 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\cachemanager\classes\cachemanager.php(18): Kohana_Core::error_handler(2048, 'Accessing stati...', 'C:\xampp\htdocs...', 18, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\cachemanager\classes\cachemanager.php(54): CacheManager->setCacheManager(Object(Cache_Sqlite))
#2 C:\xampp\htdocs\telegina.loc\www\public_html\modules\cachemanager\classes\cachemanager.php(28): CacheManager->initCacheManager()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(25): CacheManager::getInstance()
#4 [internal function]: Controller_Base->__construct(Object(Request), Object(Response))
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-26 22:41:41 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:41:41 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:41:41 --- ERROR: PHP APC extension is not available.
2012-02-26 22:41:41 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:41:48 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:41:48 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:41:48 --- ERROR: PHP APC extension is not available.
2012-02-26 22:41:48 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:41:52 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:41:52 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:41:52 --- ERROR: PHP APC extension is not available.
2012-02-26 22:41:52 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:41:53 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:41:53 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:41:53 --- ERROR: PHP APC extension is not available.
2012-02-26 22:41:53 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:41:54 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:41:54 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:41:54 --- ERROR: PHP APC extension is not available.
2012-02-26 22:41:54 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:41:56 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:41:56 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:41:56 --- ERROR: PHP APC extension is not available.
2012-02-26 22:41:56 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:41:57 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:41:57 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:41:57 --- ERROR: PHP APC extension is not available.
2012-02-26 22:41:57 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:46:17 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:46:17 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:46:17 --- ERROR: PHP APC extension is not available.
2012-02-26 22:46:17 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:46:24 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:46:24 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:46:24 --- ERROR: PHP APC extension is not available.
2012-02-26 22:46:24 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:46:30 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:46:30 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:46:30 --- ERROR: PHP APC extension is not available.
2012-02-26 22:46:30 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:46:33 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:46:33 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:46:33 --- ERROR: PHP APC extension is not available.
2012-02-26 22:46:33 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:46:36 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:46:36 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:46:36 --- ERROR: PHP APC extension is not available.
2012-02-26 22:46:36 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:46:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photos/bg.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-26 22:46:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photos/bg.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-26 22:46:44 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:46:44 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:46:44 --- ERROR: PHP APC extension is not available.
2012-02-26 22:46:44 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:46:49 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:46:49 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:46:49 --- ERROR: PHP APC extension is not available.
2012-02-26 22:46:49 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:46:54 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:46:54 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:46:54 --- ERROR: PHP APC extension is not available.
2012-02-26 22:46:54 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:47:41 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:47:41 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:47:41 --- ERROR: PHP APC extension is not available.
2012-02-26 22:47:41 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:47:44 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:47:44 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:47:44 --- ERROR: PHP APC extension is not available.
2012-02-26 22:47:44 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:47:46 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:47:46 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:47:46 --- ERROR: PHP APC extension is not available.
2012-02-26 22:47:46 --- ERROR: PHP wincache extension is not available.
2012-02-26 22:47:47 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:47:47 --- ERROR: Memcache PHP extention not loaded
2012-02-26 22:47:47 --- ERROR: PHP APC extension is not available.
2012-02-26 22:47:47 --- ERROR: PHP wincache extension is not available.