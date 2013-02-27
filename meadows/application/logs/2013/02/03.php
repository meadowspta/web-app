<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-03 00:20:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/post.php [ 53 ]
2013-02-03 00:20:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/post.php [ 53 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-03 00:22:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post/assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-02-03 00:22:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post/assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-03 00:33:18 --- ERROR: ErrorException [ 8 ]: Undefined index: slug ~ APPPATH/classes/model/post.php [ 11 ]
2013-02-03 00:33:18 --- STRACE: ErrorException [ 8 ]: Undefined index: slug ~ APPPATH/classes/model/post.php [ 11 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/model/post.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/caleb/Si...', 11, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1075): Model_Post->before_save('update')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(141): Mongo_Document->save()
#3 [internal function]: Controller_Post->action_edit()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-03 00:37:59 --- ERROR: MongoException [ 0 ]: Cannot find Post without _id or other search criteria. ~ MODPATH/mongodb-php-odm/classes/mongo/document.php [ 979 ]
2013-02-03 00:37:59 --- STRACE: MongoException [ 0 ]: Cannot find Post without _id or other search criteria. ~ MODPATH/mongodb-php-odm/classes/mongo/document.php [ 979 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(158): Mongo_Document->load()
#1 [internal function]: Controller_Post->action_edit()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#6 {main}