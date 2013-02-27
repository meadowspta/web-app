<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-15 01:58:28 --- ERROR: Twig_Error_Syntax [ 0 ]: The block 'sidebar' has already been defined line 3 in "home/index.html" at line 5 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenParser/Block.php [ 38 ]
2012-11-15 01:58:28 --- STRACE: Twig_Error_Syntax [ 0 ]: The block 'sidebar' has already been defined line 3 in "home/index.html" at line 5 ~ MODPATH/kohana-twig/vendor/Twig/lib/Twig/TokenParser/Block.php [ 38 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(183): Twig_TokenParser_Block->parse(Object(Twig_Token))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/TokenParser/Block.php(47): Twig_Parser->subparse(Array, true)
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(183): Twig_TokenParser_Block->parse(Object(Twig_Token))
#3 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Parser.php(95): Twig_Parser->subparse(NULL, false)
#4 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(486): Twig_Parser->parse(Object(Twig_TokenStream))
#5 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(536): Twig_Environment->parse(Object(Twig_TokenStream))
#6 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/vendor/Twig/lib/Twig/Environment.php(330): Twig_Environment->compileSource('{% extends '_te...', 'home/index.html')
#7 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/twig.php(408): Twig_Environment->loadTemplate('home/index.html')
#8 /Users/caleb/Sites/meadowsmillbrae.com/docroot/modules/kohana-twig/classes/kohana/controller.php(131): Kohana_Twig->render()
#9 /Users/caleb/Sites/meadowsmillbrae.com/docroot/application/classes/controller/site/base.php(47): Kohana_Controller->after()
#10 [internal function]: Controller_Site_Base->after()
#11 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client/internal.php(119): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#14 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#15 {main}