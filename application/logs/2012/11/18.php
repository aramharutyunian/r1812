<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-18 01:53:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\private\pages\form.php [ 61 ] in C:\xampp\htdocs\r1812\application\views\private\pages\form.php:61
2012-11-18 01:53:27 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\views\private\pages\form.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 61, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\r1812\application\views\private\layouts\v_layout.php(9): Kohana_View->__toString()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Dashboard))
#11 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\r1812\application\views\private\pages\form.php:61