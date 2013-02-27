<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-26 08:50:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post/assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-11-26 08:50:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post/assets/ico/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 10:22:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL calendar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-26 10:22:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL calendar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/caleb/Sites/meadowsmillbrae.com/docroot/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/caleb/Sites/meadowsmillbrae.com/docroot/index.php(109): Kohana_Request->execute()
#3 {main}