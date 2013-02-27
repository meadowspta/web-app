<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-25 21:35:30 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'kohana-minion' at 'MODPATH/kohana-minion' ~ SYSPATH/classes/kohana/core.php [ 550 ]
2012-11-25 21:35:30 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'kohana-minion' at 'MODPATH/kohana-minion' ~ SYSPATH/classes/kohana/core.php [ 550 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/bootstrap.php(116): Kohana_Core::modules(Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(102): require('/Users/caleb/Si...')
#2 {main}
2012-11-25 21:36:31 --- ERROR: ErrorException [ 1 ]: Class 'Mongo' not found ~ MODPATH/mongodb-php-odm/classes/mongo/database.php [ 174 ]
2012-11-25 21:36:31 --- STRACE: ErrorException [ 1 ]: Class 'Mongo' not found ~ MODPATH/mongodb-php-odm/classes/mongo/database.php [ 174 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-25 21:36:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-25 21:36:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-25 21:49:08 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 419 ]
2012-11-25 21:49:08 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Arr::merge() must be an array, integer given, called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/config/file/reader.php on line 49 and defined ~ SYSPATH/classes/kohana/arr.php [ 419 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/arr.php(419): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/caleb/Si...', 419, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/config/file/reader.php(49): Kohana_Arr::merge(Array, 1)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('mongo')
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/database.php(111): Kohana_Config->load('mongo')
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(208): Mongo_Database::instance('default')
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(222): Mongo_Collection->db()
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(180): Mongo_Collection->collection()
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(994): Mongo_Collection->__call('findOne', Array)
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/auth-meadows/classes/kohana/auth/mongo.php(25): Mongo_Document->load()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/secure.php(27): Kohana_Auth_Mongo->logged_in()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/secure.php(15): Controller_Site_Secure->user_authentication()
#11 [internal function]: Controller_Site_Secure->before()
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#16 {main}
2012-11-25 21:51:31 --- ERROR: ErrorException [ 1 ]: Class 'Mongo' not found ~ MODPATH/mongodb-php-odm/classes/mongo/database.php [ 174 ]
2012-11-25 21:51:31 --- STRACE: ErrorException [ 1 ]: Class 'Mongo' not found ~ MODPATH/mongodb-php-odm/classes/mongo/database.php [ 174 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-25 21:52:08 --- ERROR: ErrorException [ 1 ]: Class 'Mongo' not found ~ MODPATH/mongodb-php-odm/classes/mongo/database.php [ 174 ]
2012-11-25 21:52:08 --- STRACE: ErrorException [ 1 ]: Class 'Mongo' not found ~ MODPATH/mongodb-php-odm/classes/mongo/database.php [ 174 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}