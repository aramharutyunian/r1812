<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-04 05:48:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lang ~ APPPATH\views\private\pages\gallery\add_album.php [ 149 ] in C:\xampp\htdocs\r1812\application\views\private\pages\gallery\add_album.php:149
2012-12-04 05:48:17 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\views\private\pages\gallery\add_album.php(149): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 149, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\r1812\application\views\private\layouts\v_layout.php(9): Kohana_View->__toString()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#11 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\r1812\application\views\private\pages\gallery\add_album.php:149
2012-12-04 06:47:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\private\pages\gallery\album_list.php [ 8 ] in :
2012-12-04 06:47:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-04 06:51:00 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\private\pages\gallery\album_list.php [ 29 ] in C:\xampp\htdocs\r1812\application\views\private\pages\gallery\album_list.php:29
2012-12-04 06:51:00 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\views\private\pages\gallery\album_list.php(29): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\r1812\application\views\private\layouts\v_layout.php(9): Kohana_View->__toString()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#11 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\r1812\application\views\private\pages\gallery\album_list.php:29
2012-12-04 08:58:33 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH\views\private\pages\gallery\add_album.php [ 54 ] in C:\xampp\htdocs\r1812\application\views\private\pages\gallery\add_album.php:54
2012-12-04 08:58:33 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\views\private\pages\gallery\add_album.php(54): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 54, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\r1812\application\views\private\layouts\v_layout.php(9): Kohana_View->__toString()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#11 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\r1812\application\views\private\pages\gallery\add_album.php:54
2012-12-04 09:48:06 --- CRITICAL: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT *  
                      FROM albums
                       WHERE  id=('asdf', '', '', 'test3', '&lt;p&gt;qwer&lt;/p&gt;', '3', 'ru'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\r1812\modules\database\classes\Kohana\Database\Query.php:251
2012-12-04 09:48:06 --- DEBUG: #0 C:\xampp\htdocs\r1812\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *  ??   ...', false, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(66): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(163): Model_Private_Gallery->getAlbumById(Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_album()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\modules\database\classes\Kohana\Database\Query.php:251
2012-12-04 09:50:01 --- CRITICAL: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT *  
                      FROM albums
                       WHERE  id=('asdf', '', '', 'test3', '&lt;p&gt;qwer&lt;/p&gt;', '3', 'ru'); ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\r1812\modules\database\classes\Kohana\Database\Query.php:251
2012-12-04 09:50:01 --- DEBUG: #0 C:\xampp\htdocs\r1812\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *  ??   ...', false, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(66): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(163): Model_Private_Gallery->getAlbumById(Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_album()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\modules\database\classes\Kohana\Database\Query.php:251
2012-12-04 09:52:17 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'Undefined index: id' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:111
Stack trace:
#0 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(111): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 111, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(163): Model_Private_Gallery->edit_album(Array)
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_album()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 119 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:163
2012-12-04 09:52:17 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(163): Model_Private_Gallery->edit_album(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_album()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:163
2012-12-04 09:54:16 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'Undefined index: id' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:111
Stack trace:
#0 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(111): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 111, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(163): Model_Private_Gallery->edit_album(Array)
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_album()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 120 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:163
2012-12-04 09:54:16 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(163): Model_Private_Gallery->edit_album(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_album()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:163
2012-12-04 09:58:41 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'Undefined index: id' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:111
Stack trace:
#0 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(111): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 111, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(163): Model_Private_Gallery->edit_album(Array)
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_album()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 119 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:163
2012-12-04 09:58:41 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(163): Model_Private_Gallery->edit_album(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_album()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:163