<?php

namespace core\lib\drive\log;

use core\lib\conf;

class file
{
	public $path;

	public function __construct()
	{
		$conf       = conf::get('OPTION', 'log');
		$this->path = $conf['PATH'];
	}

	public function log($message, $file = 'log')
	{

		if (!is_dir($this->path)) {
			mkdir($this->path, 0777);
			chmod($this->path, 0777);
		}

		file_put_contents($this->path.date("Y-m-d.").$file.'.php', date('Y-m-d H:i:s').' '.json_encode($message).PHP_EOL,FILE_APPEND);
	}
}