<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-28 05:44:15 --- ERROR: ErrorException [ 8192 ]: Function eregi() is deprecated ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
2012-02-28 05:44:15 --- STRACE: ErrorException [ 8192 ]: Function eregi() is deprecated ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
--
#0 [internal function]: Kohana_Core::error_handler(8192, 'Function eregi(...', 'C:\xampp\htdocs...', 497, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\userinfo\classes\user\info.php(497): eregi()
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\test\userinfo.php(17): User_Info->os()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\public.php(49): Kohana_View->__toString()
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(186): Kohana_Controller_Template->after()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\module.php(53): Controller_Base->after()
#12 [internal function]: Module->after()
#13 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\system.php(70): ReflectionMethod->invoke(Object(Module_Pages))
#14 [internal function]: Controller_System->action_index()
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_System))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#19 {main}
2012-02-28 05:51:47 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Delimiter must not be alphanumeric or backslash ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
2012-02-28 05:51:47 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Delimiter must not be alphanumeric or backslash ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 497, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\userinfo\classes\user\info.php(497): preg_match('amiga', 'mozilla/5.0 (wi...')
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\test\userinfo.php(17): User_Info->os()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\public.php(49): Kohana_View->__toString()
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(186): Kohana_Controller_Template->after()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\module.php(53): Controller_Base->after()
#12 [internal function]: Module->after()
#13 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\system.php(70): ReflectionMethod->invoke(Object(Module_Pages))
#14 [internal function]: Controller_System->action_index()
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_System))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#19 {main}
2012-02-28 05:52:21 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Delimiter must not be alphanumeric or backslash ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
2012-02-28 05:52:21 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Delimiter must not be alphanumeric or backslash ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 497, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\userinfo\classes\user\info.php(497): preg_match('amiga', 'mozilla/5.0 (wi...')
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\test\userinfo.php(17): User_Info->os()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\public.php(49): Kohana_View->__toString()
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(186): Kohana_Controller_Template->after()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\module.php(53): Controller_Base->after()
#12 [internal function]: Module->after()
#13 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\system.php(70): ReflectionMethod->invoke(Object(Module_Pages))
#14 [internal function]: Controller_System->action_index()
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_System))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#19 {main}
2012-02-28 05:55:49 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
2012-02-28 05:55:49 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 497, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\userinfo\classes\user\info.php(497): preg_match('/os/2/i', 'mozilla/5.0 (wi...')
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\test\userinfo.php(17): User_Info->os()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\public.php(49): Kohana_View->__toString()
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(186): Kohana_Controller_Template->after()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\module.php(53): Controller_Base->after()
#12 [internal function]: Module->after()
#13 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\system.php(70): ReflectionMethod->invoke(Object(Module_Pages))
#14 [internal function]: Controller_System->action_index()
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_System))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#19 {main}
2012-02-28 05:56:18 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
2012-02-28 05:56:18 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 497, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\userinfo\classes\user\info.php(497): preg_match('/os/2/i', 'mozilla/5.0 (wi...')
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\test\userinfo.php(17): User_Info->os()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\public.php(49): Kohana_View->__toString()
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(186): Kohana_Controller_Template->after()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\module.php(53): Controller_Base->after()
#12 [internal function]: Module->after()
#13 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\system.php(70): ReflectionMethod->invoke(Object(Module_Pages))
#14 [internal function]: Controller_System->action_index()
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_System))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#19 {main}
2012-02-28 05:56:30 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
2012-02-28 05:56:30 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 497, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\userinfo\classes\user\info.php(497): preg_match('/os/2/', 'mozilla/5.0 (wi...')
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\test\userinfo.php(17): User_Info->os()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\public.php(49): Kohana_View->__toString()
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(186): Kohana_Controller_Template->after()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\module.php(53): Controller_Base->after()
#12 [internal function]: Module->after()
#13 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\system.php(70): ReflectionMethod->invoke(Object(Module_Pages))
#14 [internal function]: Controller_System->action_index()
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_System))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#19 {main}
2012-02-28 05:56:39 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
2012-02-28 05:56:39 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 497, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\userinfo\classes\user\info.php(497): preg_match('/os/2/', 'mozilla/5.0 (wi...')
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\test\userinfo.php(17): User_Info->os()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\public.php(49): Kohana_View->__toString()
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(186): Kohana_Controller_Template->after()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\module.php(53): Controller_Base->after()
#12 [internal function]: Module->after()
#13 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\system.php(70): ReflectionMethod->invoke(Object(Module_Pages))
#14 [internal function]: Controller_System->action_index()
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_System))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#19 {main}
2012-02-28 05:56:54 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Delimiter must not be alphanumeric or backslash ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
2012-02-28 05:56:54 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Delimiter must not be alphanumeric or backslash ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 497, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\userinfo\classes\user\info.php(497): preg_match('amiga', 'mozilla/5.0 (wi...')
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\test\userinfo.php(17): User_Info->os()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\public.php(49): Kohana_View->__toString()
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(186): Kohana_Controller_Template->after()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\module.php(53): Controller_Base->after()
#12 [internal function]: Module->after()
#13 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\system.php(70): ReflectionMethod->invoke(Object(Module_Pages))
#14 [internal function]: Controller_System->action_index()
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_System))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#19 {main}
2012-02-28 05:57:08 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Delimiter must not be alphanumeric or backslash ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
2012-02-28 05:57:08 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Delimiter must not be alphanumeric or backslash ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 497, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\userinfo\classes\user\info.php(497): preg_match('amiga', 'mozilla/5.0 (wi...')
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\test\userinfo.php(17): User_Info->os()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\public.php(49): Kohana_View->__toString()
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(186): Kohana_Controller_Template->after()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\module.php(53): Controller_Base->after()
#12 [internal function]: Module->after()
#13 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\system.php(70): ReflectionMethod->invoke(Object(Module_Pages))
#14 [internal function]: Controller_System->action_index()
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_System))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#19 {main}
2012-02-28 05:57:18 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
2012-02-28 05:57:18 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 497 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 497, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\userinfo\classes\user\info.php(497): preg_match('/os/2/', 'mozilla/5.0 (wi...')
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\test\userinfo.php(17): User_Info->os()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\public.php(49): Kohana_View->__toString()
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(186): Kohana_Controller_Template->after()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\module.php(53): Controller_Base->after()
#12 [internal function]: Module->after()
#13 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\system.php(70): ReflectionMethod->invoke(Object(Module_Pages))
#14 [internal function]: Controller_System->action_index()
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_System))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#19 {main}
2012-02-28 05:59:45 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 499 ]
2012-02-28 05:59:45 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 499 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 499, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\userinfo\classes\user\info.php(499): preg_match('/os/2/', 'mozilla/5.0 (wi...')
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\test\userinfo.php(17): User_Info->os()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\public.php(49): Kohana_View->__toString()
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(186): Kohana_Controller_Template->after()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\module.php(53): Controller_Base->after()
#12 [internal function]: Module->after()
#13 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\system.php(70): ReflectionMethod->invoke(Object(Module_Pages))
#14 [internal function]: Controller_System->action_index()
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_System))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#19 {main}
2012-02-28 06:00:11 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 499 ]
2012-02-28 06:00:11 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 499 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 499, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\userinfo\classes\user\info.php(499): preg_match('/os/2/', 'mozilla/5.0 (wi...')
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\test\userinfo.php(17): User_Info->os()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\public.php(49): Kohana_View->__toString()
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(186): Kohana_Controller_Template->after()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\module.php(53): Controller_Base->after()
#12 [internal function]: Module->after()
#13 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\system.php(70): ReflectionMethod->invoke(Object(Module_Pages))
#14 [internal function]: Controller_System->action_index()
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_System))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#19 {main}
2012-02-28 06:04:23 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 499 ]
2012-02-28 06:04:23 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 499 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 499, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\userinfo\classes\user\info.php(499): preg_match('/os/2/', 'mozilla/5.0 (wi...')
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\test\userinfo.php(17): User_Info->os()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\public.php(49): Kohana_View->__toString()
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(186): Kohana_Controller_Template->after()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\module.php(53): Controller_Base->after()
#12 [internal function]: Module->after()
#13 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\system.php(70): ReflectionMethod->invoke(Object(Module_Pages))
#14 [internal function]: Controller_System->action_index()
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_System))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#19 {main}
2012-02-28 06:04:38 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 499 ]
2012-02-28 06:04:38 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 499 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 499, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\userinfo\classes\user\info.php(499): preg_match('/os/2/', 'mozilla/5.0 (wi...')
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\test\userinfo.php(17): User_Info->os()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\public.php(49): Kohana_View->__toString()
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(186): Kohana_Controller_Template->after()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\module.php(53): Controller_Base->after()
#12 [internal function]: Module->after()
#13 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\system.php(70): ReflectionMethod->invoke(Object(Module_Pages))
#14 [internal function]: Controller_System->action_index()
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_System))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#19 {main}
2012-02-28 06:05:00 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 499 ]
2012-02-28 06:05:00 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Unknown modifier '2' ~ MODPATH\userinfo\classes\user\info.php [ 499 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 499, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\userinfo\classes\user\info.php(499): preg_match('/os/2/', 'mozilla/5.0 (wi...')
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\test\userinfo.php(17): User_Info->os()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\public.php(49): Kohana_View->__toString()
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(186): Kohana_Controller_Template->after()
#11 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\module.php(53): Controller_Base->after()
#12 [internal function]: Module->after()
#13 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\system.php(70): ReflectionMethod->invoke(Object(Module_Pages))
#14 [internal function]: Controller_System->action_index()
#15 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_System))
#16 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#19 {main}
2012-02-28 06:11:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method User_Info::broser() ~ MODPATH\userinfo\classes\user\info.php [ 39 ]
2012-02-28 06:11:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method User_Info::broser() ~ MODPATH\userinfo\classes\user\info.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 06:27:46 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Public_Auth' not found ~ APPPATH\classes\module\auth.php [ 24 ]
2012-02-28 06:27:46 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Public_Auth' not found ~ APPPATH\classes\module\auth.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-28 19:03:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photos/list/bg.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-28 19:03:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: photos/list/bg.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-28 19:46:59 --- ERROR: The requested view admin/system_pages/list could not be found
2012-02-28 20:05:28 --- ERROR: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'left, right) VALUES ('3', 'home', '1', '2012-02-28 20:05:28', '2012-02-28 20:05:' at line 1 [ INSERT INTO system_pages (module_id, alias, is_hide, date_create, date_modif, scope, level, left, right) VALUES ('3', 'home', '1', '2012-02-28 20:05:28', '2012-02-28 20:05:28', 1, 1, 1, 2) ]
2012-02-28 20:06:51 --- ERROR: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'left, right) VALUES ('3', 'home', 'Главная страница', '1', '2012-' at line 1 [ INSERT INTO system_pages (module_id, alias, title, is_hide, date_create, date_modif, scope, level, left, right) VALUES ('3', 'home', 'Главная страница', '1', '2012-02-28 20:06:51', '2012-02-28 20:06:51', 1, 1, 1, 2) ]
2012-02-28 20:12:01 --- ERROR: Failed to validate array
2012-02-28 20:13:09 --- ERROR: Failed to validate array
2012-02-28 20:16:25 --- ERROR: Failed to validate array
2012-02-28 20:18:58 --- ERROR: Failed to validate array
2012-02-28 20:20:37 --- ERROR: Failed to validate array
2012-02-28 20:20:37 --- ERROR: #0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\entity.php(30): Kohana_ORM->save()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin.php(305): Entity::show(Object(Model_Page))
#4 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin.php(168): Controller_Admin->manipulateEntity('show')
#5 [internal function]: Controller_Admin->action_show()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#10 {main}
2012-02-28 20:24:08 --- ERROR: Failed to validate array
2012-02-28 20:24:08 --- ERROR: #0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\entity.php(30): Kohana_ORM->save()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin.php(305): Entity::show(Object(Model_Page))
#4 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin.php(168): Controller_Admin->manipulateEntity('show')
#5 [internal function]: Controller_Admin->action_show()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#10 {main}
2012-02-28 20:24:18 --- ERROR: Failed to validate array
2012-02-28 20:24:18 --- ERROR: #0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\entity.php(30): Kohana_ORM->save()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin.php(305): Entity::show(Object(Model_Page))
#4 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin.php(168): Controller_Admin->manipulateEntity('show')
#5 [internal function]: Controller_Admin->action_show()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#10 {main}
2012-02-28 20:26:32 --- ERROR: Failed to validate array
2012-02-28 20:26:32 --- ERROR: #0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\entity.php(30): Kohana_ORM->save()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin.php(305): Entity::show(Object(Model_Page))
#4 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin.php(168): Controller_Admin->manipulateEntity('show')
#5 [internal function]: Controller_Admin->action_show()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#10 {main}
2012-02-28 20:28:03 --- ERROR: The requested view admin/systempages/list could not be found
2012-02-28 20:28:03 --- ERROR: #0 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/systempag...')
#1 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/systempag...', NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin.php(145): Kohana_View::factory('admin/systempag...')
#3 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin\system\pages.php(20): Controller_Admin->action_list()
#4 [internal function]: Controller_Admin_System_Pages->action_list()
#5 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_System_Pages))
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#9 {main}
2012-02-28 20:28:53 --- ERROR: Failed to validate array
2012-02-28 20:28:53 --- ERROR: #0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\entity.php(30): Kohana_ORM->save()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin.php(305): Entity::show(Object(Model_Page))
#4 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin.php(168): Controller_Admin->manipulateEntity('show')
#5 [internal function]: Controller_Admin->action_show()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#10 {main}
2012-02-28 20:29:18 --- ERROR: Failed to validate array
2012-02-28 20:29:18 --- ERROR: #0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\entity.php(30): Kohana_ORM->save()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin.php(305): Entity::show(Object(Model_Page))
#4 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin.php(168): Controller_Admin->manipulateEntity('show')
#5 [internal function]: Controller_Admin->action_show()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#10 {main}
2012-02-28 20:38:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/systempages/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-28 20:38:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/systempages/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#3 {main}
2012-02-28 20:39:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/system_pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-28 20:39:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/system_pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#3 {main}
2012-02-28 20:41:17 --- ERROR: Failed to validate array
2012-02-28 20:41:17 --- ERROR: #0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\entity.php(30): Kohana_ORM->save()
#3 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin.php(305): Entity::show(Object(Model_Page))
#4 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin.php(168): Controller_Admin->manipulateEntity('show')
#5 [internal function]: Controller_Admin->action_show()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#10 {main}
2012-02-28 20:42:52 --- ERROR: Kohana_Exception [ 0 ]: The text property does not exist in the Model_SystemPage class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-02-28 20:42:52 --- STRACE: Kohana_Exception [ 0 ]: The text property does not exist in the Model_SystemPage class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\modules\orm-mptt\classes\kohana\orm\mptt.php(901): Kohana_ORM->__get('text')
#1 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\admin\systempages\edit.php(17): Kohana_ORM_MPTT->__get('text')
#2 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\telegina.loc\www\public_html\application\views\admin.php(74): Kohana_View->__toString()
#6 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\base.php(186): Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\telegina.loc\www\public_html\application\classes\controller\admin.php(36): Controller_Base->after()
#11 [internal function]: Controller_Admin->after()
#12 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_SystemPages))
#13 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#16 {main}
2012-02-28 21:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/system_pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-28 21:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/system_pages was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#3 {main}
2012-02-28 21:38:25 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 241 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-02-28 21:38:25 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 241 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 392, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\route.php(392): preg_match('#^(?:/(?P<param...', '', NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(567): Kohana_Route->matches('')
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(785): Kohana_Request::process_uri('', Array)
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(198): Kohana_Request->__construct('', NULL)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(110): Kohana_Request::factory()
#6 {main}
2012-02-28 21:38:52 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 241 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-02-28 21:38:52 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 241 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 392, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\route.php(392): preg_match('#^(?:/(?P<param...', '', NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(567): Kohana_Route->matches('')
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(785): Kohana_Request::process_uri('', Array)
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(198): Kohana_Request->__construct('', NULL)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(110): Kohana_Request::factory()
#6 {main}
2012-02-28 21:38:53 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 241 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-02-28 21:38:53 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 241 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 392, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\route.php(392): preg_match('#^(?:/(?P<param...', '', NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(567): Kohana_Route->matches('')
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(785): Kohana_Request::process_uri('', Array)
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(198): Kohana_Request->__construct('', NULL)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(110): Kohana_Request::factory()
#6 {main}
2012-02-28 21:39:20 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 241 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-02-28 21:39:20 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 241 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 392, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\route.php(392): preg_match('#^(?:/(?P<param...', '', NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(567): Kohana_Route->matches('')
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(785): Kohana_Request::process_uri('', Array)
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(198): Kohana_Request->__construct('', NULL)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(110): Kohana_Request::factory()
#6 {main}
2012-02-28 21:39:22 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 241 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-02-28 21:39:22 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 241 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 392, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\route.php(392): preg_match('#^(?:/(?P<param...', '', NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(567): Kohana_Route->matches('')
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(785): Kohana_Request::process_uri('', Array)
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(198): Kohana_Request->__construct('', NULL)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(110): Kohana_Request::factory()
#6 {main}
2012-02-28 21:39:22 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 241 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-02-28 21:39:22 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 241 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 392, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\route.php(392): preg_match('#^(?:/(?P<param...', '', NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(567): Kohana_Route->matches('')
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(785): Kohana_Request::process_uri('', Array)
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(198): Kohana_Request->__construct('', NULL)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(110): Kohana_Request::factory()
#6 {main}
2012-02-28 21:39:23 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 241 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-02-28 21:39:23 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 241 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'C:\xampp\htdocs...', 392, Array)
#1 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\route.php(392): preg_match('#^(?:/(?P<param...', '', NULL)
#2 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(567): Kohana_Route->matches('')
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(785): Kohana_Request::process_uri('', Array)
#4 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(198): Kohana_Request->__construct('', NULL)
#5 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(110): Kohana_Request::factory()
#6 {main}
2012-02-28 21:56:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-28 21:56:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-28 21:57:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-28 21:57:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: home ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#1 {main}
2012-02-28 21:59:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Module :module not found ~ APPPATH\classes\controller\system.php [ 41 ]
2012-02-28 21:59:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Module :module not found ~ APPPATH\classes\controller\system.php [ 41 ]
--
#0 [internal function]: Controller_System->action_index()
#1 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_System))
#2 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 C:\xampp\htdocs\telegina.loc\www\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 C:\xampp\htdocs\telegina.loc\www\public_html\index.php(111): Kohana_Request->execute()
#5 {main}