<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-12 03:30:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Auth' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in :
2012-11-12 03:30:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-11-12 03:31:23 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'email' in 'where clause' [ SELECT *  FROM users WHERE email ='admin'  and passwd = '912ec803b2ce49e4a541068d495ab570'  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\r1812\modules\database\classes\Kohana\Database\Query.php:251
2012-11-12 03:31:23 --- DEBUG: #0 C:\xampp\htdocs\r1812\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *  FROM ...', false, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Auth.php(20): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Auth.php(71): Model_Private_Auth->login(Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Auth->action_do_login()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Auth))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\modules\database\classes\Kohana\Database\Query.php:251
2012-11-12 03:31:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\private\Auth.php [ 80 ] in :
2012-11-12 03:31:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :