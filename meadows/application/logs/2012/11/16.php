<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-16 10:38:23 --- ERROR: ErrorException [ 1 ]: Class 'Blog' not found ~ APPPATH/classes/controller/home.php [ 7 ]
2012-11-16 10:38:23 --- STRACE: ErrorException [ 1 ]: Class 'Blog' not found ~ APPPATH/classes/controller/home.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-16 10:48:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-11-16 10:48:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-16 10:52:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:52:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:52:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:52:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:52:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:52:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:53:10 --- ERROR: RuntimeException [ 0 ]: Unable to find template "_template/pages/full.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
2012-11-16 10:53:10 --- STRACE: RuntimeException [ 0 ]: Unable to find template "_template/pages/full.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/twig/loader/kohana.php(35): Twig_Loader_Kohana->findTemplate('_template/pages...')
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(272): Twig_Loader_Kohana->getCacheKey('_template/pages...')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(319): Twig_Environment->getTemplateClass('_template/pages...', NULL)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/a5/1e/42e07c03492d8cefa073d3a9d81b.php(10): Twig_Environment->loadTemplate('_template/pages...')
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(341): __TwigTemplate_a51e42e07c03492d8cefa073d3a9d81b->__construct(Object(Twig_Environment))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('home/index.html')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(47): Kohana_Controller->after()
#8 [internal function]: Controller_Site_Base->after()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-16 10:53:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:53:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:53:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:53:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:53:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:53:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:53:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:53:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:53:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:53:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:54:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:54:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:54:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:54:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:54:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:54:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:55:11 --- ERROR: Twig_Error_Syntax [ 0 ]: Unexpected token "end of print statement" of value "" in "post/add.html" at line 9 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php [ 161 ]
2012-11-16 10:55:11 --- STRACE: Twig_Error_Syntax [ 0 ]: Unexpected token "end of print statement" of value "" in "post/add.html" at line 9 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php [ 161 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(85): Twig_ExpressionParser->parsePrimaryExpression()
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(42): Twig_ExpressionParser->getPrimary()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(137): Twig_ExpressionParser->parseExpression()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/Block.php(47): Twig_Parser->subparse(Array, true)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(183): Twig_TokenParser_Block->parse(Object(Twig_Token))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(95): Twig_Parser->subparse(NULL, false)
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(486): Twig_Parser->parse(Object(Twig_TokenStream))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(536): Twig_Environment->parse(Object(Twig_TokenStream))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(330): Twig_Environment->compileSource('{% extends '_te...', 'post/add.html')
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('post/add.html')
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(47): Kohana_Controller->after()
#12 [internal function]: Controller_Site_Base->after()
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#17 {main}
2012-11-16 10:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:55:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:55:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:56:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:56:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:56:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:56:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:56:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:56:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:56:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:56:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:56:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:56:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:58:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:58:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 10:59:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 10:59:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:00:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:00:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:01:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:01:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:01:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:01:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/akzhan/src/dialogs/default.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/akzhan/src/dialogs/default.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:08:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:08:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:08:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/akzhan/src/dialogs/default.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:08:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/akzhan/src/dialogs/default.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/akzhan/src/dialogs/default.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/akzhan/src/dialogs/default.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 11:09:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 11:09:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/akzhan/src/dialogs/default.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/akzhan/src/dialogs/default.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/akzhan/dialogs/default.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/akzhan/dialogs/default.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/akzhan/src/dialogs/default.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/css/akzhan/src/dialogs/default.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:03:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:03:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:03:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/akzhan/dialogs/default.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:03:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/akzhan/dialogs/default.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:10:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:10:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/jquery-1.8.1.min ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:10:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:10:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:10:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:10:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:10:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 12:10:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/js/meadows.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 12:59:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/model/post.php [ 9 ]
2012-11-16 12:59:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/model/post.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-16 13:05:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL post/this-is-the-title was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-11-16 13:05:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL post/this-is-the-title was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-16 13:05:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL posts/this-is-the-title was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-16 13:05:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL posts/this-is-the-title was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-16 13:05:55 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 33 ~ SYSPATH/classes/kohana/route.php [ 402 ]
2012-11-16 13:05:55 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: missing ) at offset 33 ~ SYSPATH/classes/kohana/route.php [ 402 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', '/Users/caleb/Si...', 402, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/route.php(402): preg_match('#^posts(?:/(?P<...', 'posts/this-is-t...', NULL)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(582): Kohana_Route->matches('posts/this-is-t...')
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(800): Kohana_Request::process_uri('posts/this-is-t...', Array)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(208): Kohana_Request->__construct('/posts/this-is-...', NULL, Array)
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(108): Kohana_Request::factory()
#6 {main}
2012-11-16 13:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL postthis-is-the-title was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-16 13:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL postthis-is-the-title was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-16 13:17:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL post/this-is-the-title was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-11-16 13:17:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL post/this-is-the-title was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-16 13:33:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post/assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-16 13:33:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post/assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-16 13:48:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_CASE or T_DEFAULT or '}' ~ APPPATH/classes/meadows/document.php [ 34 ]
2012-11-16 13:48:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_CASE or T_DEFAULT or '}' ~ APPPATH/classes/meadows/document.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-16 13:52:16 --- ERROR: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/controller/post.php [ 38 ]
2012-11-16 13:52:16 --- STRACE: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/controller/post.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-16 16:40:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/event.php [ 45 ]
2012-11-16 16:40:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/event.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-16 16:40:52 --- ERROR: Twig_Error_Syntax [ 0 ]: Unexpected token "name" of value "event" ("end of print statement" expected) in "home/index.html" at line 23 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
2012-11-16 16:40:52 --- STRACE: Twig_Error_Syntax [ 0 ]: Unexpected token "name" of value "event" ("end of print statement" expected) in "home/index.html" at line 23 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(138): Twig_TokenStream->expect(4)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/Block.php(47): Twig_Parser->subparse(Array, true)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(183): Twig_TokenParser_Block->parse(Object(Twig_Token))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(95): Twig_Parser->subparse(NULL, false)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(486): Twig_Parser->parse(Object(Twig_TokenStream))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(536): Twig_Environment->parse(Object(Twig_TokenStream))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(330): Twig_Environment->compileSource('{% extends '_te...', 'home/index.html')
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('home/index.html')
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(54): Kohana_Controller->after()
#10 [internal function]: Controller_Site_Base->after()
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#15 {main}
2012-11-16 16:41:22 --- ERROR: Twig_Error_Syntax [ 0 ]: Unexpected token "name" of value "event" ("end of print statement" expected) in "home/index.html" at line 23 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
2012-11-16 16:41:22 --- STRACE: Twig_Error_Syntax [ 0 ]: Unexpected token "name" of value "event" ("end of print statement" expected) in "home/index.html" at line 23 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(138): Twig_TokenStream->expect(4)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/Block.php(47): Twig_Parser->subparse(Array, true)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(183): Twig_TokenParser_Block->parse(Object(Twig_Token))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(95): Twig_Parser->subparse(NULL, false)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(486): Twig_Parser->parse(Object(Twig_TokenStream))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(536): Twig_Environment->parse(Object(Twig_TokenStream))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(330): Twig_Environment->compileSource('{% extends '_te...', 'home/index.html')
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('home/index.html')
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(54): Kohana_Controller->after()
#10 [internal function]: Controller_Site_Base->after()
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#15 {main}
2012-11-16 16:42:06 --- ERROR: Twig_Error_Syntax [ 0 ]: Unexpected token "name" of value "event" ("end of print statement" expected) in "home/index.html" at line 23 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
2012-11-16 16:42:06 --- STRACE: Twig_Error_Syntax [ 0 ]: Unexpected token "name" of value "event" ("end of print statement" expected) in "home/index.html" at line 23 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(138): Twig_TokenStream->expect(4)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/Block.php(47): Twig_Parser->subparse(Array, true)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(183): Twig_TokenParser_Block->parse(Object(Twig_Token))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(95): Twig_Parser->subparse(NULL, false)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(486): Twig_Parser->parse(Object(Twig_TokenStream))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(536): Twig_Environment->parse(Object(Twig_TokenStream))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(330): Twig_Environment->compileSource('{% extends '_te...', 'home/index.html')
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('home/index.html')
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(54): Kohana_Controller->after()
#10 [internal function]: Controller_Site_Base->after()
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#15 {main}
2012-11-16 16:42:33 --- ERROR: Twig_Error_Syntax [ 0 ]: Unexpected token "name" of value "event" ("end of print statement" expected) in "home/index.html" at line 23 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
2012-11-16 16:42:33 --- STRACE: Twig_Error_Syntax [ 0 ]: Unexpected token "name" of value "event" ("end of print statement" expected) in "home/index.html" at line 23 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(138): Twig_TokenStream->expect(4)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/Block.php(47): Twig_Parser->subparse(Array, true)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(183): Twig_TokenParser_Block->parse(Object(Twig_Token))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(95): Twig_Parser->subparse(NULL, false)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(486): Twig_Parser->parse(Object(Twig_TokenStream))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(536): Twig_Environment->parse(Object(Twig_TokenStream))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(330): Twig_Environment->compileSource('{% extends '_te...', 'home/index.html')
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('home/index.html')
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(54): Kohana_Controller->after()
#10 [internal function]: Controller_Site_Base->after()
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#15 {main}