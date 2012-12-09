<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-21 01:28:18 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-21 01:28:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-21 01:28:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-21 01:28:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-21 01:29:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH\classes\Kohana\Controller.php [ 72 ] in :
2012-11-21 01:29:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-21 01:30:55 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(media/temp/n51d1modevq5t916h9jtf1pp84/ImageGq7u4b6m3U.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\private\Service.php [ 46 ] in :
2012-11-21 01:30:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\xampp\htdocs...', 46, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Service.php(46): move_uploaded_file('C:\xampp\tmp\ph...', 'media/temp/n51d...')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Service->action_page()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Service))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} in :
2012-11-21 02:13:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_id ~ APPPATH\classes\Controller\private\Pages.php [ 21 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php:21
2012-11-21 02:13:39 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Pages->action_get()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Pages))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php:21
2012-11-21 02:13:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\private\Pages.php [ 32 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php:32
2012-11-21 02:13:54 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php(32): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 32, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Pages->action_get()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Pages))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php:32
2012-11-21 02:14:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\private\Pages.php [ 33 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php:33
2012-11-21 02:14:26 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Pages->action_get()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Pages))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php:33
2012-11-21 02:14:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\private\Pages.php [ 33 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php:33
2012-11-21 02:14:43 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Pages->action_get()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Pages))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php:33
2012-11-21 02:14:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\private\Pages.php [ 33 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php:33
2012-11-21 02:14:47 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Pages->action_get()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Pages))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php:33
2012-11-21 02:15:07 --- CRITICAL: View_Exception [ 0 ]: The requested view private/pages/w_edit_page could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\r1812\system\classes\Kohana\View.php:137
2012-11-21 02:15:07 --- DEBUG: #0 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(137): Kohana_View->set_filename('private/pages/w...')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(30): Kohana_View->__construct('private/pages/w...', NULL)
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php(37): Kohana_View::factory('private/pages/w...')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Pages->action_get()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Pages))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\system\classes\Kohana\View.php:137
2012-11-21 02:36:35 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\r1812\system\classes\Kohana\View.php:137
2012-11-21 02:36:35 --- DEBUG: #0 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\r1812\application\classes\Controller\private\Error.php(10): Kohana_Controller_Template->before()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(69): Controller_Private_Error->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Error))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\r1812\system\classes\Kohana\View.php:137