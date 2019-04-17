<?php

namespace core;

use core\lib\route;

class imooc
{
	public static $classMap = array();
	public $assign = array();

	static public function run()
	{
		$route = new route("test");

		$ctrlClass = $route->ctrl;
		$action    = $route->action;

		$ctrlfile = APP . '/ctrl/' . $ctrlClass . 'Ctrl.php';

		$cltrClass = '\\' . MODULE . '\ctrl\\' . $ctrlClass . 'Ctrl';

		if (is_file($ctrlfile)) {
			include $ctrlfile;

			$ctrl = new $cltrClass;
			$ctrl->$action();

		} else {
			throw new \Exception('找不到控制器' . $ctrlClass);
		}

	}

	static public function load($class)
	{

		if (isset(self::$classMap[$class])) {
			return true;
		} else {

			$class = str_replace('\\', '/', $class);
			$file  = IMOOC . '/' . $class . '.php';

			if (is_file($file)) {
				include $file;
				self::$classMap[$class] = $class;
			} else {
				return false;
			}
		}


	}

	public function assign($name, $value)
	{
		$this->assign[$name] = $value;
	}

	public function display($file)
	{
		$file = APP.'/views/'.$file;
		if(is_file($file)){
			extract($this->assign);

			include $file;
		}
	}
}