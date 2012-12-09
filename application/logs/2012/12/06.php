<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-06 02:44:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: album_id ~ APPPATH\classes\Controller\private\Gallery.php [ 291 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:291
2012-12-06 02:44:03 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:291
2012-12-06 02:44:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: album_id ~ APPPATH\classes\Controller\private\Gallery.php [ 291 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:291
2012-12-06 02:44:35 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:291
2012-12-06 03:13:43 --- CRITICAL: Exception [ 0 ]: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`r1812`.`images`, CONSTRAINT `FK_images` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ INSERT INTO `images` (`src`, `album_id`, `title`, `description`, `status`) VALUES ('ggg.jpg', '', 'hffhfh', 'fhgfgh', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] ~ APPPATH\classes\Model\Private\Gallery.php [ 199 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:307
2012-12-06 03:13:43 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(307): Model_Private_Gallery->addImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:307
2012-12-06 03:36:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Private_Gallery::delete_image() ~ APPPATH\classes\Controller\private\Gallery.php [ 332 ] in :
2012-12-06 03:36:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-06 03:44:33 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Model_Private_Gallery::delete_image(), called in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php on line 332 and defined ~ APPPATH\classes\Model\Private\Gallery.php [ 208 ] in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:208
2012-12-06 03:44:33 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(208): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 208, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('2')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:208
2012-12-06 03:49:39 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/resources/gallery/3/1): No such file or directory' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:231
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/re...', 'C:\xampp\htdocs...', 231, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(231): unlink('media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 238 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:49:39 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:50:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Model\Private\Gallery.php [ 221 ] in :
2012-12-06 03:50:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-06 03:50:39 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/resources/gallery/3/1): No such file or directory' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:231
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/re...', 'C:\xampp\htdocs...', 231, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(231): unlink('media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 238 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:50:39 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:50:56 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/resources/gallery/3/1): No such file or directory' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:231
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/re...', 'C:\xampp\htdocs...', 231, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(231): unlink('media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 238 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:50:56 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:51:10 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/resources/gallery/3/): Permission denied' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:231
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/re...', 'C:\xampp\htdocs...', 231, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(231): unlink('media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 238 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:51:10 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:52:41 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'Object of class Database_MySQL_Result could not be converted to string' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:231
Stack trace:
#0 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(231): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 231, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 238 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:52:41 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:53:09 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'Array to string conversion' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:231
Stack trace:
#0 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(231): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 231, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 238 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:53:09 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:53:37 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'Undefined index: src' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:222
Stack trace:
#0 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(222): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 222, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 238 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:53:37 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:53:47 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'Undefined index: src' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:222
Stack trace:
#0 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(222): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 222, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 238 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:53:47 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:54:22 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'Array to string conversion' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:231
Stack trace:
#0 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(231): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 231, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 238 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:54:22 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:54:35 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'Array to string conversion' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:231
Stack trace:
#0 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(231): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 231, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 238 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:54:35 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:54:47 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/resources/gallery/3/on.png): No such file or directory' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:231
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/re...', 'C:\xampp\htdocs...', 231, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(231): unlink('media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 238 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:54:47 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:54:52 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/resources/gallery/3/on.png): No such file or directory' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:231
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/re...', 'C:\xampp\htdocs...', 231, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(231): unlink('media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 238 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:54:52 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('4', '3')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:55:38 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/resources/gallery/3/on.png): No such file or directory' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:231
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/re...', 'C:\xampp\htdocs...', 231, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(231): unlink('media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('5', '3')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 238 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:55:38 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('5', '3')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:57:03 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/resources/gallery/3/Orange-Monster-icon.png): No such file or directory' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:231
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/re...', 'C:\xampp\htdocs...', 231, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(231): unlink('media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('6', '3')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 238 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 03:57:03 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('6', '3')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 05:03:34 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/resources/gallery/3/on.png): No such file or directory' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:231
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/re...', 'C:\xampp\htdocs...', 231, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(231): unlink('media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('5', '3')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 238 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 05:03:34 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(332): Model_Private_Gallery->delete_image('5', '3')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:332
2012-12-06 05:48:35 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/temp/vqohis59eg1qp3us8umkt0ek73/309162_458217444209771_1222796169_n.jpg): No such file or directory' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:198
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/te...', 'C:\xampp\htdocs...', 198, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(198): unlink('media/temp/vqoh...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(323): Model_Private_Gallery->addImage(Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 211 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:323
2012-12-06 05:48:35 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(323): Model_Private_Gallery->addImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:323
2012-12-06 05:50:30 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/temp/vqohis59eg1qp3us8umkt0ek73/487184_495497827133680_653958784_n.jpg): No such file or directory' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:198
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/te...', 'C:\xampp\htdocs...', 198, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(198): unlink('media/temp/vqoh...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(323): Model_Private_Gallery->addImage(Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 211 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:323
2012-12-06 05:50:30 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(323): Model_Private_Gallery->addImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:323
2012-12-06 05:51:08 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/temp/vqohis59eg1qp3us8umkt0ek73/487184_495497827133680_653958784_n.jpg): No such file or directory' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:206
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/te...', 'C:\xampp\htdocs...', 206, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(206): unlink('media/temp/vqoh...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(323): Model_Private_Gallery->addImage(Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 212 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:323
2012-12-06 05:51:08 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(323): Model_Private_Gallery->addImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:323
2012-12-06 05:51:25 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/temp/vqohis59eg1qp3us8umkt0ek73/309402_500876023262527_1794795456_n.jpg): No such file or directory' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:206
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/te...', 'C:\xampp\htdocs...', 206, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(206): unlink('media/temp/vqoh...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(323): Model_Private_Gallery->addImage(Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 212 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:323
2012-12-06 05:51:25 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(323): Model_Private_Gallery->addImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:323
2012-12-06 05:56:11 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/temp/vqohis59eg1qp3us8umkt0ek73/309402_500876023262527_1794795456_n.jpg): No such file or directory' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:206
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/te...', 'C:\xampp\htdocs...', 206, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(206): unlink('media/temp/vqoh...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(323): Model_Private_Gallery->addImage(Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 212 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:323
2012-12-06 05:56:11 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(323): Model_Private_Gallery->addImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:323
2012-12-06 06:19:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: image ~ APPPATH\views\private\pages\gallery\edit_image.php [ 59 ] in C:\xampp\htdocs\r1812\application\views\private\pages\gallery\edit_image.php:59
2012-12-06 06:19:03 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\views\private\pages\gallery\edit_image.php(59): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 59, Array)
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
#14 {main} in C:\xampp\htdocs\r1812\application\views\private\pages\gallery\edit_image.php:59
2012-12-06 06:56:59 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT\media\temp\vqohis59eg1qp3us8umkt0ek73 ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 06:56:59 --- DEBUG: #0 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('media/temp/vqoh...')
#1 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('media/temp/vqoh...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(430): Kohana_Image::factory('media/temp/vqoh...')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 07:01:35 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'Undefined index: id' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:244
Stack trace:
#0 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(244): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 244, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(455): Model_Private_Gallery->editImage(Array)
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 269 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:455
2012-12-06 07:01:35 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(455): Model_Private_Gallery->editImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:455
2012-12-06 07:02:20 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'Undefined index: id' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:244
Stack trace:
#0 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(244): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 244, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(455): Model_Private_Gallery->editImage(Array)
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 269 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:455
2012-12-06 07:02:20 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(455): Model_Private_Gallery->editImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:455
2012-12-06 07:02:33 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'Undefined index: id' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:244
Stack trace:
#0 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(244): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 244, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(455): Model_Private_Gallery->editImage(Array)
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 269 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:455
2012-12-06 07:02:33 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(455): Model_Private_Gallery->editImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:455
2012-12-06 07:07:43 --- CRITICAL: Exception [ 0 ]: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`r1812`.`images`, CONSTRAINT `FK_images` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ UPDATE `images` SET `id` = '28', `src` = '487184_495497827133680_653958784_n.jpg', `album_id` = '', `title` = 'aaaaa', `description` = 'sxs', `status` = '1' WHERE `id` = '28' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] ~ APPPATH\classes\Model\Private\Gallery.php [ 269 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:457
2012-12-06 07:07:43 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(457): Model_Private_Gallery->editImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:457
2012-12-06 07:12:25 --- CRITICAL: Exception [ 0 ]: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`r1812`.`images`, CONSTRAINT `FK_images` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ UPDATE `images` SET `id` = '28', `src` = '309402_500876023262527_1794795456_n.jpg', `album_id` = '', `title` = 'ljlksajlkajsdf', `description` = 'sxs', `status` = '1' WHERE `id` = '28' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] ~ APPPATH\classes\Model\Private\Gallery.php [ 270 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:458
2012-12-06 07:12:25 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(458): Model_Private_Gallery->editImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:458
2012-12-06 07:13:49 --- CRITICAL: Exception [ 0 ]: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`r1812`.`images`, CONSTRAINT `FK_images` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ UPDATE `images` SET `id` = '28', `src` = '309402_500876023262527_1794795456_n.jpg', `album_id` = '', `title` = 'ljlksajlkajsdf', `description` = 'sxs', `status` = '1' WHERE `id` = '28' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] ~ APPPATH\classes\Model\Private\Gallery.php [ 270 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:458
2012-12-06 07:13:49 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(458): Model_Private_Gallery->editImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:458
2012-12-06 07:14:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: album_id ~ APPPATH\views\private\pages\gallery\edit_image.php [ 57 ] in C:\xampp\htdocs\r1812\application\views\private\pages\gallery\edit_image.php:57
2012-12-06 07:14:04 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\views\private\pages\gallery\edit_image.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 57, Array)
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
#14 {main} in C:\xampp\htdocs\r1812\application\views\private\pages\gallery\edit_image.php:57
2012-12-06 07:20:30 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT\media\temp\vqohis59eg1qp3us8umkt0ek73 ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 07:20:30 --- DEBUG: #0 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('media/temp/vqoh...')
#1 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('media/temp/vqoh...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(434): Kohana_Image::factory('media/temp/vqoh...')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 07:21:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: image ~ APPPATH\classes\Controller\private\Gallery.php [ 448 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:448
2012-12-06 07:21:28 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(448): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 448, Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:448
2012-12-06 07:23:47 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'rename(media/temp/vqohis59eg1qp3us8umkt0ek73/,media/resources/gallery/11/): Access is denied. (code: 5)' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:256
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'rename(media/te...', 'C:\xampp\htdocs...', 256, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(256): rename('media/temp/vqoh...', 'media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(461): Model_Private_Gallery->editImage(Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 270 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:461
2012-12-06 07:23:47 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(461): Model_Private_Gallery->editImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:461
2012-12-06 09:05:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\views\private\pages\gallery\add_image.php [ 72 ] in C:\xampp\htdocs\r1812\application\views\private\pages\gallery\add_image.php:72
2012-12-06 09:05:19 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\views\private\pages\gallery\add_image.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 72, Array)
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
#14 {main} in C:\xampp\htdocs\r1812\application\views\private\pages\gallery\add_image.php:72
2012-12-06 09:13:48 --- CRITICAL: Exception [ 0 ]: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`r1812`.`images`, CONSTRAINT `FK_images` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ INSERT INTO `images` (`src`, `album_id`, `title`, `description`, `status`) VALUES ('&_65533[1].jpeg', '', 'test1', 'test1', '0') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] ~ APPPATH\classes\Model\Private\Gallery.php [ 210 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:323
2012-12-06 09:13:48 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(323): Model_Private_Gallery->addImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:323
2012-12-06 09:30:08 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'Undefined variable: value' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:258
Stack trace:
#0 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(258): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 258, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(369): Model_Private_Gallery->delete_image(Array, '14')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 266 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:369
2012-12-06 09:30:08 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(369): Model_Private_Gallery->delete_image(Array, '14')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:369
2012-12-06 09:45:51 --- CRITICAL: Exception [ 0 ]: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`r1812`.`images`, CONSTRAINT `FK_images` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ DELETE FROM albums  WHERE id ='14'  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] ~ APPPATH\classes\Model\Private\Gallery.php [ 166 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:194
2012-12-06 09:45:51 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(194): Model_Private_Gallery->delete_albums('14')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_album()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:194
2012-12-06 09:48:11 --- CRITICAL: Exception [ 0 ]: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`r1812`.`images`, CONSTRAINT `FK_images` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ DELETE FROM albums  WHERE id ='14'  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] ~ APPPATH\classes\Model\Private\Gallery.php [ 167 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:194
2012-12-06 09:48:11 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(194): Model_Private_Gallery->delete_albums('14')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_album()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:194
2012-12-06 09:50:54 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/resources/gallery/14/thumbs) [function.unlink]: Permission denied' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:157
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/re...', 'C:\xampp\htdocs...', 157, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(157): unlink('media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(194): Model_Private_Gallery->delete_albums('14')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_album()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 167 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:194
2012-12-06 09:50:54 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(194): Model_Private_Gallery->delete_albums('14')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_album()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:194
2012-12-06 09:52:17 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/resources/gallery/14/thumbs) [function.unlink]: Permission denied' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:156
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/re...', 'C:\xampp\htdocs...', 156, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(156): unlink('media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(194): Model_Private_Gallery->delete_albums('14')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_album()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 167 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:194
2012-12-06 09:52:17 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(194): Model_Private_Gallery->delete_albums('14')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_album()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:194
2012-12-06 09:55:44 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/resources/gallery/14/thumbs) [function.unlink]: Permission denied' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:156
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/re...', 'C:\xampp\htdocs...', 156, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(156): unlink('media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(194): Model_Private_Gallery->delete_albums('14')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_album()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 167 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:194
2012-12-06 09:55:44 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(194): Model_Private_Gallery->delete_albums('14')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_album()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:194
2012-12-06 09:57:16 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/resources/gallery/14/thumbs) [function.unlink]: Permission denied' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:156
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/re...', 'C:\xampp\htdocs...', 156, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(156): unlink('media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(194): Model_Private_Gallery->delete_albums('14')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_album()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 167 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:194
2012-12-06 09:57:16 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(194): Model_Private_Gallery->delete_albums('14')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_album()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:194
2012-12-06 10:06:58 --- CRITICAL: Exception [ 0 ]: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`r1812`.`images`, CONSTRAINT `FK_images` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ DELETE FROM albums  WHERE id ='17'  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] ~ APPPATH\classes\Model\Private\Gallery.php [ 174 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:194
2012-12-06 10:06:58 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(194): Model_Private_Gallery->delete_albums('17')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_album()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:194
2012-12-06 10:07:39 --- CRITICAL: Exception [ 0 ]: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`r1812`.`images`, CONSTRAINT `FK_images` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ DELETE FROM albums  WHERE id ='17'  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] ~ APPPATH\classes\Model\Private\Gallery.php [ 174 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:194
2012-12-06 10:07:39 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(194): Model_Private_Gallery->delete_albums('17')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_album()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:194
2012-12-06 11:07:17 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT\media\temp\3lsbo8qu632n3kfl0cee4ean20 ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:07:17 --- DEBUG: #0 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('media/temp/3lsb...')
#1 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('media/temp/3lsb...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(440): Kohana_Image::factory('media/temp/3lsb...')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:12:07 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT\media\temp\3lsbo8qu632n3kfl0cee4ean20 ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:12:07 --- DEBUG: #0 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('media/temp/3lsb...')
#1 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('media/temp/3lsb...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(440): Kohana_Image::factory('media/temp/3lsb...')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:14:37 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT\media\temp\3lsbo8qu632n3kfl0cee4ean20 ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:14:37 --- DEBUG: #0 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('media/temp/3lsb...')
#1 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('media/temp/3lsb...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(440): Kohana_Image::factory('media/temp/3lsb...')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:16:00 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT\media\temp\3lsbo8qu632n3kfl0cee4ean20 ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:16:00 --- DEBUG: #0 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('media/temp/3lsb...')
#1 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('media/temp/3lsb...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(440): Kohana_Image::factory('media/temp/3lsb...')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:16:41 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT\media\temp\3lsbo8qu632n3kfl0cee4ean20 ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:16:41 --- DEBUG: #0 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('media/temp/3lsb...')
#1 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('media/temp/3lsb...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(439): Kohana_Image::factory('media/temp/3lsb...')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:17:14 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT\media\temp\3lsbo8qu632n3kfl0cee4ean20 ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:17:14 --- DEBUG: #0 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('media/temp/3lsb...')
#1 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('media/temp/3lsb...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(439): Kohana_Image::factory('media/temp/3lsb...')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:17:49 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT\media\temp\3lsbo8qu632n3kfl0cee4ean20 ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:17:49 --- DEBUG: #0 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('media/temp/3lsb...')
#1 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('media/temp/3lsb...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(439): Kohana_Image::factory('media/temp/3lsb...')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:18:29 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT\media\temp\3lsbo8qu632n3kfl0cee4ean20 ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:18:29 --- DEBUG: #0 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('media/temp/3lsb...')
#1 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('media/temp/3lsb...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(439): Kohana_Image::factory('media/temp/3lsb...')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:19:02 --- CRITICAL: Kohana_Exception [ 0 ]: Not an image or invalid image: DOCROOT\media\temp\3lsbo8qu632n3kfl0cee4ean20 ~ MODPATH\image\classes\Kohana\Image.php [ 107 ] in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 11:19:02 --- DEBUG: #0 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php(91): Kohana_Image->__construct('media/temp/3lsb...')
#1 C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image.php(54): Kohana_Image_GD->__construct('media/temp/3lsb...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(439): Kohana_Image::factory('media/temp/3lsb...')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\r1812\modules\image\classes\Kohana\Image\GD.php:91
2012-12-06 12:52:14 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(media/temp/3lsbo8qu632n3kfl0cee4ean20/7FSV?2SOd) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\private\Gallery.php [ 440 ] in :
2012-12-06 12:52:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\xampp\htdocs...', 440, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(440): move_uploaded_file('C:\xampp\tmp\ph...', 'media/temp/3lsb...')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} in :
2012-12-06 13:11:40 --- CRITICAL: Exception [ 0 ]: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`r1812`.`images`, CONSTRAINT `FK_images` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`)) [ INSERT INTO `images` (`src`, `album_id`, `title`, `description`, `status`) VALUES ('stDJE7YuV.jpeg', '', 'test1', 'z', '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] ~ APPPATH\classes\Model\Private\Gallery.php [ 233 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:331
2012-12-06 13:11:40 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(331): Model_Private_Gallery->addImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:331
2012-12-06 13:12:31 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(media/temp/3lsbo8qu632n3kfl0cee4ean20/t04V?JN1P.JPG) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\private\Gallery.php [ 310 ] in :
2012-12-06 13:12:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\xampp\htdocs...', 310, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(310): move_uploaded_file('C:\xampp\tmp\ph...', 'media/temp/3lsb...')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} in :
2012-12-06 13:16:04 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/resources/gallery/23/3.JPG) [function.unlink]: No such file or directory' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:328
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/re...', 'C:\xampp\htdocs...', 328, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(328): unlink('media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(494): Model_Private_Gallery->delete_image(Array, '23')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 336 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:494
2012-12-06 13:16:04 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(494): Model_Private_Gallery->delete_image(Array, '23')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_delete_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:494
2012-12-06 13:16:31 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'unlink(media/resources/gallery/23/3.JPG) [function.unlink]: No such file or directory' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:279
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(media/re...', 'C:\xampp\htdocs...', 279, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(279): unlink('media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(465): Model_Private_Gallery->editImage(Array, '3.JPG')
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 303 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:465
2012-12-06 13:16:31 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(465): Model_Private_Gallery->editImage(Array, '3.JPG')
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_edit_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:465
2012-12-06 13:23:30 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(media/temp/3lsbo8qu632n3kfl0cee4ean20/x03?wV!u5.jpg) [function.move-uploaded-file]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\private\Gallery.php [ 309 ] in :
2012-12-06 13:23:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'C:\xampp\htdocs...', 309, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(309): move_uploaded_file('C:\xampp\tmp\ph...', 'media/temp/3lsb...')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} in :
2012-12-06 13:29:56 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'rename(media/temp/3lsbo8qu632n3kfl0cee4ean20/0306_7.jpg,media/resources/gallery/26/0306_7.jpg) [function.rename]: The system cannot find the file specified. (code: 2)' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:220
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'rename(media/te...', 'C:\xampp\htdocs...', 220, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(220): rename('media/temp/3lsb...', 'media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(331): Model_Private_Gallery->addImage(Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 233 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:331
2012-12-06 13:29:56 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(331): Model_Private_Gallery->addImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:331
2012-12-06 13:35:59 --- CRITICAL: ErrorException [ 2 ]: rename(media/temp/3lsbo8qu632n3kfl0cee4ean20/037.jpg,media/temp/3lsbo8qu632n3kfl0cee4ean20/B?ruz8ZMU.jpg) [function.rename]: No such file or directory ~ APPPATH\classes\Controller\private\Gallery.php [ 322 ] in :
2012-12-06 13:35:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rename(media/te...', 'C:\xampp\htdocs...', 322, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(322): rename('media/temp/3lsb...', 'media/temp/3lsb...')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} in :
2012-12-06 13:39:35 --- CRITICAL: ErrorException [ 2 ]: rename(media/temp/3lsbo8qu632n3kfl0cee4ean20/thumb_1,media/temp/3lsbo8qu632n3kfl0cee4ean20/thumb_poP5Ze8q@.jpg) [function.rename]: The system cannot find the file specified. (code: 2) ~ APPPATH\classes\Controller\private\Gallery.php [ 324 ] in :
2012-12-06 13:39:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rename(media/te...', 'C:\xampp\htdocs...', 324, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(324): rename('media/temp/3lsb...', 'media/temp/3lsb...')
#2 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#8 {main} in :
2012-12-06 13:41:28 --- CRITICAL: Exception [ 0 ]: exception 'ErrorException' with message 'rename(media/temp/3lsbo8qu632n3kfl0cee4ean20/1,media/resources/gallery/26/1) [function.rename]: The system cannot find the file specified. (code: 2)' in C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php:220
Stack trace:
#0 [internal function]: Kohana_Core::error_handler(2, 'rename(media/te...', 'C:\xampp\htdocs...', 220, Array)
#1 C:\xampp\htdocs\r1812\application\classes\Model\Private\Gallery.php(220): rename('media/temp/3lsb...', 'media/resources...')
#2 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(334): Model_Private_Gallery->addImage(Array)
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#6 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#9 {main} ~ APPPATH\classes\Model\Private\Gallery.php [ 233 ] in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:334
2012-12-06 13:41:28 --- DEBUG: #0 C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php(334): Model_Private_Gallery->addImage(Array)
#1 C:\xampp\htdocs\r1812\system\classes\Kohana\Controller.php(84): Controller_Private_Gallery->action_do_add_image()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Private_Gallery))
#4 C:\xampp\htdocs\r1812\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\r1812\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\r1812\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\r1812\application\classes\Controller\private\Gallery.php:334