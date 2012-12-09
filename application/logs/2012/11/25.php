<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-25 06:13:10 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\private\widgets\menu.php [ 18 ] in C:\xampp\htdocs\r1812\application\views\private\widgets\menu.php:18
2012-11-25 06:13:10 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\views\private\widgets\menu.php(18): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 18, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\r1812\application\views\private\widgets\header.php(14): Kohana_View->__toString()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\r1812\application\views\private\layouts\v_layout.php(6): Kohana_View->__toString()
#9 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#10 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#11 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Dashboard))
#15 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#18 {main} in C:\xampp\htdocs\r1812\application\views\private\widgets\menu.php:18
2012-11-25 06:13:11 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\private\widgets\menu.php [ 18 ] in C:\xampp\htdocs\r1812\application\views\private\widgets\menu.php:18
2012-11-25 06:13:11 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\views\private\widgets\menu.php(18): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 18, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\r1812\application\views\private\widgets\header.php(14): Kohana_View->__toString()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\r1812\application\views\private\layouts\v_layout.php(6): Kohana_View->__toString()
#9 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#10 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#11 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#13 [internal function]: Kohana_Controller->execute()
#14 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Dashboard))
#15 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#16 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#17 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#18 {main} in C:\xampp\htdocs\r1812\application\views\private\widgets\menu.php:18
2012-11-25 06:31:52 --- CRITICAL: View_Exception [ 0 ]: The requested view private/pages/edit_page could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\r1812\system\classes\Kohana\View.php:137
2012-11-25 06:31:52 --- DEBUG: #0 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(137): Kohana_View->set_filename('private/pages/e...')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(30): Kohana_View->__construct('private/pages/e...', NULL)
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Pages.php(35): Kohana_View::factory('private/pages/e...')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Pages->action_get()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Pages))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\system\classes\Kohana\View.php:137
2012-11-25 06:57:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in :
2012-11-25 06:57:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-25 07:03:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\private\Pages.php [ 137 ] in :
2012-11-25 07:03:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-25 07:05:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\private\Pages.php [ 137 ] in :
2012-11-25 07:05:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-25 07:07:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\private\Pages.php [ 137 ] in :
2012-11-25 07:07:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-25 07:11:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\private\Pages.php [ 137 ] in :
2012-11-25 07:11:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :