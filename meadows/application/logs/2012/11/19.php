<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-19 09:59:36 --- ERROR: Twig_Error_Syntax [ 0 ]: Arguments must be separated by a comma. Unexpected token "name" of value "g" ("punctuation" expected with value ",") in "post/edit.html" at line 56 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
2012-11-19 09:59:36 --- STRACE: Twig_Error_Syntax [ 0 ]: Arguments must be separated by a comma. Unexpected token "name" of value "g" ("punctuation" expected with value ",") in "post/edit.html" at line 56 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenStream.php [ 77 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(427): Twig_TokenStream->expect(9, ',', 'Arguments must ...')
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(402): Twig_ExpressionParser->parseArguments()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(390): Twig_ExpressionParser->parseFilterExpressionRaw(Object(Twig_Node_Expression_GetAttr))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(276): Twig_ExpressionParser->parseFilterExpression(Object(Twig_Node_Expression_GetAttr))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(165): Twig_ExpressionParser->parsePostfixExpression(Object(Twig_Node_Expression_Name))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(85): Twig_ExpressionParser->parsePrimaryExpression()
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(42): Twig_ExpressionParser->getPrimary()
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(259): Twig_ExpressionParser->parseExpression()
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(159): Twig_ExpressionParser->parseHashExpression()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(85): Twig_ExpressionParser->parsePrimaryExpression()
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(42): Twig_ExpressionParser->getPrimary()
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(429): Twig_ExpressionParser->parseExpression()
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(349): Twig_ExpressionParser->parseArguments()
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(274): Twig_ExpressionParser->parseSubscriptExpression(Object(Twig_Node_Expression_Name))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(165): Twig_ExpressionParser->parsePostfixExpression(Object(Twig_Node_Expression_Name))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(85): Twig_ExpressionParser->parsePrimaryExpression()
#16 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/ExpressionParser.php(42): Twig_ExpressionParser->getPrimary()
#17 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(137): Twig_ExpressionParser->parseExpression()
#18 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/Block.php(47): Twig_Parser->subparse(Array, true)
#19 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(183): Twig_TokenParser_Block->parse(Object(Twig_Token))
#20 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(95): Twig_Parser->subparse(NULL, false)
#21 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(486): Twig_Parser->parse(Object(Twig_TokenStream))
#22 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(536): Twig_Environment->parse(Object(Twig_TokenStream))
#23 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(330): Twig_Environment->compileSource('{% extends '_te...', 'post/edit.html')
#24 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('post/edit.html')
#25 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#26 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(55): Kohana_Controller->after()
#27 [internal function]: Controller_Site_Base->after()
#28 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post))
#29 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#30 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#31 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#32 {main}
2012-11-19 11:19:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/classes/model/post.php [ 51 ]
2012-11-19 11:19:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/classes/model/post.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-19 12:42:53 --- ERROR: ErrorException [ 8 ]: Undefined index: start_date ~ APPPATH/classes/controller/post.php [ 37 ]
2012-11-19 12:42:53 --- STRACE: ErrorException [ 8 ]: Undefined index: start_date ~ APPPATH/classes/controller/post.php [ 37 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(37): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/caleb/Si...', 37, Array)
#1 [internal function]: Controller_Post->action_add()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-19 14:37:02 --- ERROR: ErrorException [ 2048 ]: Non-static method Announcement::save() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/announcement.php [ 14 ]
2012-11-19 14:37:02 --- STRACE: ErrorException [ 2048 ]: Non-static method Announcement::save() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/controller/announcement.php [ 14 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/announcement.php(14): Kohana_Core::error_handler(2048, 'Non-static meth...', '/Users/caleb/Si...', 14, Array)
#1 [internal function]: Controller_Announcement->action_edit()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Announcement))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-19 14:37:45 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Announcement::get(), called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/announcement.php on line 19 and defined ~ APPPATH/classes/announcement.php [ 23 ]
2012-11-19 14:37:45 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Announcement::get(), called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/announcement.php on line 19 and defined ~ APPPATH/classes/announcement.php [ 23 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/announcement.php(23): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/caleb/Si...', 23, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/announcement.php(19): Announcement::get()
#2 [internal function]: Controller_Announcement->action_edit()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Announcement))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-19 14:54:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL post/block/upcoming_events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-11-19 14:54:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL post/block/upcoming_events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-19 14:55:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL post/block/upcoming_events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-11-19 14:55:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL post/block/upcoming_events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-19 14:55:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL post/block/upcoming_events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-11-19 14:55:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL post/block/upcoming_events was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-19 15:00:44 --- ERROR: RuntimeException [ 0 ]: Unable to find template "_templates/full.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
2012-11-19 15:00:44 --- STRACE: RuntimeException [ 0 ]: Unable to find template "_templates/full.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/twig/loader/kohana.php(35): Twig_Loader_Kohana->findTemplate('_templates/full...')
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(272): Twig_Loader_Kohana->getCacheKey('_templates/full...')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(319): Twig_Environment->getTemplateClass('_templates/full...', NULL)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/c0/7f/9831edcdcfd42f388391c9138c0b.php(10): Twig_Environment->loadTemplate('_templates/full...')
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(341): __TwigTemplate_c07f9831edcdcfd42f388391c9138c0b->__construct(Object(Twig_Environment))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('post/block/upco...')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(55): Kohana_Controller->after()
#8 [internal function]: Controller_Site_Base->after()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post_Block))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-19 15:01:23 --- ERROR: RuntimeException [ 0 ]: Unable to find template "_templates/pages/full.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
2012-11-19 15:01:23 --- STRACE: RuntimeException [ 0 ]: Unable to find template "_templates/pages/full.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/twig/loader/kohana.php(35): Twig_Loader_Kohana->findTemplate('_templates/page...')
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(272): Twig_Loader_Kohana->getCacheKey('_templates/page...')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(319): Twig_Environment->getTemplateClass('_templates/page...', NULL)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/c0/7f/9831edcdcfd42f388391c9138c0b.php(10): Twig_Environment->loadTemplate('_templates/page...')
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(341): __TwigTemplate_c07f9831edcdcfd42f388391c9138c0b->__construct(Object(Twig_Environment))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('post/block/upco...')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(55): Kohana_Controller->after()
#8 [internal function]: Controller_Site_Base->after()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post_Block))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-19 15:01:27 --- ERROR: RuntimeException [ 0 ]: Unable to find template "_templates/pages/full.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
2012-11-19 15:01:27 --- STRACE: RuntimeException [ 0 ]: Unable to find template "_templates/pages/full.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/twig/loader/kohana.php(35): Twig_Loader_Kohana->findTemplate('_templates/page...')
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(272): Twig_Loader_Kohana->getCacheKey('_templates/page...')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(319): Twig_Environment->getTemplateClass('_templates/page...', NULL)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/c0/7f/9831edcdcfd42f388391c9138c0b.php(10): Twig_Environment->loadTemplate('_templates/page...')
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(341): __TwigTemplate_c07f9831edcdcfd42f388391c9138c0b->__construct(Object(Twig_Environment))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('post/block/upco...')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(55): Kohana_Controller->after()
#8 [internal function]: Controller_Site_Base->after()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post_Block))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-19 15:02:14 --- ERROR: RuntimeException [ 0 ]: Unable to find template "_template/pages/meta.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
2012-11-19 15:02:14 --- STRACE: RuntimeException [ 0 ]: Unable to find template "_template/pages/meta.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/twig/loader/kohana.php(35): Twig_Loader_Kohana->findTemplate('_template/pages...')
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(272): Twig_Loader_Kohana->getCacheKey('_template/pages...')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(319): Twig_Environment->getTemplateClass('_template/pages...', NULL)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/cache/twig/c0/7f/9831edcdcfd42f388391c9138c0b.php(10): Twig_Environment->loadTemplate('_template/pages...')
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(341): __TwigTemplate_c07f9831edcdcfd42f388391c9138c0b->__construct(Object(Twig_Environment))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('post/block/upco...')
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(55): Kohana_Controller->after()
#8 [internal function]: Controller_Site_Base->after()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post_Block))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-19 15:09:08 --- ERROR: RuntimeException [ 0 ]: Unable to find template "post/block/recent_posts.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
2012-11-19 15:09:08 --- STRACE: RuntimeException [ 0 ]: Unable to find template "post/block/recent_posts.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/twig/loader/kohana.php(35): Twig_Loader_Kohana->findTemplate('post/block/rece...')
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(272): Twig_Loader_Kohana->getCacheKey('post/block/rece...')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(319): Twig_Environment->getTemplateClass('post/block/rece...', NULL)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('post/block/rece...')
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(55): Kohana_Controller->after()
#6 [internal function]: Controller_Site_Base->after()
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post_Block))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#11 {main}
2012-11-19 15:09:33 --- ERROR: RuntimeException [ 0 ]: Unable to find template "post/block/recent_posts.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
2012-11-19 15:09:33 --- STRACE: RuntimeException [ 0 ]: Unable to find template "post/block/recent_posts.html". ~ MODPATH/kohana-twig/classes/twig/loader/kohana.php [ 70 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/twig/loader/kohana.php(35): Twig_Loader_Kohana->findTemplate('post/block/rece...')
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(272): Twig_Loader_Kohana->getCacheKey('post/block/rece...')
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(319): Twig_Environment->getTemplateClass('post/block/rece...', NULL)
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('post/block/rece...')
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(55): Kohana_Controller->after()
#6 [internal function]: Controller_Site_Base->after()
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post_Block))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#11 {main}
2012-11-19 15:14:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: events ~ APPPATH/classes/controller/post/block.php [ 18 ]
2012-11-19 15:14:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: events ~ APPPATH/classes/controller/post/block.php [ 18 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post/block.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/caleb/Si...', 18, Array)
#1 [internal function]: Controller_Post_Block->action_recent_posts()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post_Block))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-19 15:14:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: events ~ APPPATH/classes/controller/post/block.php [ 18 ]
2012-11-19 15:14:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: events ~ APPPATH/classes/controller/post/block.php [ 18 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post/block.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/caleb/Si...', 18, Array)
#1 [internal function]: Controller_Post_Block->action_recent_posts()
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post_Block))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-19 15:16:33 --- ERROR: Twig_Error_Syntax [ 0 ]: The filter "row" does not exist. Did you mean "raw" in "post/view.html" at line 28 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Node/Expression/Filter.php [ 29 ]
2012-11-19 15:16:33 --- STRACE: Twig_Error_Syntax [ 0 ]: The filter "row" does not exist. Did you mean "raw" in "post/view.html" at line 28 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/Node/Expression/Filter.php [ 29 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Compiler.php(87): Twig_Node_Expression_Filter->compile(Object(Twig_Compiler))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/Expression/Filter.php(50): Twig_Compiler->subcompile(Object(Twig_Node_Expression_Filter))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/Expression/Filter.php(32): Twig_Node_Expression_Filter->compileFilter(Object(Twig_Compiler), Object(Twig_Filter_Function))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Compiler.php(87): Twig_Node_Expression_Filter->compile(Object(Twig_Compiler))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/Print.php(36): Twig_Compiler->subcompile(Object(Twig_Node_Expression_Filter))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node.php(106): Twig_Node_Print->compile(Object(Twig_Compiler))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node.php(106): Twig_Node->compile(Object(Twig_Compiler))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Compiler.php(87): Twig_Node->compile(Object(Twig_Compiler))
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/Block.php(40): Twig_Compiler->subcompile(Object(Twig_Node))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node.php(106): Twig_Node_Block->compile(Object(Twig_Compiler))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node.php(106): Twig_Node->compile(Object(Twig_Compiler))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Compiler.php(87): Twig_Node->compile(Object(Twig_Compiler))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/Module.php(66): Twig_Compiler->subcompile(Object(Twig_Node))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Node/Module.php(39): Twig_Node_Module->compileTemplate(Object(Twig_Compiler))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Compiler.php(76): Twig_Node_Module->compile(Object(Twig_Compiler))
#15 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(522): Twig_Compiler->compile(Object(Twig_Node_Module))
#16 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(536): Twig_Environment->compile(Object(Twig_Node_Module))
#17 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(330): Twig_Environment->compileSource('{% extends '_te...', 'post/view.html')
#18 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('post/view.html')
#19 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#20 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(55): Kohana_Controller->after()
#21 [internal function]: Controller_Site_Base->after()
#22 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Post))
#23 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#24 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#25 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#26 {main}
2012-11-19 15:26:14 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Post::get_recent_without_post() must be an instance of Model_Post, none given, called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post/block.php on line 15 and defined ~ APPPATH/classes/post.php [ 84 ]
2012-11-19 15:26:14 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Post::get_recent_without_post() must be an instance of Model_Post, none given, called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post/block.php on line 15 and defined ~ APPPATH/classes/post.php [ 84 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(84): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/caleb/Si...', 84, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post/block.php(15): Post::get_recent_without_post()
#2 [internal function]: Controller_Post_Block->action_recent_posts()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post_Block))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(20): Kohana_Request->execute()
#7 [internal function]: Controller_Post->action_view()
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-19 15:29:52 --- ERROR: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH/classes/kohana/arr.php [ 277 ]
2012-11-19 15:29:52 --- STRACE: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH/classes/kohana/arr.php [ 277 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/arr.php(277): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/caleb/Si...', 277, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1520): Kohana_Arr::get(Array, Object(MongoId))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(20): Kohana_Request->query(Object(MongoId))
#3 [internal function]: Controller_Post->action_view()
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-19 15:31:09 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Post::get_recent_without_post() must be an instance of Model_Post, instance of MongoId given, called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post/block.php on line 16 and defined ~ APPPATH/classes/post.php [ 84 ]
2012-11-19 15:31:09 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Post::get_recent_without_post() must be an instance of Model_Post, instance of MongoId given, called in /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post/block.php on line 16 and defined ~ APPPATH/classes/post.php [ 84 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/post.php(84): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/caleb/Si...', 84, Array)
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post/block.php(16): Post::get_recent_without_post(Object(MongoId))
#2 [internal function]: Controller_Post_Block->action_recent_posts()
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post_Block))
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/post.php(21): Kohana_Request->execute()
#7 [internal function]: Controller_Post->action_view()
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Post))
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#12 {main}