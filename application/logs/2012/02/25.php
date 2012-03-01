<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-25 00:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/addchild/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 00:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/addchild/6 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 00:22:19 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Menuitem class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-02-25 00:22:19 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Menuitem class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin\menuitems\addchild.php(8): Kohana_ORM->__get('title')
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin.php(74): Kohana_View->__toString()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(117): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Menuitems))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-25 00:22:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\admin\menuitems\addchild.php [ 22 ]
2012-02-25 00:22:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\admin\menuitems\addchild.php [ 22 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin\menuitems\addchild.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 22, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin.php(74): Kohana_View->__toString()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(117): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Menuitems))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-25 00:28:48 --- ERROR: Kohana_Exception [ 0 ]: The children property does not exist in the Model_Menuitem class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-02-25 00:28:48 --- STRACE: Kohana_Exception [ 0 ]: The children property does not exist in the Model_Menuitem class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin\menuitems\list.php(58): Kohana_ORM->__get('children')
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin.php(74): Kohana_View->__toString()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(117): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Menuitems))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-25 00:34:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Menuitem::count() ~ APPPATH\views\admin\menuitems\list.php [ 58 ]
2012-02-25 00:34:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Menuitem::count() ~ APPPATH\views\admin\menuitems\list.php [ 58 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-25 01:04:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:04:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:04:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:04:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:06:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:06:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:07:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:07:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:07:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:07:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:08:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:08:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:08:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:08:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:08:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:08:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:08:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:08:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:08:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:08:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:08:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:08:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:08:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:08:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:08:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:08:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:09:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:09:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:12:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:12:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:13:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:13:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:13:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:13:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:13:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:13:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:13:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:13:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:13:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:14:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:14:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:14:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:14:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:14:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:14:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:16:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:16:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:17:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:17:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ](x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:17:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:17:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:17:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:19:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:19:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:19:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:19:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:19:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:19:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:19:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:19:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:19:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:19:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:19:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/125px-Flag_of_the_United_States.svg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/header_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/menuitems/list/row_bkg.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 01:50:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photos/bg.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-25 01:50:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photos/bg.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-25 03:34:16 --- ERROR: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\classes\controller\ajax\votes.php [ 13 ]
2012-02-25 03:34:16 --- ERROR: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\classes\controller\ajax\votes.php [ 13 ]
2012-02-25 03:34:16 --- STRACE: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\classes\controller\ajax\votes.php [ 13 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\ajax\votes.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 13, Array)
#1 [internal function]: Controller_Ajax_Votes->action_add()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax_Votes))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-25 03:34:16 --- STRACE: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\classes\controller\ajax\votes.php [ 13 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\ajax\votes.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 13, Array)
#1 [internal function]: Controller_Ajax_Votes->action_add()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax_Votes))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-25 03:34:47 --- ERROR: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\classes\controller\ajax\votes.php [ 13 ]
2012-02-25 03:34:47 --- ERROR: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\classes\controller\ajax\votes.php [ 13 ]]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\ajax\votes.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 13, Array)
#1 [internal function]: Controller_Ajax_Votes->action_add()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax_Votes))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-25 03:34:47 --- STRACE: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\classes\controller\ajax\votes.php [ 13 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\ajax\votes.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 13, Array)
#1 [internal function]: Controller_Ajax_Votes->action_add()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax_Votes))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-25 03:35:26 --- ERROR: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\classes\controller\ajax\votes.php [ 13 ]
2012-02-25 03:35:26 --- STRACE: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\classes\controller\ajax\votes.php [ 13 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\ajax\votes.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 13, Array)
#1 [internal function]: Controller_Ajax_Votes->action_add()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax_Votes))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-25 03:35:26 --- ERROR: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\classes\controller\ajax\votes.php [ 13 ]
2012-02-25 03:35:26 --- STRACE: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\classes\controller\ajax\votes.php [ 13 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\ajax\votes.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 13, Array)
#1 [internal function]: Controller_Ajax_Votes->action_add()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax_Votes))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-25 03:36:57 --- ERROR: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\classes\controller\ajax\votes.php [ 13 ]
2012-02-25 03:36:57 --- ERROR: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\classes\controller\ajax\votes.php [ 13 ]
2012-02-25 03:36:57 --- STRACE: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\classes\controller\ajax\votes.php [ 13 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\ajax\votes.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 13, Array)
#1 [internal function]: Controller_Ajax_Votes->action_add()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax_Votes))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-25 03:36:57 --- STRACE: ErrorException [ 8 ]: Undefined index: item ~ APPPATH\classes\controller\ajax\votes.php [ 13 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\ajax\votes.php(13): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Program File...', 13, Array)
#1 [internal function]: Controller_Ajax_Votes->action_add()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax_Votes))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-25 04:26:10 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-25 04:26:10 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\entity.php(85): Kohana_ORM->save()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(116): Entity::moveUP(Object(Model_Voteitem), Array)
#4 [internal function]: Controller_Admin_Voteitems->action_up()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 04:28:31 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-25 04:28:31 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\entity.php(120): Kohana_ORM->save()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(103): Entity::moveDOWN(Object(Model_Voteitem), Array)
#4 [internal function]: Controller_Admin_Voteitems->action_down()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 04:28:57 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-25 04:28:57 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\entity.php(120): Kohana_ORM->save()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(103): Entity::moveDOWN(Object(Model_Voteitem), Array)
#4 [internal function]: Controller_Admin_Voteitems->action_down()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 04:29:59 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-25 04:29:59 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\entity.php(120): Kohana_ORM->save()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(103): Entity::moveDOWN(Object(Model_Voteitem), Array)
#4 [internal function]: Controller_Admin_Voteitems->action_down()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 04:30:00 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-25 04:30:00 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\entity.php(120): Kohana_ORM->save()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(103): Entity::moveDOWN(Object(Model_Voteitem), Array)
#4 [internal function]: Controller_Admin_Voteitems->action_down()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 04:30:12 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-25 04:30:12 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\entity.php(120): Kohana_ORM->save()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(103): Entity::moveDOWN(Object(Model_Voteitem), Array)
#4 [internal function]: Controller_Admin_Voteitems->action_down()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 04:30:13 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-25 04:30:13 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\entity.php(120): Kohana_ORM->save()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(103): Entity::moveDOWN(Object(Model_Voteitem), Array)
#4 [internal function]: Controller_Admin_Voteitems->action_down()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 04:30:14 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-25 04:30:14 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\entity.php(120): Kohana_ORM->save()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(103): Entity::moveDOWN(Object(Model_Voteitem), Array)
#4 [internal function]: Controller_Admin_Voteitems->action_down()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 04:30:14 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-25 04:30:14 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\entity.php(120): Kohana_ORM->save()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(103): Entity::moveDOWN(Object(Model_Voteitem), Array)
#4 [internal function]: Controller_Admin_Voteitems->action_down()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 04:33:03 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-25 04:33:03 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\entity.php(120): Kohana_ORM->save()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(103): Entity::moveDOWN(Object(Model_Voteitem), Array)
#4 [internal function]: Controller_Admin_Voteitems->action_down()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 04:33:04 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-25 04:33:04 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\entity.php(120): Kohana_ORM->save()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(103): Entity::moveDOWN(Object(Model_Voteitem), Array)
#4 [internal function]: Controller_Admin_Voteitems->action_down()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 04:33:05 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-25 04:33:05 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\entity.php(120): Kohana_ORM->save()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(103): Entity::moveDOWN(Object(Model_Voteitem), Array)
#4 [internal function]: Controller_Admin_Voteitems->action_down()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 04:33:07 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-25 04:33:07 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\entity.php(120): Kohana_ORM->save()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(103): Entity::moveDOWN(Object(Model_Voteitem), Array)
#4 [internal function]: Controller_Admin_Voteitems->action_down()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 04:33:08 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-25 04:33:08 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\entity.php(120): Kohana_ORM->save()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(103): Entity::moveDOWN(Object(Model_Voteitem), Array)
#4 [internal function]: Controller_Admin_Voteitems->action_down()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 04:53:02 --- ERROR: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 106 ]
2012-02-25 04:53:02 --- STRACE: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 106 ]
--
#0 [internal function]: Controller_Admin_Voteitems->action_down()
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#5 {main}
2012-02-25 05:22:10 --- ERROR: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 106 ]
2012-02-25 05:22:10 --- STRACE: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 106 ]
--
#0 [internal function]: Controller_Admin_Voteitems->action_down()
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#5 {main}
2012-02-25 05:22:12 --- ERROR: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 106 ]
2012-02-25 05:22:12 --- STRACE: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 106 ]
--
#0 [internal function]: Controller_Admin_Voteitems->action_down()
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#5 {main}
2012-02-25 05:22:15 --- ERROR: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 106 ]
2012-02-25 05:22:15 --- STRACE: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 106 ]
--
#0 [internal function]: Controller_Admin_Voteitems->action_down()
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#5 {main}
2012-02-25 06:03:38 --- ERROR: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 106 ]
2012-02-25 06:03:38 --- STRACE: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 106 ]
--
#0 [internal function]: Controller_Admin_Voteitems->action_down()
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#5 {main}
2012-02-25 06:07:33 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:07:33 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-25 06:08:19 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:08:19 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-25 06:08:21 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:08:21 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-25 06:08:22 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:08:22 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-25 06:08:22 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:08:22 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-25 06:08:23 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:08:23 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-25 06:08:24 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:08:24 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-25 06:08:25 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:08:25 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-25 06:08:25 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:08:25 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-25 06:08:26 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:08:26 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-25 06:08:27 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:08:27 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-25 06:08:28 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:08:28 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-25 06:08:42 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:08:42 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: ErrorManager::$_instance ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-25 06:08:53 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ErrorManager - assumed 'ErrorManager' ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:08:53 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ErrorManager - assumed 'ErrorManager' ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\errormanager\classes\errormanager.php(21): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\Program File...', 21, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(21): ErrorManager::getInstance()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin.php(178): Controller_Base->__construct(Object(Request), Object(Response))
#3 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#8 {main}
2012-02-25 06:10:57 --- ERROR: ErrorException [ 2048 ]: Non-static method ErrorManager::notify() should not be called statically ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:10:57 --- STRACE: ErrorException [ 2048 ]: Non-static method ErrorManager::notify() should not be called statically ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\Program File...', 21, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\errormanager\classes\errormanager.php(21): register_shutdown_function('ErrorManager::n...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(21): ErrorManager::getInstance()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin.php(178): Controller_Base->__construct(Object(Request), Object(Response))
#4 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 06:12:57 --- ERROR: ErrorException [ 2048 ]: Non-static method ErrorManager::notify() should not be called statically ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:12:57 --- STRACE: ErrorException [ 2048 ]: Non-static method ErrorManager::notify() should not be called statically ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\Program File...', 21, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\errormanager\classes\errormanager.php(21): register_shutdown_function('ErrorManager::n...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(21): ErrorManager::getInstance()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin.php(178): Controller_Base->__construct(Object(Request), Object(Response))
#4 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 06:12:58 --- ERROR: ErrorException [ 2048 ]: Non-static method ErrorManager::notify() should not be called statically ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
2012-02-25 06:12:58 --- STRACE: ErrorException [ 2048 ]: Non-static method ErrorManager::notify() should not be called statically ~ MODPATH\errormanager\classes\errormanager.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\Program File...', 21, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\errormanager\classes\errormanager.php(21): register_shutdown_function('ErrorManager::n...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(21): ErrorManager::getInstance()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin.php(178): Controller_Base->__construct(Object(Request), Object(Response))
#4 [internal function]: Controller_Admin->__construct(Object(Request), Object(Response))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(101): ReflectionClass->newInstance(Object(Request), Object(Response))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 06:14:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/configs/general was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-25 06:14:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/configs/general was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#3 {main}
2012-02-25 06:16:01 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-02-25 06:16:01 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->update(NULL)
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\entity.php(85): Kohana_ORM->save()
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(116): Entity::moveUP(Object(Model_Voteitem), Array)
#4 [internal function]: Controller_Admin_Voteitems->action_up()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-25 06:16:32 --- ERROR: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 106 ]
2012-02-25 06:16:32 --- STRACE: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 106 ]
--
#0 [internal function]: Controller_Admin_Voteitems->action_down()
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#5 {main}
2012-02-25 06:22:11 --- ERROR: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 119 ]
2012-02-25 06:22:11 --- STRACE: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 119 ]
--
#0 [internal function]: Controller_Admin_Voteitems->action_up()
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#5 {main}
2012-02-25 06:23:43 --- ERROR: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 119 ]
2012-02-25 06:23:43 --- STRACE: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 119 ]
--
#0 [internal function]: Controller_Admin_Voteitems->action_up()
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#5 {main}
2012-02-25 06:25:42 --- ERROR: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 114 ]
2012-02-25 06:25:42 --- STRACE: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 114 ]
--
#0 [internal function]: Controller_Admin_Voteitems->action_up()
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#5 {main}
2012-02-25 06:25:44 --- ERROR: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 114 ]
2012-02-25 06:25:44 --- STRACE: Exception [ 0 ]: Операция не удалась ~ APPPATH\classes\controller\admin\voteitems.php [ 114 ]
--
#0 [internal function]: Controller_Admin_Voteitems->action_up()
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#5 {main}
2012-02-25 06:46:55 --- ERROR: Kohana_Exception [ 0 ]: Can not move entity voteitem ~ APPPATH\classes\controller\admin\voteitems.php [ 119 ]
2012-02-25 06:46:55 --- STRACE: Kohana_Exception [ 0 ]: Can not move entity voteitem ~ APPPATH\classes\controller\admin\voteitems.php [ 119 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(103): Controller_Admin_Voteitems->move(5)
#1 [internal function]: Controller_Admin_Voteitems->action_up()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-25 06:48:03 --- ERROR: Kohana_Exception [ 0 ]: Can not move entity voteitem ~ APPPATH\classes\controller\admin\voteitems.php [ 119 ]
2012-02-25 06:48:03 --- STRACE: Kohana_Exception [ 0 ]: Can not move entity voteitem ~ APPPATH\classes\controller\admin\voteitems.php [ 119 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(103): Controller_Admin_Voteitems->move(5)
#1 [internal function]: Controller_Admin_Voteitems->action_up()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-25 06:48:22 --- ERROR: Kohana_Exception [ 0 ]: Object can not moved ~ APPPATH\classes\controller\admin\voteitems.php [ 123 ]
2012-02-25 06:48:22 --- STRACE: Kohana_Exception [ 0 ]: Object can not moved ~ APPPATH\classes\controller\admin\voteitems.php [ 123 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\admin\voteitems.php(102): Controller_Admin_Voteitems->move(0)
#1 [internal function]: Controller_Admin_Voteitems->action_up()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Voteitems))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#6 {main}
2012-02-25 06:54:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: vote ~ APPPATH\views\admin\votes\edit.php [ 7 ]
2012-02-25 06:54:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: vote ~ APPPATH\views\admin\votes\edit.php [ 7 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin\votes\edit.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Program File...', 7, Array)
#1 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\application\views\admin.php(74): Kohana_View->__toString()
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(61): include('C:\Program File...')
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Program File...', Array)
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\base.php(140): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Votes))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-25 07:10:24 --- ERROR: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 119 ]
2012-02-25 07:10:24 --- STRACE: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 119 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\ulogin.php(18): Kohana_Ulogin->login()
#1 [internal function]: Controller_Widget_Ulogin->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Ulogin))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(37): Widget::load('ulogin')
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(11): Controller_Public->before()
#9 [internal function]: Controller_Public_Pages->before()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-25 07:11:17 --- ERROR: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 119 ]
2012-02-25 07:11:17 --- STRACE: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 119 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\ulogin.php(18): Kohana_Ulogin->login()
#1 [internal function]: Controller_Widget_Ulogin->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Ulogin))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(37): Widget::load('ulogin')
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(11): Controller_Public->before()
#9 [internal function]: Controller_Public_Pages->before()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-25 07:12:22 --- ERROR: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 119 ]
2012-02-25 07:12:22 --- STRACE: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 119 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\ulogin.php(18): Kohana_Ulogin->login()
#1 [internal function]: Controller_Widget_Ulogin->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Ulogin))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(37): Widget::load('ulogin')
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(11): Controller_Public->before()
#9 [internal function]: Controller_Public_Pages->before()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-25 07:16:43 --- ERROR: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 121 ]
2012-02-25 07:16:43 --- STRACE: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 121 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\ulogin.php(18): Kohana_Ulogin->login()
#1 [internal function]: Controller_Widget_Ulogin->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Ulogin))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(37): Widget::load('ulogin')
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(11): Controller_Public->before()
#9 [internal function]: Controller_Public_Pages->before()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-25 07:18:25 --- ERROR: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 119 ]
2012-02-25 07:18:25 --- STRACE: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 119 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\ulogin.php(18): Kohana_Ulogin->login()
#1 [internal function]: Controller_Widget_Ulogin->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Ulogin))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(37): Widget::load('ulogin')
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\albums.php(10): Controller_Public->before()
#9 [internal function]: Controller_Public_Albums->before()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Albums))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-25 07:21:42 --- ERROR: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 120 ]
2012-02-25 07:21:42 --- STRACE: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 120 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\ulogin.php(18): Kohana_Ulogin->login()
#1 [internal function]: Controller_Widget_Ulogin->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Ulogin))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(37): Widget::load('ulogin')
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\albums.php(10): Controller_Public->before()
#9 [internal function]: Controller_Public_Albums->before()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Albums))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-25 07:27:43 --- ERROR: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 120 ]
2012-02-25 07:27:43 --- STRACE: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 120 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\ulogin.php(18): Kohana_Ulogin->login()
#1 [internal function]: Controller_Widget_Ulogin->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Ulogin))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(37): Widget::load('ulogin')
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\albums.php(10): Controller_Public->before()
#9 [internal function]: Controller_Public_Albums->before()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Albums))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}
2012-02-25 08:03:35 --- ERROR: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 120 ]
2012-02-25 08:03:35 --- STRACE: Kohana_Exception [ 0 ]: Username fields not set in config/ulogin.php ~ MODPATH\ulogin\classes\kohana\ulogin.php [ 120 ]
--
#0 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\widget\ulogin.php(18): Kohana_Ulogin->login()
#1 [internal function]: Controller_Widget_Ulogin->action_index()
#2 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Widget_Ulogin))
#3 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(60): Kohana_Request->execute()
#6 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\widget.php(36): Widget->render()
#7 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public.php(37): Widget::load('ulogin')
#8 C:\Program Files (x86)\Zend\Apache2\htdocs\application\classes\controller\public\pages.php(11): Controller_Public->before()
#9 [internal function]: Controller_Public_Pages->before()
#10 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Pages))
#11 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\Program Files (x86)\Zend\Apache2\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\Program Files (x86)\Zend\Apache2\htdocs\index.php(111): Kohana_Request->execute()
#14 {main}