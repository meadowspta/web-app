<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-13 15:00:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-13 15:00:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 15:03:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post/assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-13 15:03:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post/assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 15:14:19 --- ERROR: ErrorException [ 8 ]: Undefined index:  admin ~ APPPATH/classes/model/user.php [ 15 ]
2012-12-13 15:14:19 --- STRACE: ErrorException [ 8 ]: Undefined index:  admin ~ APPPATH/classes/model/user.php [ 15 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/model/user.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/caleb/Si...', 15, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1031): Model_User->before_save('insert')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/user/dbinit.php(52): Mongo_Document->save()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_User_Dbinit->execute(Array)
#4 [internal function]: Controller_Minion->action_execute()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-13 15:22:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/post.php [ 147 ]
2012-12-13 15:22:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/controller/post.php [ 147 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-13 15:22:33 --- ERROR: Exception [ 0 ]: Method not found by User: find ~ MODPATH/mongodb-php-odm/classes/mongo/document.php [ 485 ]
2012-12-13 15:22:33 --- STRACE: Exception [ 0 ]: Method not found by User: find ~ MODPATH/mongodb-php-odm/classes/mongo/document.php [ 485 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/document.php(156): Mongo_Document->__call('find', Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/user.php(12): Meadows_Document->__call('find', Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/user.php(12): User->find(Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(147): User::get_user_with_access('create a post')
#4 [internal function]: Controller_Post->action_edit()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-13 15:24:07 --- ERROR: MongoCursorException [ 12580 ]: invalid query: db.users.find({"status":1,"access":{"$in":"create a post"}}) ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 1074 ]
2012-12-13 15:24:07 --- STRACE: MongoCursorException [ 12580 ]: invalid query: db.users.find({"status":1,"access":{"$in":"create a post"}}) ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 1074 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(149): Mongo_Collection->rewind()
#1 [internal function]: Controller_Post->action_edit()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#6 {main}