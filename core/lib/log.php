<?php
namespace core\lib;

class log
{

	static $class;
	
	static public function init(){
		$drive = conf::get('DRIVE','log');
		$class = '\\core\lib\drive\log\\'.$drive;

		self::$class = new $class;

	}

	static public function log($message,$file='log'){
		self::$class->log($message,$file);
	}
}