<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-21 00:04:17 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'auth-meadows' at 'MODPATH/auth-huntington' ~ SYSPATH/classes/kohana/core.php [ 550 ]
2012-11-21 00:04:17 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'auth-meadows' at 'MODPATH/auth-huntington' ~ SYSPATH/classes/kohana/core.php [ 550 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/bootstrap.php(116): Kohana_Core::modules(Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(102): require('/Users/caleb/Si...')
#2 {main}
2012-11-21 00:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 00:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 00:07:33 --- ERROR: RuntimeException [ 0 ]: Unable to find template "_template/fullpage.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
2012-11-21 00:07:33 --- STRACE: RuntimeException [ 0 ]: Unable to find template "_template/fullpage.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/twig/loader/kohana.php(35): Twig_Loader_Kohana->findTemplate('_template/fullp...')
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(272): Twig_Loader_Kohana->getCacheKey('_template/fullp...')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(319): Twig_Environment->getTemplateClass('_template/fullp...', NULL)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/61/3f/a98755c437e5963fd605241e11ff.php(10): Twig_Environment->loadTemplate('_template/fullp...')
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(341): __TwigTemplate_613fa98755c437e5963fd605241e11ff->__construct(Object(Twig_Environment))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('user/auth/login...')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(55): Kohana_Controller->after()
#8 [internal function]: Controller_Site_Base->after()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_User_Auth))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-21 00:40:18 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Secure' not found ~ APPPATH/classes/controller/dashboard.php [ 3 ]
2012-11-21 00:40:18 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Secure' not found ~ APPPATH/classes/controller/dashboard.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 00:40:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 00:40:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 00:41:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 00:41:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 01:02:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/site/base.php [ 49 ]
2012-11-21 01:02:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/site/base.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 01:24:55 --- ERROR: Twig_Error_Syntax [ 0 ]: The filter "access" does not exist in "_template/pages/full.html" at line 10 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Node/Expression/Filter.php [ 29 ]
2012-11-21 01:24:55 --- STRACE: Twig_Error_Syntax [ 0 ]: The filter "access" does not exist in "_template/pages/full.html" at line 10 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Node/Expression/Filter.php [ 29 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Compiler.php(87): Twig_Node_Expression_Filter->compile(Object(Twig_Compiler))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/If.php(47): Twig_Compiler->subcompile(Object(Twig_Node_Expression_Filter))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node.php(106): Twig_Node_If->compile(Object(Twig_Compiler))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node.php(106): Twig_Node->compile(Object(Twig_Compiler))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Compiler.php(87): Twig_Node->compile(Object(Twig_Compiler))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/If.php(50): Twig_Compiler->subcompile(Object(Twig_Node))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node.php(106): Twig_Node_If->compile(Object(Twig_Compiler))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node.php(106): Twig_Node->compile(Object(Twig_Compiler))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Compiler.php(87): Twig_Node->compile(Object(Twig_Compiler))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/Block.php(40): Twig_Compiler->subcompile(Object(Twig_Node))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node.php(106): Twig_Node_Block->compile(Object(Twig_Compiler))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node.php(106): Twig_Node->compile(Object(Twig_Compiler))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Compiler.php(87): Twig_Node->compile(Object(Twig_Compiler))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/Module.php(66): Twig_Compiler->subcompile(Object(Twig_Node))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/Module.php(39): Twig_Node_Module->compileTemplate(Object(Twig_Compiler))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Compiler.php(76): Twig_Node_Module->compile(Object(Twig_Compiler))
#16 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(522): Twig_Compiler->compile(Object(Twig_Node_Module))
#17 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(536): Twig_Environment->compile(Object(Twig_Node_Module))
#18 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(330): Twig_Environment->compileSource('{% extends '_te...', '_template/pages...')
#19 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/31/f0/b03e78cb9a249db8649c9efa5665.php(10): Twig_Environment->loadTemplate('_template/pages...')
#20 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(341): __TwigTemplate_31f0b03e78cb9a249db8649c9efa5665->__construct(Object(Twig_Environment))
#21 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('dashboard/index...')
#22 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#23 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(60): Kohana_Controller->after()
#24 [internal function]: Controller_Site_Base->after()
#25 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Dashboard))
#26 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#27 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#28 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#29 {main}
2012-11-21 01:54:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post/assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 01:54:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post/assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 02:24:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 02:24:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 02:24:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 02:24:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 02:24:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 02:24:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 02:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 02:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 02:25:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 02:25:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 02:25:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 02:25:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 02:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 02:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 02:26:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 02:26:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 02:26:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 02:26:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/img/glyphicons-halflings-white.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 03:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 03:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 03:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 03:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 03:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 03:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 03:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 03:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 03:42:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 03:42:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 04:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 04:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/add was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 04:31:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: main_story ~ APPPATH/classes/controller/page.php [ 38 ]
2012-11-21 04:31:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: main_story ~ APPPATH/classes/controller/page.php [ 38 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/page.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/caleb/Si...', 38, Array)
#1 [internal function]: Controller_Page->action_add()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Page))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-21 04:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL principlescorner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 04:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL principlescorner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 04:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 04:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 04:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 04:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 04:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 04:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 04:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 04:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 04:54:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 04:54:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 04:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 04:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 04:55:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 04:55:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 04:55:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Router::request() ~ APPPATH/classes/controller/router.php [ 7 ]
2012-11-21 04:55:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Router::request() ~ APPPATH/classes/controller/router.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 04:56:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Router::request() ~ APPPATH/classes/controller/router.php [ 7 ]
2012-11-21 04:56:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Router::request() ~ APPPATH/classes/controller/router.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 04:56:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/router.php [ 7 ]
2012-11-21 04:56:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/router.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 04:56:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Router::request() ~ APPPATH/classes/controller/router.php [ 7 ]
2012-11-21 04:56:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Router::request() ~ APPPATH/classes/controller/router.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 04:56:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 04:56:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 04:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 04:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 05:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: principles/corner ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 05:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: principles/corner ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 05:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 05:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL principles/corner was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 05:11:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/controller/page.php [ 59 ]
2012-11-21 05:11:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/controller/page.php [ 59 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/page.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/caleb/Si...', 59, Array)
#1 [internal function]: Controller_Page->action_edit()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Page))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-21 05:12:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page/assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 05:12:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: page/assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 05:13:41 --- ERROR: ErrorException [ 1 ]: Class 'Past' not found ~ APPPATH/classes/controller/page.php [ 41 ]
2012-11-21 05:13:41 --- STRACE: ErrorException [ 1 ]: Class 'Past' not found ~ APPPATH/classes/controller/page.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 08:30:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 08:30:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 13:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-21 13:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:08:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/minion/task/menu/import/menu.php [ 5 ]
2012-11-21 14:08:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH/classes/minion/task/menu/import/menu.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 14:25:40 --- ERROR: ErrorException [ 2 ]: fopen(november_lunch.csv): failed to open stream: No such file or directory ~ APPPATH/classes/minion/task/menu/import/menu.php [ 21 ]
2012-11-21 14:25:40 --- STRACE: ErrorException [ 2 ]: fopen(november_lunch.csv): failed to open stream: No such file or directory ~ APPPATH/classes/minion/task/menu/import/menu.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(november_...', '/Users/caleb/Si...', 21, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(21): fopen('november_lunch....', 'r')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#3 [internal function]: Controller_Minion->action_execute()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-21 14:25:53 --- ERROR: ErrorException [ 2 ]: fopen(november_lunch.csv): failed to open stream: No such file or directory ~ APPPATH/classes/minion/task/menu/import/menu.php [ 21 ]
2012-11-21 14:25:53 --- STRACE: ErrorException [ 2 ]: fopen(november_lunch.csv): failed to open stream: No such file or directory ~ APPPATH/classes/minion/task/menu/import/menu.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(november_...', '/Users/caleb/Si...', 21, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(21): fopen('november_lunch....', 'r')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#3 [internal function]: Controller_Minion->action_execute()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-21 14:26:57 --- ERROR: ErrorException [ 2 ]: fopen(static/files/menus/november_lunch.csvz): failed to open stream: No such file or directory ~ APPPATH/classes/minion/task/menu/import/menu.php [ 21 ]
2012-11-21 14:26:57 --- STRACE: ErrorException [ 2 ]: fopen(static/files/menus/november_lunch.csvz): failed to open stream: No such file or directory ~ APPPATH/classes/minion/task/menu/import/menu.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(static/fi...', '/Users/caleb/Si...', 21, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(21): fopen('static/files/me...', 'r')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#3 [internal function]: Controller_Minion->action_execute()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-21 14:27:23 --- ERROR: ErrorException [ 2 ]: fopen(static/files/menus/november_lunch.csvz): failed to open stream: No such file or directory ~ APPPATH/classes/minion/task/menu/import/menu.php [ 21 ]
2012-11-21 14:27:23 --- STRACE: ErrorException [ 2 ]: fopen(static/files/menus/november_lunch.csvz): failed to open stream: No such file or directory ~ APPPATH/classes/minion/task/menu/import/menu.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(static/fi...', '/Users/caleb/Si...', 21, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(21): fopen('static/files/me...', 'r')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#3 [internal function]: Controller_Minion->action_execute()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-21 14:42:06 --- ERROR: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/minion/task/menu/import/menu.php [ 43 ]
2012-11-21 14:42:06 --- STRACE: ErrorException [ 8 ]: Undefined offset: 2 ~ APPPATH/classes/minion/task/menu/import/menu.php [ 43 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(43): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/caleb/Si...', 43, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#2 [internal function]: Controller_Minion->action_execute()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-21 14:43:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_Menu' not found ~ APPPATH/classes/menu.php [ 3 ]
2012-11-21 14:43:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_Menu' not found ~ APPPATH/classes/menu.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 14:44:03 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
2012-11-21 14:44:03 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
--
#0 [internal function]: MongoCollection->insert(Array, true)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(183): call_user_func_array(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->__call('insert', Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->insert(Array, true)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/menu.php(23): Mongo_Document->save()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(58): Menu::add('11/26/2012', 'French Toast St...', 'meal_lunch')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#7 [internal function]: Controller_Minion->action_execute()
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-21 14:44:28 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
2012-11-21 14:44:28 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
--
#0 [internal function]: MongoCollection->insert(Array, true)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(183): call_user_func_array(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->__call('insert', Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->insert(Array, true)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/menu.php(23): Mongo_Document->save()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(58): Menu::add('11/26/2012', 'French Toast St...', 'meal_lunch')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#7 [internal function]: Controller_Minion->action_execute()
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-21 14:45:06 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
2012-11-21 14:45:06 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
--
#0 [internal function]: MongoCollection->insert(Array, true)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(183): call_user_func_array(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->__call('insert', Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->insert(Array, true)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/menu.php(23): Mongo_Document->save()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(58): Menu::add(1353916800, 'French Toast St...', 'meal_lunch')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#7 [internal function]: Controller_Minion->action_execute()
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-21 14:46:35 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
2012-11-21 14:46:35 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
--
#0 [internal function]: MongoCollection->insert(Array, true)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(183): call_user_func_array(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->__call('insert', Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->insert(Array, true)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/menu.php(23): Mongo_Document->save()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(58): Menu::add(1353916800, 'French Toast St...', 'meal_lunch')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#7 [internal function]: Controller_Minion->action_execute()
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-21 14:46:55 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
2012-11-21 14:46:55 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
--
#0 [internal function]: MongoCollection->insert(Array, true)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(183): call_user_func_array(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->__call('insert', Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->insert(Array, true)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/menu.php(23): Mongo_Document->save()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(58): Menu::add(1353916800, 'French Toast St...', 'meal_lunch')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#7 [internal function]: Controller_Minion->action_execute()
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-21 14:47:29 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
2012-11-21 14:47:29 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
--
#0 [internal function]: MongoCollection->insert(Array, true)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(183): call_user_func_array(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->__call('insert', Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->insert(Array, true)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/menu.php(23): Mongo_Document->save()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(58): Menu::add(1353916800, 'French Toast St...', 'meal_lunch')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#7 [internal function]: Controller_Minion->action_execute()
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-21 14:47:36 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
2012-11-21 14:47:36 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
--
#0 [internal function]: MongoCollection->insert(Array, true)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(183): call_user_func_array(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->__call('insert', Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->insert(Array, true)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/menu.php(23): Mongo_Document->save()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(58): Menu::add(1353916800, 'French Toast St...', 'meal_lunch')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#7 [internal function]: Controller_Minion->action_execute()
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-21 14:47:41 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
2012-11-21 14:47:41 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
--
#0 [internal function]: MongoCollection->insert(Array, true)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(183): call_user_func_array(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->__call('insert', Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->insert(Array, true)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/menu.php(23): Mongo_Document->save()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(58): Menu::add(1353916800, 'French Toast St...', 'meal_lunch')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#7 [internal function]: Controller_Minion->action_execute()
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-21 14:47:44 --- ERROR: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
2012-11-21 14:47:44 --- STRACE: MongoException [ 1 ]: zero-length keys are not allowed, did you use $ with double quotes? ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
--
#0 [internal function]: MongoCollection->insert(Array, true)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(183): call_user_func_array(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->__call('insert', Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(1017): Mongo_Collection->insert(Array, true)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/menu.php(23): Mongo_Document->save()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(58): Menu::add(1353916800, 'French Toast St...', 'meal_lunch')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#7 [internal function]: Controller_Minion->action_execute()
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-21 14:49:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/menu.php [ 23 ]
2012-11-21 14:49:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/menu.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 14:56:30 --- ERROR: MongoException [ 0 ]: Cannot delete Menu without the _id. ~ MODPATH/mongodb-php-odm/classes/mongo/document.php [ 1165 ]
2012-11-21 14:56:30 --- STRACE: MongoException [ 0 ]: Cannot delete Menu without the _id. ~ MODPATH/mongodb-php-odm/classes/mongo/document.php [ 1165 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/menu.php(35): Mongo_Document->delete()
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(57): Menu::remove_by_date(1353916800, 'meal_lunch')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#3 [internal function]: Controller_Minion->action_execute()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-21 14:56:34 --- ERROR: MongoException [ 0 ]: Cannot delete Menu without the _id. ~ MODPATH/mongodb-php-odm/classes/mongo/document.php [ 1165 ]
2012-11-21 14:56:34 --- STRACE: MongoException [ 0 ]: Cannot delete Menu without the _id. ~ MODPATH/mongodb-php-odm/classes/mongo/document.php [ 1165 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/menu.php(35): Mongo_Document->delete()
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(57): Menu::remove_by_date(1353916800, 'meal_lunch')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#3 [internal function]: Controller_Minion->action_execute()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-21 15:00:32 --- ERROR: MongoCursorException [ 14816 ]: $and expression must be a nonempty array ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
2012-11-21 15:00:32 --- STRACE: MongoCursorException [ 14816 ]: $and expression must be a nonempty array ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
--
#0 [internal function]: MongoCollection->findOne(Array, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(183): call_user_func_array(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(976): Mongo_Collection->__call('findOne', Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/menu.php(62): Mongo_Document->load(Array)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/menu.php(34): Menu::get_with_date(1353916800, 'meal_lunch')
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(57): Menu::remove_by_date(1353916800, 'meal_lunch')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#7 [internal function]: Controller_Minion->action_execute()
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-21 15:00:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/menu.php [ 59 ]
2012-11-21 15:00:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/menu.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 15:03:12 --- ERROR: MongoCursorException [ 14816 ]: $and expression must be a nonempty array ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
2012-11-21 15:03:12 --- STRACE: MongoCursorException [ 14816 ]: $and expression must be a nonempty array ~ MODPATH/mongodb-php-odm/classes/mongo/collection.php [ 183 ]
--
#0 [internal function]: MongoCollection->findOne(Array, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/collection.php(183): call_user_func_array(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/mongodb-php-odm/classes/mongo/document.php(976): Mongo_Collection->__call('findOne', Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/menu.php(62): Mongo_Document->load(Array)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/menu.php(34): Menu::get_with_date(1353916800, 'meal_lunch')
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/minion/task/menu/import/menu.php(57): Menu::remove_by_date(1353916800, 'meal_lunch')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/minion/classes/controller/minion.php(141): Minion_Task_Menu_Import_Menu->execute(Array)
#7 [internal function]: Controller_Minion->action_execute()
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Minion))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-21 15:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/block/upcoming was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 15:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/block/upcoming was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 15:23:24 --- ERROR: RuntimeException [ 0 ]: Unable to find template "menu/block/upcoming.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
2012-11-21 15:23:24 --- STRACE: RuntimeException [ 0 ]: Unable to find template "menu/block/upcoming.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/twig/loader/kohana.php(35): Twig_Loader_Kohana->findTemplate('menu/block/upco...')
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(272): Twig_Loader_Kohana->getCacheKey('menu/block/upco...')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(319): Twig_Environment->getTemplateClass('menu/block/upco...', NULL)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('menu/block/upco...')
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(79): Kohana_Controller->after()
#6 [internal function]: Controller_Site_Base->after()
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Menu_Block))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#11 {main}
2012-11-21 15:24:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/menu.php [ 76 ]
2012-11-21 15:24:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/menu.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 15:25:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/menu.php [ 78 ]
2012-11-21 15:25:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/menu.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 15:25:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/menu.php [ 78 ]
2012-11-21 15:25:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/menu.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 15:27:36 --- ERROR: ErrorException [ 1 ]: Class 'Medows' not found ~ APPPATH/classes/controller/home.php [ 14 ]
2012-11-21 15:27:36 --- STRACE: ErrorException [ 1 ]: Class 'Medows' not found ~ APPPATH/classes/controller/home.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 17:44:32 --- ERROR: Twig_Error_Syntax [ 0 ]: A hash value must be followed by a comma. Unexpected token "string" of value "href" ("punctuation" expected with value ",") in "home/index.html" at line 36 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
2012-11-21 17:44:32 --- STRACE: Twig_Error_Syntax [ 0 ]: A hash value must be followed by a comma. Unexpected token "string" of value "href" ("punctuation" expected with value ",") in "home/index.html" at line 36 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(232): Twig_TokenStream->expect(9, ',', 'A hash value mu...')
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(159): Twig_ExpressionParser->parseHashExpression()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(85): Twig_ExpressionParser->parsePrimaryExpression()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(42): Twig_ExpressionParser->getPrimary()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(429): Twig_ExpressionParser->parseExpression()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(349): Twig_ExpressionParser->parseArguments()
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(274): Twig_ExpressionParser->parseSubscriptExpression(Object(Twig_Node_Expression_Name))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(165): Twig_ExpressionParser->parsePostfixExpression(Object(Twig_Node_Expression_Name))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(85): Twig_ExpressionParser->parsePrimaryExpression()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(42): Twig_ExpressionParser->getPrimary()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(137): Twig_ExpressionParser->parseExpression()
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/Block.php(47): Twig_Parser->subparse(Array, true)
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(183): Twig_TokenParser_Block->parse(Object(Twig_Token))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(95): Twig_Parser->subparse(NULL, false)
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(486): Twig_Parser->parse(Object(Twig_TokenStream))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(536): Twig_Environment->parse(Object(Twig_TokenStream))
#16 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(330): Twig_Environment->compileSource('{% extends '_te...', 'home/index.html')
#17 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('home/index.html')
#18 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#19 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(79): Kohana_Controller->after()
#20 [internal function]: Controller_Site_Base->after()
#21 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#22 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#23 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#24 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#25 {main}
2012-11-21 17:44:38 --- ERROR: Twig_Error_Syntax [ 0 ]: A hash value must be followed by a comma. Unexpected token "string" of value "href" ("punctuation" expected with value ",") in "home/index.html" at line 36 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
2012-11-21 17:44:38 --- STRACE: Twig_Error_Syntax [ 0 ]: A hash value must be followed by a comma. Unexpected token "string" of value "href" ("punctuation" expected with value ",") in "home/index.html" at line 36 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(232): Twig_TokenStream->expect(9, ',', 'A hash value mu...')
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(159): Twig_ExpressionParser->parseHashExpression()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(85): Twig_ExpressionParser->parsePrimaryExpression()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(42): Twig_ExpressionParser->getPrimary()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(429): Twig_ExpressionParser->parseExpression()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(349): Twig_ExpressionParser->parseArguments()
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(274): Twig_ExpressionParser->parseSubscriptExpression(Object(Twig_Node_Expression_Name))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(165): Twig_ExpressionParser->parsePostfixExpression(Object(Twig_Node_Expression_Name))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(85): Twig_ExpressionParser->parsePrimaryExpression()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(42): Twig_ExpressionParser->getPrimary()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(137): Twig_ExpressionParser->parseExpression()
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/Block.php(47): Twig_Parser->subparse(Array, true)
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(183): Twig_TokenParser_Block->parse(Object(Twig_Token))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(95): Twig_Parser->subparse(NULL, false)
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(486): Twig_Parser->parse(Object(Twig_TokenStream))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(536): Twig_Environment->parse(Object(Twig_TokenStream))
#16 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(330): Twig_Environment->compileSource('{% extends '_te...', 'home/index.html')
#17 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('home/index.html')
#18 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#19 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(79): Kohana_Controller->after()
#20 [internal function]: Controller_Site_Base->after()
#21 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#22 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#23 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#24 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#25 {main}
2012-11-21 17:44:42 --- ERROR: Twig_Error_Syntax [ 0 ]: A hash value must be followed by a comma. Unexpected token "string" of value "href" ("punctuation" expected with value ",") in "home/index.html" at line 36 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
2012-11-21 17:44:42 --- STRACE: Twig_Error_Syntax [ 0 ]: A hash value must be followed by a comma. Unexpected token "string" of value "href" ("punctuation" expected with value ",") in "home/index.html" at line 36 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(232): Twig_TokenStream->expect(9, ',', 'A hash value mu...')
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(159): Twig_ExpressionParser->parseHashExpression()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(85): Twig_ExpressionParser->parsePrimaryExpression()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(42): Twig_ExpressionParser->getPrimary()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(429): Twig_ExpressionParser->parseExpression()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(349): Twig_ExpressionParser->parseArguments()
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(274): Twig_ExpressionParser->parseSubscriptExpression(Object(Twig_Node_Expression_Name))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(165): Twig_ExpressionParser->parsePostfixExpression(Object(Twig_Node_Expression_Name))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(85): Twig_ExpressionParser->parsePrimaryExpression()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(42): Twig_ExpressionParser->getPrimary()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(137): Twig_ExpressionParser->parseExpression()
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/Block.php(47): Twig_Parser->subparse(Array, true)
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(183): Twig_TokenParser_Block->parse(Object(Twig_Token))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(95): Twig_Parser->subparse(NULL, false)
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(486): Twig_Parser->parse(Object(Twig_TokenStream))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(536): Twig_Environment->parse(Object(Twig_TokenStream))
#16 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(330): Twig_Environment->compileSource('{% extends '_te...', 'home/index.html')
#17 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('home/index.html')
#18 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#19 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(79): Kohana_Controller->after()
#20 [internal function]: Controller_Site_Base->after()
#21 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#22 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#23 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#24 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#25 {main}
2012-11-21 17:53:00 --- ERROR: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Unable to find template "_mascros/ui.html".") in "menu/block/upcoming.html" at line 2. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
2012-11-21 17:53:00 --- STRACE: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Unable to find template "_mascros/ui.html".") in "menu/block/upcoming.html" at line 2. ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(250): Twig_Template->display(Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Template->render(Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(79): Kohana_Controller->after()
#5 [internal function]: Controller_Site_Base->after()
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Menu_Block))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/home.php(14): Kohana_Request->execute()
#10 [internal function]: Controller_Home->action_index()
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#15 {main}
2012-11-21 20:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 20:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 20:13:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL food/menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 20:13:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL food/menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 20:24:48 --- ERROR: ErrorException [ 1 ]: Class 'Menu' not found ~ APPPATH/classes/minion/task/meal/menu/import/menu.php [ 46 ]
2012-11-21 20:24:48 --- STRACE: ErrorException [ 1 ]: Class 'Menu' not found ~ APPPATH/classes/minion/task/meal/menu/import/menu.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 20:25:00 --- ERROR: ErrorException [ 1 ]: Class 'Menu' not found ~ APPPATH/classes/minion/task/meal/menu/import/menu.php [ 46 ]
2012-11-21 20:25:00 --- STRACE: ErrorException [ 1 ]: Class 'Menu' not found ~ APPPATH/classes/minion/task/meal/menu/import/menu.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 20:25:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Menu' not found ~ APPPATH/classes/meal/menu.php [ 3 ]
2012-11-21 20:25:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Menu' not found ~ APPPATH/classes/meal/menu.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 20:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL menu/block/upcoming was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 20:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL menu/block/upcoming was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/home.php(14): Kohana_Request->execute()
#3 [internal function]: Controller_Home->action_index()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-21 20:27:28 --- ERROR: ErrorException [ 1 ]: Class 'Menu' not found ~ APPPATH/classes/controller/meal/menu/block.php [ 7 ]
2012-11-21 20:27:28 --- STRACE: ErrorException [ 1 ]: Class 'Menu' not found ~ APPPATH/classes/controller/meal/menu/block.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 20:32:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL meal/menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 20:32:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL meal/menu was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 20:34:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL meals/menus was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-21 20:34:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL meals/menus was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-21 20:35:01 --- ERROR: RuntimeException [ 0 ]: Unable to find template "_template/full.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
2012-11-21 20:35:01 --- STRACE: RuntimeException [ 0 ]: Unable to find template "_template/full.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/twig/loader/kohana.php(35): Twig_Loader_Kohana->findTemplate('_template/full....')
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(272): Twig_Loader_Kohana->getCacheKey('_template/full....')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(319): Twig_Environment->getTemplateClass('_template/full....', NULL)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/94/25/f77d4987a3cffcfc24c83beb2612.php(10): Twig_Environment->loadTemplate('_template/full....')
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(341): __TwigTemplate_9425f77d4987a3cffcfc24c83beb2612->__construct(Object(Twig_Environment))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('meal/menu/index...')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(79): Kohana_Controller->after()
#8 [internal function]: Controller_Site_Base->after()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Meal_Menu))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-21 20:35:07 --- ERROR: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Argument 1 passed to Model_User::user_has_access() must be an instance of Model_User, null given, called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/c0/59/25c689cd7076e4233bfeb50e2242.php on line 189 and defined") in "meal/menu/index.html". ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
2012-11-21 20:35:07 --- STRACE: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Argument 1 passed to Model_User::user_has_access() must be an instance of Model_User, null given, called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/c0/59/25c689cd7076e4233bfeb50e2242.php on line 189 and defined") in "meal/menu/index.html". ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/be/e3/e44247bba5a042744d8c3d3ece17.php(25): Twig_Template->display(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_bee3e44247bba5a042744d8c3d3ece17->doDisplay(Array, Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/94/25/f77d4987a3cffcfc24c83beb2612.php(24): Twig_Template->display(Array, Array)
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_9425f77d4987a3cffcfc24c83beb2612->doDisplay(Array, Array)
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(250): Twig_Template->display(Array)
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Template->render(Array)
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(79): Kohana_Controller->after()
#11 [internal function]: Controller_Site_Base->after()
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Meal_Menu))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#16 {main}
2012-11-21 20:35:28 --- ERROR: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Argument 1 passed to Model_User::user_has_access() must be an instance of Model_User, null given, called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/c0/59/25c689cd7076e4233bfeb50e2242.php on line 189 and defined") in "meal/menu/index.html". ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
2012-11-21 20:35:28 --- STRACE: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("Argument 1 passed to Model_User::user_has_access() must be an instance of Model_User, null given, called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/c0/59/25c689cd7076e4233bfeb50e2242.php on line 189 and defined") in "meal/menu/index.html". ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Template.php [ 269 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/be/e3/e44247bba5a042744d8c3d3ece17.php(25): Twig_Template->display(Array, Array)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_bee3e44247bba5a042744d8c3d3ece17->doDisplay(Array, Array)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/94/25/f77d4987a3cffcfc24c83beb2612.php(24): Twig_Template->display(Array, Array)
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(265): __TwigTemplate_9425f77d4987a3cffcfc24c83beb2612->doDisplay(Array, Array)
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(239): Twig_Template->displayWithErrorHandling(Array, Array)
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Template.php(250): Twig_Template->display(Array)
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Template->render(Array)
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(79): Kohana_Controller->after()
#11 [internal function]: Controller_Site_Base->after()
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Meal_Menu))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#16 {main}
2012-11-21 20:39:37 --- ERROR: ErrorException [ 1 ]: Class 'Meal_Menus' not found ~ APPPATH/classes/controller/meal/menu.php [ 7 ]
2012-11-21 20:39:37 --- STRACE: ErrorException [ 1 ]: Class 'Meal_Menus' not found ~ APPPATH/classes/controller/meal/menu.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 20:56:43 --- ERROR: Twig_Error_Syntax [ 0 ]: A hash value must be followed by a comma. Unexpected token "string" of value "value" ("punctuation" expected with value ",") in "post/edit.html" at line 70 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
2012-11-21 20:56:43 --- STRACE: Twig_Error_Syntax [ 0 ]: A hash value must be followed by a comma. Unexpected token "string" of value "value" ("punctuation" expected with value ",") in "post/edit.html" at line 70 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(232): Twig_TokenStream->expect(9, ',', 'A hash value mu...')
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(159): Twig_ExpressionParser->parseHashExpression()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(85): Twig_ExpressionParser->parsePrimaryExpression()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(42): Twig_ExpressionParser->getPrimary()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(429): Twig_ExpressionParser->parseExpression()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(349): Twig_ExpressionParser->parseArguments()
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(274): Twig_ExpressionParser->parseSubscriptExpression(Object(Twig_Node_Expression_Name))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(165): Twig_ExpressionParser->parsePostfixExpression(Object(Twig_Node_Expression_Name))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(85): Twig_ExpressionParser->parsePrimaryExpression()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(42): Twig_ExpressionParser->getPrimary()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(137): Twig_ExpressionParser->parseExpression()
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/Block.php(47): Twig_Parser->subparse(Array, true)
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(183): Twig_TokenParser_Block->parse(Object(Twig_Token))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(95): Twig_Parser->subparse(NULL, false)
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(486): Twig_Parser->parse(Object(Twig_TokenStream))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(536): Twig_Environment->parse(Object(Twig_TokenStream))
#16 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(330): Twig_Environment->compileSource('{% extends '_te...', 'post/edit.html')
#17 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('post/edit.html')
#18 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#19 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(79): Kohana_Controller->after()
#20 [internal function]: Controller_Site_Base->after()
#21 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post))
#22 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#23 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#24 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#25 {main}