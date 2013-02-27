<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-17 01:45:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/event.php [ 40 ]
2012-11-17 01:45:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/event.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-17 01:50:03 --- ERROR: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("date() expects parameter 2 to be long, string given") in "home/index.html" at line 35. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
2012-11-17 01:50:03 --- STRACE: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("date() expects parameter 2 to be long, string given") in "home/index.html" at line 35. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/be/e3/e44247bba5a042744d8c3d3ece17.php(26): Twig_Template->display(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_bee3e44247bba5a042744d8c3d3ece17->doDisplay(Array, Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/a5/1e/42e07c03492d8cefa073d3a9d81b.php(27): Twig_Template->display(Array, Array)
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_a51e42e07c03492d8cefa073d3a9d81b->doDisplay(Array, Array)
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(250): Twig_Template->display(Array)
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Template->render(Array)
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(54): Kohana_Controller->after()
#11 [internal function]: Controller_Site_Base->after()
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#16 {main}
2012-11-17 01:50:14 --- ERROR: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("date() expects parameter 2 to be long, string given") in "home/index.html" at line 35. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
2012-11-17 01:50:14 --- STRACE: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("date() expects parameter 2 to be long, string given") in "home/index.html" at line 35. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/be/e3/e44247bba5a042744d8c3d3ece17.php(26): Twig_Template->display(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_bee3e44247bba5a042744d8c3d3ece17->doDisplay(Array, Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/a5/1e/42e07c03492d8cefa073d3a9d81b.php(27): Twig_Template->display(Array, Array)
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_a51e42e07c03492d8cefa073d3a9d81b->doDisplay(Array, Array)
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(250): Twig_Template->display(Array)
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Template->render(Array)
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(54): Kohana_Controller->after()
#11 [internal function]: Controller_Site_Base->after()
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#16 {main}
2012-11-17 10:18:31 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Meadows::$var ~ APPPATH/classes/meadows.php [ 13 ]
2012-11-17 10:18:31 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Meadows::$var ~ APPPATH/classes/meadows.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-17 11:23:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-17 11:23:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-17 11:29:15 --- ERROR: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Trying to get property of non-object") in "post/edit.html" at line 42. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
2012-11-17 11:29:15 --- STRACE: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Trying to get property of non-object") in "post/edit.html" at line 42. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/be/e3/e44247bba5a042744d8c3d3ece17.php(25): Twig_Template->display(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_bee3e44247bba5a042744d8c3d3ece17->doDisplay(Array, Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/7e/90/eacfdc891a3c0663f505f0734dae.php(27): Twig_Template->display(Array, Array)
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_7e90eacfdc891a3c0663f505f0734dae->doDisplay(Array, Array)
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(250): Twig_Template->display(Array)
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Template->render(Array)
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(54): Kohana_Controller->after()
#11 [internal function]: Controller_Site_Base->after()
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#16 {main}
2012-11-17 11:29:16 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 16880889 bytes) ~ SYSPATH/classes/kohana/kohana/exception.php [ 184 ]
2012-11-17 11:29:16 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 16880889 bytes) ~ SYSPATH/classes/kohana/kohana/exception.php [ 184 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-17 11:29:30 --- ERROR: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Trying to get property of non-object") in "post/edit.html" at line 43. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
2012-11-17 11:29:30 --- STRACE: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Trying to get property of non-object") in "post/edit.html" at line 43. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/be/e3/e44247bba5a042744d8c3d3ece17.php(25): Twig_Template->display(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_bee3e44247bba5a042744d8c3d3ece17->doDisplay(Array, Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/7e/90/eacfdc891a3c0663f505f0734dae.php(27): Twig_Template->display(Array, Array)
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_7e90eacfdc891a3c0663f505f0734dae->doDisplay(Array, Array)
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(250): Twig_Template->display(Array)
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Template->render(Array)
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(54): Kohana_Controller->after()
#11 [internal function]: Controller_Site_Base->after()
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#16 {main}
2012-11-17 11:29:31 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 20474214 bytes) ~ SYSPATH/classes/kohana/kohana/exception.php [ 184 ]
2012-11-17 11:29:31 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 20474214 bytes) ~ SYSPATH/classes/kohana/kohana/exception.php [ 184 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-17 11:29:56 --- ERROR: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Trying to get property of non-object") in "post/edit.html" at line 42. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
2012-11-17 11:29:56 --- STRACE: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Trying to get property of non-object") in "post/edit.html" at line 42. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/be/e3/e44247bba5a042744d8c3d3ece17.php(25): Twig_Template->display(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_bee3e44247bba5a042744d8c3d3ece17->doDisplay(Array, Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/7e/90/eacfdc891a3c0663f505f0734dae.php(27): Twig_Template->display(Array, Array)
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_7e90eacfdc891a3c0663f505f0734dae->doDisplay(Array, Array)
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(250): Twig_Template->display(Array)
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Template->render(Array)
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(54): Kohana_Controller->after()
#11 [internal function]: Controller_Site_Base->after()
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#16 {main}
2012-11-17 11:29:58 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 20474643 bytes) ~ SYSPATH/classes/kohana/kohana/exception.php [ 184 ]
2012-11-17 11:29:58 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 20474643 bytes) ~ SYSPATH/classes/kohana/kohana/exception.php [ 184 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-17 11:30:12 --- ERROR: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Trying to get property of non-object") in "post/edit.html" at line 42. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
2012-11-17 11:30:12 --- STRACE: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Trying to get property of non-object") in "post/edit.html" at line 42. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/be/e3/e44247bba5a042744d8c3d3ece17.php(25): Twig_Template->display(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_bee3e44247bba5a042744d8c3d3ece17->doDisplay(Array, Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/7e/90/eacfdc891a3c0663f505f0734dae.php(27): Twig_Template->display(Array, Array)
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_7e90eacfdc891a3c0663f505f0734dae->doDisplay(Array, Array)
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(250): Twig_Template->display(Array)
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Template->render(Array)
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(54): Kohana_Controller->after()
#11 [internal function]: Controller_Site_Base->after()
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#16 {main}
2012-11-17 11:30:13 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 20474643 bytes) ~ SYSPATH/classes/kohana/kohana/exception.php [ 184 ]
2012-11-17 11:30:13 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 20474643 bytes) ~ SYSPATH/classes/kohana/kohana/exception.php [ 184 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-17 11:30:14 --- ERROR: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Trying to get property of non-object") in "post/edit.html" at line 42. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
2012-11-17 11:30:14 --- STRACE: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Trying to get property of non-object") in "post/edit.html" at line 42. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/be/e3/e44247bba5a042744d8c3d3ece17.php(25): Twig_Template->display(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_bee3e44247bba5a042744d8c3d3ece17->doDisplay(Array, Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/7e/90/eacfdc891a3c0663f505f0734dae.php(27): Twig_Template->display(Array, Array)
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_7e90eacfdc891a3c0663f505f0734dae->doDisplay(Array, Array)
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(250): Twig_Template->display(Array)
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Template->render(Array)
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(54): Kohana_Controller->after()
#11 [internal function]: Controller_Site_Base->after()
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#16 {main}
2012-11-17 11:30:16 --- ERROR: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Trying to get property of non-object") in "post/edit.html" at line 42. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
2012-11-17 11:30:16 --- STRACE: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Trying to get property of non-object") in "post/edit.html" at line 42. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/be/e3/e44247bba5a042744d8c3d3ece17.php(25): Twig_Template->display(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_bee3e44247bba5a042744d8c3d3ece17->doDisplay(Array, Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/7e/90/eacfdc891a3c0663f505f0734dae.php(27): Twig_Template->display(Array, Array)
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_7e90eacfdc891a3c0663f505f0734dae->doDisplay(Array, Array)
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(250): Twig_Template->display(Array)
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Template->render(Array)
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(54): Kohana_Controller->after()
#11 [internal function]: Controller_Site_Base->after()
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#16 {main}
2012-11-17 11:30:24 --- ERROR: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Trying to get property of non-object") in "post/edit.html" at line 42. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
2012-11-17 11:30:24 --- STRACE: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Trying to get property of non-object") in "post/edit.html" at line 42. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/be/e3/e44247bba5a042744d8c3d3ece17.php(25): Twig_Template->display(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_bee3e44247bba5a042744d8c3d3ece17->doDisplay(Array, Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/7e/90/eacfdc891a3c0663f505f0734dae.php(27): Twig_Template->display(Array, Array)
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_7e90eacfdc891a3c0663f505f0734dae->doDisplay(Array, Array)
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(250): Twig_Template->display(Array)
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Template->render(Array)
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(54): Kohana_Controller->after()
#11 [internal function]: Controller_Site_Base->after()
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#16 {main}
2012-11-17 11:31:23 --- ERROR: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Trying to get property of non-object") in "post/edit.html" at line 42. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
2012-11-17 11:31:23 --- STRACE: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Trying to get property of non-object") in "post/edit.html" at line 42. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/be/e3/e44247bba5a042744d8c3d3ece17.php(25): Twig_Template->display(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_bee3e44247bba5a042744d8c3d3ece17->doDisplay(Array, Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/7e/90/eacfdc891a3c0663f505f0734dae.php(27): Twig_Template->display(Array, Array)
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_7e90eacfdc891a3c0663f505f0734dae->doDisplay(Array, Array)
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(250): Twig_Template->display(Array)
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Template->render(Array)
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(54): Kohana_Controller->after()
#11 [internal function]: Controller_Site_Base->after()
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#16 {main}
2012-11-17 11:53:14 --- ERROR: ErrorException [ 8 ]: Object of class MongoId could not be converted to int ~ APPPATH/classes/post.php [ 83 ]
2012-11-17 11:53:14 --- STRACE: ErrorException [ 8 ]: Object of class MongoId could not be converted to int ~ APPPATH/classes/post.php [ 83 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(83): Kohana_Core::error_handler(8, 'Object of class...', '/Users/caleb/Si...', 83, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(51): Post::remove_main_story(Object(Post))
#2 [internal function]: Controller_Post->action_edit()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-17 11:54:26 --- ERROR: ErrorException [ 8 ]: Object of class MongoId could not be converted to int ~ APPPATH/classes/post.php [ 83 ]
2012-11-17 11:54:26 --- STRACE: ErrorException [ 8 ]: Object of class MongoId could not be converted to int ~ APPPATH/classes/post.php [ 83 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(83): Kohana_Core::error_handler(8, 'Object of class...', '/Users/caleb/Si...', 83, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(51): Post::remove_main_story(Object(Post))
#2 [internal function]: Controller_Post->action_edit()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-17 11:56:03 --- ERROR: ErrorException [ 8 ]: Object of class MongoId could not be converted to int ~ APPPATH/classes/post.php [ 83 ]
2012-11-17 11:56:03 --- STRACE: ErrorException [ 8 ]: Object of class MongoId could not be converted to int ~ APPPATH/classes/post.php [ 83 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(83): Kohana_Core::error_handler(8, 'Object of class...', '/Users/caleb/Si...', 83, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(51): Post::remove_main_story(Object(Post))
#2 [internal function]: Controller_Post->action_edit()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-17 11:56:53 --- ERROR: ErrorException [ 8 ]: Object of class MongoId could not be converted to int ~ APPPATH/classes/post.php [ 83 ]
2012-11-17 11:56:53 --- STRACE: ErrorException [ 8 ]: Object of class MongoId could not be converted to int ~ APPPATH/classes/post.php [ 83 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(83): Kohana_Core::error_handler(8, 'Object of class...', '/Users/caleb/Si...', 83, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(51): Post::remove_main_story(Object(Post))
#2 [internal function]: Controller_Post->action_edit()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-17 11:57:08 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Post::set_main_story() must be an instance of Model_Post, null given, called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php on line 85 and defined ~ APPPATH/classes/post.php [ 57 ]
2012-11-17 11:57:08 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Post::set_main_story() must be an instance of Model_Post, null given, called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php on line 85 and defined ~ APPPATH/classes/post.php [ 57 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(57): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/caleb/Si...', 57, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(85): Post::set_main_story(NULL)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(51): Post::remove_main_story(Object(Post))
#3 [internal function]: Controller_Post->action_edit()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-17 14:36:38 --- ERROR: Twig_Error_Syntax [ 0 ]: The function "help_text" does not exist in "post/edit.html" at line 33 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Node/Expression/Function.php [ 28 ]
2012-11-17 14:36:38 --- STRACE: Twig_Error_Syntax [ 0 ]: The function "help_text" does not exist in "post/edit.html" at line 33 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Node/Expression/Function.php [ 28 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Compiler.php(87): Twig_Node_Expression_Function->compile(Object(Twig_Compiler))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/Expression/Binary/Range.php(24): Twig_Compiler->subcompile(Object(Twig_Node_Expression_Function))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Compiler.php(87): Twig_Node_Expression_Binary_Range->compile(Object(Twig_Compiler))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/Expression/Filter.php(50): Twig_Compiler->subcompile(Object(Twig_Node_Expression_Binary_Range))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/Expression/Filter.php(32): Twig_Node_Expression_Filter->compileFilter(Object(Twig_Compiler), Object(Twig_Filter_Function))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Compiler.php(87): Twig_Node_Expression_Filter->compile(Object(Twig_Compiler))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/Print.php(36): Twig_Compiler->subcompile(Object(Twig_Node_Expression_Filter))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node.php(106): Twig_Node_Print->compile(Object(Twig_Compiler))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node.php(106): Twig_Node->compile(Object(Twig_Compiler))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Compiler.php(87): Twig_Node->compile(Object(Twig_Compiler))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/Block.php(40): Twig_Compiler->subcompile(Object(Twig_Node))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node.php(106): Twig_Node_Block->compile(Object(Twig_Compiler))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node.php(106): Twig_Node->compile(Object(Twig_Compiler))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Compiler.php(87): Twig_Node->compile(Object(Twig_Compiler))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/Module.php(66): Twig_Compiler->subcompile(Object(Twig_Node))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/Module.php(39): Twig_Node_Module->compileTemplate(Object(Twig_Compiler))
#16 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Compiler.php(76): Twig_Node_Module->compile(Object(Twig_Compiler))
#17 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(522): Twig_Compiler->compile(Object(Twig_Node_Module))
#18 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(536): Twig_Environment->compile(Object(Twig_Node_Module))
#19 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(330): Twig_Environment->compileSource('{% extends '_te...', 'post/edit.html')
#20 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('post/edit.html')
#21 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#22 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(54): Kohana_Controller->after()
#23 [internal function]: Controller_Site_Base->after()
#24 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post))
#25 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#26 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#27 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#28 {main}
2012-11-17 14:36:40 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 22882721 bytes) ~ SYSPATH/classes/kohana/kohana/exception.php [ 184 ]
2012-11-17 14:36:40 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 22882721 bytes) ~ SYSPATH/classes/kohana/kohana/exception.php [ 184 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-17 15:12:02 --- ERROR: ErrorException [ 1 ]: Call to undefined function Meadows_Image() ~ APPPATH/classes/controller/post.php [ 48 ]
2012-11-17 15:12:02 --- STRACE: ErrorException [ 1 ]: Call to undefined function Meadows_Image() ~ APPPATH/classes/controller/post.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-17 15:12:21 --- ERROR: ErrorException [ 1 ]: Class 'Meadows_Image' not found ~ APPPATH/classes/controller/post.php [ 48 ]
2012-11-17 15:12:21 --- STRACE: ErrorException [ 1 ]: Class 'Meadows_Image' not found ~ APPPATH/classes/controller/post.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-17 15:12:25 --- ERROR: ErrorException [ 1 ]: Class 'Meadows_Image' not found ~ APPPATH/classes/controller/post.php [ 48 ]
2012-11-17 15:12:25 --- STRACE: ErrorException [ 1 ]: Class 'Meadows_Image' not found ~ APPPATH/classes/controller/post.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-17 15:15:11 --- ERROR: ErrorException [ 8 ]: Undefined index: x-file-name ~ APPPATH/classes/meadows/image.php [ 35 ]
2012-11-17 15:15:11 --- STRACE: ErrorException [ 8 ]: Undefined index: x-file-name ~ APPPATH/classes/meadows/image.php [ 35 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(35): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/caleb/Si...', 35, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(49): Meadows_Image->upload(Array)
#2 [internal function]: Controller_Post->action_edit()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-17 15:20:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Meadows_Image::$headers ~ APPPATH/classes/meadows/image.php [ 196 ]
2012-11-17 15:20:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Meadows_Image::$headers ~ APPPATH/classes/meadows/image.php [ 196 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(196): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/caleb/Si...', 196, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(34): Meadows_Image->exceeds_file_limit()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(49): Meadows_Image->upload(Array)
#3 [internal function]: Controller_Post->action_edit()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-17 15:21:39 --- ERROR: ErrorException [ 8 ]: Undefined property: Meadows_Image::$files ~ APPPATH/classes/meadows/image.php [ 196 ]
2012-11-17 15:21:39 --- STRACE: ErrorException [ 8 ]: Undefined property: Meadows_Image::$files ~ APPPATH/classes/meadows/image.php [ 196 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(196): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/caleb/Si...', 196, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(34): Meadows_Image->exceeds_file_limit()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(49): Meadows_Image->upload(Array)
#3 [internal function]: Controller_Post->action_edit()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-17 15:21:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Meadows_Image::$files ~ APPPATH/classes/meadows/image.php [ 36 ]
2012-11-17 15:21:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Meadows_Image::$files ~ APPPATH/classes/meadows/image.php [ 36 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/caleb/Si...', 36, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(49): Meadows_Image->upload(Array)
#2 [internal function]: Controller_Post->action_edit()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-17 15:22:15 --- ERROR: ErrorException [ 8 ]: Undefined property: Meadows_Image::$files ~ APPPATH/classes/meadows/image.php [ 36 ]
2012-11-17 15:22:15 --- STRACE: ErrorException [ 8 ]: Undefined property: Meadows_Image::$files ~ APPPATH/classes/meadows/image.php [ 36 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/caleb/Si...', 36, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(49): Meadows_Image->upload(Array)
#2 [internal function]: Controller_Post->action_edit()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-17 15:22:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Meadows_Image::$files ~ APPPATH/classes/meadows/image.php [ 36 ]
2012-11-17 15:22:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Meadows_Image::$files ~ APPPATH/classes/meadows/image.php [ 36 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/caleb/Si...', 36, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(49): Meadows_Image->upload(Array)
#2 [internal function]: Controller_Post->action_edit()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-17 15:26:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Meadows_Image::check_supported_types() ~ APPPATH/classes/meadows/image.php [ 35 ]
2012-11-17 15:26:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Meadows_Image::check_supported_types() ~ APPPATH/classes/meadows/image.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-17 15:32:50 --- ERROR: ErrorException [ 2 ]: explode() expects at least 2 parameters, 1 given ~ APPPATH/classes/meadows/image.php [ 389 ]
2012-11-17 15:32:50 --- STRACE: ErrorException [ 2 ]: explode() expects at least 2 parameters, 1 given ~ APPPATH/classes/meadows/image.php [ 389 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Users/caleb/Si...', 389, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(389): explode(Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(38): Meadows_Image->check_directory()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(49): Meadows_Image->upload(Array)
#4 [internal function]: Controller_Post->action_edit()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-17 15:33:03 --- ERROR: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ APPPATH/classes/meadows/image.php [ 389 ]
2012-11-17 15:33:03 --- STRACE: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ APPPATH/classes/meadows/image.php [ 389 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', '/Users/caleb/Si...', 389, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(389): explode('/', Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(38): Meadows_Image->check_directory()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(49): Meadows_Image->upload(Array)
#4 [internal function]: Controller_Post->action_edit()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-17 15:42:23 --- ERROR: ErrorException [ 8 ]: Undefined index:  posts ~ APPPATH/classes/meadows/image.php [ 414 ]
2012-11-17 15:42:23 --- STRACE: ErrorException [ 8 ]: Undefined index:  posts ~ APPPATH/classes/meadows/image.php [ 414 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(414): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/caleb/Si...', 414, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(42): Meadows_Image->generate_images()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(55): Meadows_Image->upload(Array)
#3 [internal function]: Controller_Post->action_edit()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-17 15:46:29 --- ERROR: Kohana_Exception [ 0 ]: Imagick is not installed, or the extension is not loaded ~ MODPATH/image/classes/kohana/image/imagick.php [ 28 ]
2012-11-17 15:46:29 --- STRACE: Kohana_Exception [ 0 ]: Imagick is not installed, or the extension is not loaded ~ MODPATH/image/classes/kohana/image/imagick.php [ 28 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/image/classes/kohana/image/imagick.php(45): Kohana_Image_Imagick::check()
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/image/classes/kohana/image.php(54): Kohana_Image_Imagick->__construct('/Applications/M...')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(195): Kohana_Image::factory('/Applications/M...', 'Imagick')
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(392): Meadows_Image->image('/Applications/M...')
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/meadows/image.php(42): Meadows_Image->generate_images()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(55): Meadows_Image->upload(Array)
#6 [internal function]: Controller_Post->action_edit()
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#11 {main}
2012-11-17 15:49:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ')' ~ APPPATH/classes/meadows/image.php [ 396 ]
2012-11-17 15:49:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ')' ~ APPPATH/classes/meadows/image.php [ 396 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-17 16:07:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: posts/static/images/posts/50a7f3ee107f18555f000000_medium.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-17 16:07:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: posts/static/images/posts/50a7f3ee107f18555f000000_medium.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-17 16:07:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: posts/static/images/posts/50a7f3ee107f18555f000000_medium.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-17 16:07:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: posts/static/images/posts/50a7f3ee107f18555f000000_medium.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-17 16:07:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: posts/static/images/posts/50a7f3ee107f18555f000000_medium.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-17 16:07:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: posts/static/images/posts/50a7f3ee107f18555f000000_medium.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-17 16:07:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: posts/static/images/posts/50a7f3ee107f18555f000000_medium.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-17 16:07:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: posts/static/images/posts/50a7f3ee107f18555f000000_medium.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-17 21:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/template/home/susan_condio_hernandez.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-17 21:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/template/home/susan_condio_hernandez.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-17 21:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/template/home/susan_condio_hernandez.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-17 21:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/template/home/susan_condio_hernandez.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}