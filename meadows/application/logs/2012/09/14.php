<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-14 23:36:38 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-09-14 23:36:38 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('SHSESS', NULL)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(202): Kohana_Cookie::get('SHSESS')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(108): Kohana_Request::factory()
#3 {main}
2012-09-14 23:37:38 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-09-14 23:37:38 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('SHSESS', NULL)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(202): Kohana_Cookie::get('SHSESS')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(108): Kohana_Request::factory()
#3 {main}
2012-09-14 23:51:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-14 23:51:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-14 23:52:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-09-14 23:52:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-14 23:54:56 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Meadows::$version ~ APPPATH/bootstrap.php [ 125 ]
2012-09-14 23:54:56 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Meadows::$version ~ APPPATH/bootstrap.php [ 125 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-14 23:55:14 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ APPPATH/classes/controller/home.php [ 3 ]
2012-09-14 23:55:14 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Base' not found ~ APPPATH/classes/controller/home.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-14 23:55:21 --- ERROR: ErrorException [ 1 ]: Class 'HB' not found ~ APPPATH/classes/controller/site/base.php [ 56 ]
2012-09-14 23:55:21 --- STRACE: ErrorException [ 1 ]: Class 'HB' not found ~ APPPATH/classes/controller/site/base.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-14 23:56:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_User' not found ~ APPPATH/classes/controller/site/base.php [ 16 ]
2012-09-14 23:56:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_User' not found ~ APPPATH/classes/controller/site/base.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-14 23:58:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Home::$_template_path ~ APPPATH/classes/controller/home.php [ 7 ]
2012-09-14 23:58:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Home::$_template_path ~ APPPATH/classes/controller/home.php [ 7 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/home.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/caleb/Si...', 7, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-14 23:58:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$_template_path ~ APPPATH/classes/controller/home.php [ 7 ]
2012-09-14 23:58:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$_template_path ~ APPPATH/classes/controller/home.php [ 7 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/home.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/caleb/Si...', 7, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#6 {main}