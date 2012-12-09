<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-01 09:11:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Date::format() ~ APPPATH\classes\Controller\private\News.php [ 156 ] in :
2012-12-01 09:11:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 09:14:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Date::format() ~ APPPATH\classes\Controller\private\News.php [ 156 ] in :
2012-12-01 09:14:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 09:24:05 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\Controller\private\News.php [ 158 ] in :
2012-12-01 09:24:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\xampp\htdocs...', 158, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php(158): date('Y-m-d', '01.12.2012')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_News->action_do_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_News))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} in :
2012-12-01 09:25:20 --- CRITICAL: ErrorException [ 2 ]: date() expects parameter 2 to be long, object given ~ APPPATH\classes\Controller\private\News.php [ 158 ] in :
2012-12-01 09:25:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', 'C:\xampp\htdocs...', 158, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php(158): date('Y-m-d', Object(Date))
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_News->action_do_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_News))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} in :
2012-12-01 09:27:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Date::format() ~ APPPATH\classes\Controller\private\News.php [ 159 ] in :
2012-12-01 09:27:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-01 09:33:47 --- CRITICAL: Exception [ 0 ]: DateTime::__construct() expects parameter 1 to be string, object given ~ SYSPATH\classes\Kohana\Date.php [ 593 ] in C:\xampp\htdocs\r1812\system\classes\Kohana\Date.php:593
2012-12-01 09:33:47 --- DEBUG: #0 C:\xampp\htdocs\r1812\system\classes\Kohana\Date.php(593): DateTime->__construct(Object(Date), Object(DateTimeZone))
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php(159): Kohana_Date::formatted_time(Object(Date), 'Y-m-d')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_News->action_do_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_News))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\r1812\system\classes\Kohana\Date.php:593
2012-12-01 09:34:40 --- CRITICAL: Exception [ 0 ]: DateTime::__construct() [datetime.--construct]: Failed to parse time string (Y-m-d) at position 1 (-): Unexpected character ~ SYSPATH\classes\Kohana\Date.php [ 593 ] in C:\xampp\htdocs\r1812\system\classes\Kohana\Date.php:593
2012-12-01 09:34:40 --- DEBUG: #0 C:\xampp\htdocs\r1812\system\classes\Kohana\Date.php(593): DateTime->__construct('Y-m-d', Object(DateTimeZone))
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php(159): Kohana_Date::formatted_time('Y-m-d', Object(Date))
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_News->action_do_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_News))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\r1812\system\classes\Kohana\Date.php:593
2012-12-01 09:35:29 --- CRITICAL: Exception [ 0 ]: DateTime::__construct() [datetime.--construct]: Failed to parse time string (Y-m-d) at position 1 (-): Unexpected character ~ SYSPATH\classes\Kohana\Date.php [ 593 ] in C:\xampp\htdocs\r1812\system\classes\Kohana\Date.php:593
2012-12-01 09:35:29 --- DEBUG: #0 C:\xampp\htdocs\r1812\system\classes\Kohana\Date.php(593): DateTime->__construct('Y-m-d', Object(DateTimeZone))
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php(159): Kohana_Date::formatted_time('Y-m-d', '22.11.2012')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_News->action_do_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_News))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\r1812\system\classes\Kohana\Date.php:593
2012-12-01 09:46:10 --- CRITICAL: Exception [ 0 ]: DateTime::__construct() [datetime.--construct]: Failed to parse time string (213151313213132121) at position 17 (1): Unexpected character ~ SYSPATH\classes\Kohana\Date.php [ 593 ] in C:\xampp\htdocs\r1812\system\classes\Kohana\Date.php:593
2012-12-01 09:46:10 --- DEBUG: #0 C:\xampp\htdocs\r1812\system\classes\Kohana\Date.php(593): DateTime->__construct('213151313213132...', Object(DateTimeZone))
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php(156): Kohana_Date::formatted_time('213151313213132...', 'Y-m-d')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_News->action_do_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_News))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\r1812\system\classes\Kohana\Date.php:593
2012-12-01 10:06:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: date_of_creation ~ APPPATH\classes\Controller\private\News.php [ 33 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php:33
2012-12-01 10:06:39 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_News->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_News))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php:33
2012-12-01 10:07:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index: date_of_creation ~ APPPATH\classes\Controller\private\News.php [ 33 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php:33
2012-12-01 10:07:21 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_News->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_News))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php:33
2012-12-01 10:10:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: date_of_creation ~ APPPATH\classes\Controller\private\News.php [ 35 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php:35
2012-12-01 10:10:07 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php(35): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 35, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_News->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_News))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php:35
2012-12-01 10:12:58 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ APPPATH\classes\Controller\private\News.php [ 35 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php:35
2012-12-01 10:12:58 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php(35): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\xampp\htdocs...', 35, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_News->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_News))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php:35
2012-12-01 10:36:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\classes\Controller\private\News.php [ 202 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php:202
2012-12-01 10:36:47 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php(202): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 202, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_News->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_News))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\News.php:202