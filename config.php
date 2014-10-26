<?php

// Database connection. Modify here
define('DB_HOST', 'localhost');
define('DB_USER', 'theuser');
define('DB_PASS', 'theuser');
define('DB_NAME', 'mvc');

/* Relative location to the 'index.php'
* 	- Put '/' if placed in root directory
*	- Put '/dir1/dir2/dir3/' if placed in a subdirectory
*/
define('WEB_ROOT', '/~theuser/mvc/');

// PDO Object
require_once HOME . DS . 'utilities' 	. DS . 'database.php';

// Helper methods
require_once HOME . DS . 'utilities' 	. DS . 'helpers.php';

// Basic components
require_once HOME . DS . 'controllers' 	. DS . 'Controller.php';
require_once HOME . DS . 'models' 		. DS . 'Model.php';
require_once HOME . DS . 'views' 		. DS . 'View.php';

// Custom components
require_once HOME . DS . 'controllers' 	. DS . 'NewsController.php';
require_once HOME . DS . 'controllers' 	. DS . 'ContactController.php';
require_once HOME . DS . 'models' 		. DS . 'NewsModel.php';
require_once HOME . DS . 'models' 		. DS . 'ContactModel.php';


?>