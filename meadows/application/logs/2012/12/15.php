<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-15 06:11:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/meals/menus/Meadows_Lunch_Menu_December_2012 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 06:11:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/meals/menus/Meadows_Lunch_Menu_December_2012 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 06:12:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/meals/menus/Meadows_Lunch_Menu_December_2012.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 06:12:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/meals/menus/Meadows_Lunch_Menu_December_2012.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 06:12:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/meals/menus/Meadows_Lunch_Menu_December_2012.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 06:12:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/meals/menus/Meadows_Lunch_Menu_December_2012.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 06:12:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/meals/menu/Meadows_Lunch_Menu_December_2012.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 06:12:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/files/meals/menu/Meadows_Lunch_Menu_December_2012.pdf ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 06:49:56 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH/classes/controller/post.php [ 120 ]
2012-12-15 06:49:56 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH/classes/controller/post.php [ 120 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-15 07:02:39 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 268 ]
2012-12-15 07:02:39 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 268 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(268): Kohana_Core::error_handler(8, 'Uninitialized s...', '/Users/caleb/Si...', 268, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(62): Mongo_Collection->find(NULL)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(15): Post::get_recent(15)
#3 [internal function]: Controller_Post->action_index()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-15 07:02:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH/classes/post.php [ 62 ]
2012-12-15 07:02:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH/classes/post.php [ 62 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/caleb/Si...', 62, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(15): Post::get_recent(15)
#2 [internal function]: Controller_Post->action_index()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#7 {main}
2012-12-15 07:03:05 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 268 ]
2012-12-15 07:03:05 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 268 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(268): Kohana_Core::error_handler(8, 'Uninitialized s...', '/Users/caleb/Si...', 268, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(62): Mongo_Collection->find(NULL)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(15): Post::get_recent(15)
#3 [internal function]: Controller_Post->action_index()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-15 07:03:16 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 268 ]
2012-12-15 07:03:16 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 268 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(268): Kohana_Core::error_handler(8, 'Uninitialized s...', '/Users/caleb/Si...', 268, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(62): Mongo_Collection->find(NULL)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(15): Post::get_recent(15)
#3 [internal function]: Controller_Post->action_index()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-15 07:03:27 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 268 ]
2012-12-15 07:03:27 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 268 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(268): Kohana_Core::error_handler(8, 'Uninitialized s...', '/Users/caleb/Si...', 268, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(62): Mongo_Collection->find(NULL)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(15): Post::get_recent(15)
#3 [internal function]: Controller_Post->action_index()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-15 07:03:28 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 268 ]
2012-12-15 07:03:28 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 268 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(268): Kohana_Core::error_handler(8, 'Uninitialized s...', '/Users/caleb/Si...', 268, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(62): Mongo_Collection->find(NULL)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(15): Post::get_recent(15)
#3 [internal function]: Controller_Post->action_index()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-15 07:03:37 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 268 ]
2012-12-15 07:03:37 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 268 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(268): Kohana_Core::error_handler(8, 'Uninitialized s...', '/Users/caleb/Si...', 268, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(62): Mongo_Collection->find(NULL)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(15): Post::get_recent(15)
#3 [internal function]: Controller_Post->action_index()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-15 07:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:08:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:08:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:09:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:09:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:09:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:09:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:09:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:09:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:09:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:09:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:09:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:09:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:09:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:09:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:09:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:09:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:14:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:14:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:15:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:15:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:15:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:15:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:15:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:15:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:15:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:15:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:15:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:15:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:16:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:16:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:16:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:16:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:16:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:16:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:16:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:16:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:16:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:16:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:16:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:16:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:16:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:16:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:16:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:16:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:16:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:16:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:17:31 --- ERROR: Twig_Error_Syntax [ 0 ]: The filter "bool2Text" does not exist in "post/index.html" at line 14 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php [ 559 ]
2012-12-15 07:17:31 --- STRACE: Twig_Error_Syntax [ 0 ]: The filter "bool2Text" does not exist in "post/index.html" at line 14 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php [ 559 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(424): Twig_ExpressionParser->getFilterNodeClass('bool2Text', 14)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(409): Twig_ExpressionParser->parseFilterExpressionRaw(Object(Twig_Node_Expression_GetAttr))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(286): Twig_ExpressionParser->parseFilterExpression(Object(Twig_Node_Expression_GetAttr))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(175): Twig_ExpressionParser->parsePostfixExpression(Object(Twig_Node_Expression_Name))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(85): Twig_ExpressionParser->parsePrimaryExpression()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(42): Twig_ExpressionParser->getPrimary()
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/If.php(38): Twig_ExpressionParser->parseExpression()
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(192): Twig_TokenParser_If->parse(Object(Twig_Token))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/For.php(47): Twig_Parser->subparse(Array)
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(192): Twig_TokenParser_For->parse(Object(Twig_Token))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/Block.php(47): Twig_Parser->subparse(Array, true)
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(192): Twig_TokenParser_Block->parse(Object(Twig_Token))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(100): Twig_Parser->subparse(NULL, false)
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(485): Twig_Parser->parse(Object(Twig_TokenStream))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(535): Twig_Environment->parse(Object(Twig_TokenStream))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(329): Twig_Environment->compileSource('{% extends '_te...', 'post/index.html')
#16 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('post/index.html')
#17 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#18 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(80): Kohana_Controller->after()
#19 [internal function]: Controller_Site_Base->after()
#20 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post))
#21 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#22 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#23 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#24 {main}
2012-12-15 07:17:34 --- ERROR: Twig_Error_Syntax [ 0 ]: The filter "bool2Text" does not exist in "post/index.html" at line 14 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php [ 559 ]
2012-12-15 07:17:34 --- STRACE: Twig_Error_Syntax [ 0 ]: The filter "bool2Text" does not exist in "post/index.html" at line 14 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php [ 559 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(424): Twig_ExpressionParser->getFilterNodeClass('bool2Text', 14)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(409): Twig_ExpressionParser->parseFilterExpressionRaw(Object(Twig_Node_Expression_GetAttr))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(286): Twig_ExpressionParser->parseFilterExpression(Object(Twig_Node_Expression_GetAttr))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(175): Twig_ExpressionParser->parsePostfixExpression(Object(Twig_Node_Expression_Name))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(85): Twig_ExpressionParser->parsePrimaryExpression()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(42): Twig_ExpressionParser->getPrimary()
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/If.php(38): Twig_ExpressionParser->parseExpression()
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(192): Twig_TokenParser_If->parse(Object(Twig_Token))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/For.php(47): Twig_Parser->subparse(Array)
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(192): Twig_TokenParser_For->parse(Object(Twig_Token))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/Block.php(47): Twig_Parser->subparse(Array, true)
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(192): Twig_TokenParser_Block->parse(Object(Twig_Token))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(100): Twig_Parser->subparse(NULL, false)
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(485): Twig_Parser->parse(Object(Twig_TokenStream))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(535): Twig_Environment->parse(Object(Twig_TokenStream))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(329): Twig_Environment->compileSource('{% extends '_te...', 'post/index.html')
#16 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('post/index.html')
#17 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#18 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(80): Kohana_Controller->after()
#19 [internal function]: Controller_Site_Base->after()
#20 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post))
#21 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#22 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#23 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#24 {main}
2012-12-15 07:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:35:08 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Mongo_Document::set(), called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php on line 24 and defined ~ MODPATH/mongodb-php-odm/classes/mongo/document.php [ 639 ]
2012-12-15 07:35:08 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Mongo_Document::set(), called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php on line 24 and defined ~ MODPATH/mongodb-php-odm/classes/mongo/document.php [ 639 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(639): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/caleb/Si...', 639, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(24): Mongo_Document->set(1355585700)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(64): Post::add('asdf', 'asdf', 'asdf', '12/15/2012 7:35...', Array)
#3 [internal function]: Controller_Post->action_add()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-15 07:35:50 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Mongo_Document::set(), called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php on line 24 and defined ~ MODPATH/mongodb-php-odm/classes/mongo/document.php [ 639 ]
2012-12-15 07:35:50 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Mongo_Document::set(), called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php on line 24 and defined ~ MODPATH/mongodb-php-odm/classes/mongo/document.php [ 639 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(639): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/caleb/Si...', 639, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(24): Mongo_Document->set(1355585700)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(64): Post::add('asdf', 'asdf', 'asdf', '12/15/2012 7:35...', Array)
#3 [internal function]: Controller_Post->action_add()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-15 07:36:52 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Mongo_Document::set(), called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php on line 30 and defined ~ MODPATH/mongodb-php-odm/classes/mongo/document.php [ 639 ]
2012-12-15 07:36:52 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Mongo_Document::set(), called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php on line 30 and defined ~ MODPATH/mongodb-php-odm/classes/mongo/document.php [ 639 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(639): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/caleb/Si...', 639, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(30): Mongo_Document->set(1355585700)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(64): Post::add('asdf', 'asdf', 'asdf', '12/15/2012 7:35...', Array)
#3 [internal function]: Controller_Post->action_add()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-15 07:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:37:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:37:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:38:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:38:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:38:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:38:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:39:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:39:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-15 07:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-15 07:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}