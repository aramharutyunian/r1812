<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-29 12:07:10 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'position' in 'order clause' [ SELECT menus.* 
        		        From menus
                        WHERE menus.lang_id = 'en' 
        		         ORDER BY position ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\r1812\modules\database\classes\Kohana\Database\Query.php:251
2012-11-29 12:07:10 --- DEBUG: #0 C:\xampp\htdocs\r1812\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT menus.* ...', false, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Menu.php(22): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\r1812\application\classes\Controller\base\admin.php(66): Model_Private_Menu->all('en')
#3 C:\xampp\htdocs\r1812\application\classes\Controller\private\Auth.php(10): Controller_Base_Admin->before()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(69): Controller_Private_Auth->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Auth))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\r1812\modules\database\classes\Kohana\Database\Query.php:251
2012-11-29 12:41:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Menu' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in :
2012-11-29 12:41:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 12:41:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: menu_id ~ APPPATH\classes\Controller\private\Menu.php [ 65 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Menu.php:65
2012-11-29 12:41:46 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Menu.php(65): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 65, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Menu->action_do_add_cat()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Menu))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Menu.php:65
2012-11-29 12:46:02 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':'2'
    			ORDER BY position' at line 2 [ SELECT *  FROM menu
				Where  '2'=:'2'
    			ORDER BY position ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\r1812\modules\database\classes\Kohana\Database\Query.php:251
2012-11-29 12:46:02 --- DEBUG: #0 C:\xampp\htdocs\r1812\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *  FROM ...', false, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Menu.php(46): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Menu.php(62): Model_Private_Menu->getMenuById('2')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Menu->action_do_add_cat()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Menu))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\modules\database\classes\Kohana\Database\Query.php:251
2012-11-29 12:48:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: menu_id ~ APPPATH\classes\Controller\private\Menu.php [ 68 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Menu.php:68
2012-11-29 12:48:25 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Menu.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 68, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Menu->action_do_add_cat()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Menu))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Menu.php:68
2012-11-29 12:48:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: menu_id ~ APPPATH\classes\Controller\private\Menu.php [ 68 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Menu.php:68
2012-11-29 12:48:43 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Menu.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 68, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Menu->action_do_add_cat()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Menu))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Menu.php:68
2012-11-29 13:01:56 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant e - assumed 'e' ~ APPPATH\views\private\pages\menu\list.php [ 9 ] in C:\xampp\htdocs\r1812\application\views\private\pages\menu\list.php:9
2012-11-29 13:01:56 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\views\private\pages\menu\list.php(9): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\r1812\application\views\private\layouts\v_layout.php(9): Kohana_View->__toString()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Menu))
#11 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\r1812\application\views\private\pages\menu\list.php:9
2012-11-29 13:01:57 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant e - assumed 'e' ~ APPPATH\views\private\pages\menu\list.php [ 9 ] in C:\xampp\htdocs\r1812\application\views\private\pages\menu\list.php:9
2012-11-29 13:01:57 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\views\private\pages\menu\list.php(9): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\r1812\application\views\private\layouts\v_layout.php(9): Kohana_View->__toString()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Menu))
#11 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\r1812\application\views\private\pages\menu\list.php:9
2012-11-29 13:13:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Private_Menu::getgetCategoryById() ~ APPPATH\classes\Controller\private\Menu.php [ 86 ] in :
2012-11-29 13:13:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-29 13:20:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\private\Menu.php [ 111 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Menu.php:111
2012-11-29 13:20:10 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Menu.php(111): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 111, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Menu->action_do_edit_cat()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Menu))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Menu.php:111
2012-11-29 13:44:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH\classes\Controller\private\Menu.php [ 43 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Menu.php:43
2012-11-29 13:44:39 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Menu.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Menu->action_list()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Menu))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Menu.php:43
2012-11-29 13:45:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_id ~ APPPATH\views\private\pages\menu\good_list.php [ 20 ] in C:\xampp\htdocs\r1812\application\views\private\pages\menu\good_list.php:20
2012-11-29 13:45:35 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\views\private\pages\menu\good_list.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 20, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\r1812\application\views\private\layouts\v_layout.php(9): Kohana_View->__toString()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Menu))
#11 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\r1812\application\views\private\pages\menu\good_list.php:20
2012-11-29 13:45:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menu_id ~ APPPATH\views\private\pages\menu\good_list.php [ 20 ] in C:\xampp\htdocs\r1812\application\views\private\pages\menu\good_list.php:20
2012-11-29 13:45:36 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\views\private\pages\menu\good_list.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 20, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\r1812\application\views\private\layouts\v_layout.php(9): Kohana_View->__toString()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Menu))
#11 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\r1812\application\views\private\pages\menu\good_list.php:20