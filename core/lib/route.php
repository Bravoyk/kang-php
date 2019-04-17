<?php

namespace core\lib;

class route
{

	public $ctrl;
	public $action;

	public function __construct($test)
	{

		if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
			$path      = $_SERVER['REQUEST_URI'];
			$pathArray = explode('/', trim($path, '/'));


			if (isset($pathArray[0])) {
				$this->ctrl = $pathArray[0];
			}
			unset($pathArray[0]);
			if (isset($pathArray[1])) {
				$this->action = $pathArray[1];
				unset($pathArray[1]);

			} else {
				$this->action = 'index';
			}

			// 多余部分变成 get 参数
			$count = count($pathArray) + 2;
			$i     = 2;

			while($i < $count){
				if (isset($pathArray[$i + 1])) {


					$_GET[$pathArray[$i]] = $pathArray[$i + 1];
				}
				$i += 2;
			}

		} else {
			$this->ctrl   = 'index';
			$this->action = 'index';
		}

	}
}