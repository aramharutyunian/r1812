<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-11 00:47:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\base\admin.php [ 18 ] in :
2012-11-11 00:47:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-11 00:51:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\base\admin.php [ 71 ] in :
2012-11-11 00:51:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-11 00:51:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH\classes\Controller\base\admin.php [ 29 ] in C:\xampp\htdocs\r1812\application\classes\Controller\base\admin.php:29
2012-11-11 00:51:57 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\base\admin.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\dashboard.php(10): Controller_Base_Admin->before()
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(69): Controller_Private_Dashboard->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Dashboard))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\base\admin.php:29
2012-11-11 00:52:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\base\admin.php [ 18 ] in :
2012-11-11 00:52:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :