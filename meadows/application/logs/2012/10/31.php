<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-31 04:54:23 --- ERROR: ErrorException [ 1 ]: Call to protected method Meadows_Document::init() from context 'Controller_Home' ~ APPPATH/classes/controller/home.php [ 7 ]
2012-10-31 04:54:23 --- STRACE: ErrorException [ 1 ]: Call to protected method Meadows_Document::init() from context 'Controller_Home' ~ APPPATH/classes/controller/home.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-31 04:54:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: this ~ APPPATH/classes/meadows/document.php [ 21 ]
2012-10-31 04:54:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: this ~ APPPATH/classes/meadows/document.php [ 21 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/document.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/caleb/Si...', 21, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/home.php(7): Meadows_Document::init()
#2 [internal function]: Controller_Home->action_index()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#7 {main}