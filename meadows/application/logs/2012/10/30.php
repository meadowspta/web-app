<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-30 19:00:08 --- ERROR: ErrorException [ 1 ]: Interface 'Twig_LoaderInterface' not found ~ /Users/caleb/Sites/meadowsmillbrae.com/docroot_kohana/modules/kohana-twig/classes/twig/loader/kohana.php [ 9 ]
2012-10-30 19:00:08 --- STRACE: ErrorException [ 1 ]: Interface 'Twig_LoaderInterface' not found ~ /Users/caleb/Sites/meadowsmillbrae.com/docroot_kohana/modules/kohana-twig/classes/twig/loader/kohana.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-30 19:00:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Home::$twig_js ~ /Users/caleb/Sites/meadowsmillbrae.com/docroot_kohana/application/classes/controller/site/base.php [ 120 ]
2012-10-30 19:00:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Home::$twig_js ~ /Users/caleb/Sites/meadowsmillbrae.com/docroot_kohana/application/classes/controller/site/base.php [ 120 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot_kohana/application/classes/controller/site/base.php(120): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/caleb/Si...', 120, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot_kohana/application/classes/controller/site/base.php(34): Controller_Site_Base->twig_media('js')
#2 [internal function]: Controller_Site_Base->before()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot_kohana/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot_kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot_kohana/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-30 19:00:25 --- ERROR: ErrorException [ 1 ]: Interface 'Twig_LoaderInterface' not found ~ /Users/caleb/Sites/meadowsmillbrae.com/docroot_kohana/modules/kohana-twig/classes/twig/loader/kohana.php [ 9 ]
2012-10-30 19:00:25 --- STRACE: ErrorException [ 1 ]: Interface 'Twig_LoaderInterface' not found ~ /Users/caleb/Sites/meadowsmillbrae.com/docroot_kohana/modules/kohana-twig/classes/twig/loader/kohana.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-30 19:01:08 --- ERROR: ErrorException [ 1 ]: Interface 'Twig_LoaderInterface' not found ~ /Users/caleb/Sites/meadowsmillbrae.com/docroot_kohana/modules/kohana-twig/classes/twig/loader/kohana.php [ 9 ]
2012-10-30 19:01:08 --- STRACE: ErrorException [ 1 ]: Interface 'Twig_LoaderInterface' not found ~ /Users/caleb/Sites/meadowsmillbrae.com/docroot_kohana/modules/kohana-twig/classes/twig/loader/kohana.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}