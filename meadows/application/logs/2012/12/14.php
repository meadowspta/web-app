<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-14 00:11:01 --- ERROR: MongoCursorException [ 12580 ]: invalid query: db.users.find({"status":1,"access":{"$in":"create a post"}}) ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 1074 ]
2012-12-14 00:11:01 --- STRACE: MongoCursorException [ 12580 ]: invalid query: db.users.find({"status":1,"access":{"$in":"create a post"}}) ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 1074 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(149): Mongo_Collection->rewind()
#1 [internal function]: Controller_Post->action_edit()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-14 00:11:06 --- ERROR: MongoCursorException [ 12580 ]: invalid query: db.users.find({"status":1,"access":{"$in":"create a post"}}) ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 1074 ]
2012-12-14 00:11:06 --- STRACE: MongoCursorException [ 12580 ]: invalid query: db.users.find({"status":1,"access":{"$in":"create a post"}}) ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 1074 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(149): Mongo_Collection->rewind()
#1 [internal function]: Controller_Post->action_edit()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-14 00:23:19 --- ERROR: MongoCursorException [ 12580 ]: invalid query: db.users.find({"status":1,"access":{"$in":"create a post"}}) ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 1074 ]
2012-12-14 00:23:19 --- STRACE: MongoCursorException [ 12580 ]: invalid query: db.users.find({"status":1,"access":{"$in":"create a post"}}) ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 1074 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(149): Mongo_Collection->rewind()
#1 [internal function]: Controller_Post->action_edit()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-14 00:23:43 --- ERROR: MongoCursorException [ 12580 ]: invalid query: db.users.find({"status":1,"access":{"$in":"create a post"}}) ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 1074 ]
2012-12-14 00:23:43 --- STRACE: MongoCursorException [ 12580 ]: invalid query: db.users.find({"status":1,"access":{"$in":"create a post"}}) ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 1074 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(149): Mongo_Collection->rewind()
#1 [internal function]: Controller_Post->action_edit()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-14 00:36:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page/assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-12-14 00:36:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page/assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}