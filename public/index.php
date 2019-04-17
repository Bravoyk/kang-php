<?php
define('IMOOC', realpath('../'));
define('CORE', IMOOC.'/core');
define('APP', IMOOC.'/app');
define('MODULE', 'app');

define('DEBUG', true);

if (DEBUG) {
	ini_set('display_errors', 'on');
} else {
	ini_set('display_errors', 'off');
}

include CORE . '/common/function.php';
include CORE . '/imooc.php';

spl_autoload_register('\core\imooc::load');

\core\imooc::run();