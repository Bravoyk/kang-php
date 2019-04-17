<?php
define('IMOOC', '..');
define('CORE', IMOOC.'/core');
define('APP', IMOOC.'/app');
define('MODULE', 'app');
define('DEBUG', true);


include "../vendor/autoload.php";

if (DEBUG) {

	ini_set('display_errors', 'on');
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();

} else {
	ini_set('display_errors', 'off');
}

include CORE . '/common/function.php';
include CORE . '/imooc.php';

spl_autoload_register('\core\imooc::load');

\core\imooc::run();