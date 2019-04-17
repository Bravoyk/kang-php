<?php

namespace app\ctrl;

use core\imooc;
use core\lib\conf;
use core\lib\model;

class indexCtrl extends imooc
{
	public function index()
	{

		var_dump(conf::get('CTRL', 'route'));
		var_dump(conf::get('CTRL', 'route'));
		var_dump(conf::get('CTRL', 'route'));


		$data  = "hello world";
		$title = "title";

		$model = new model();
		$sql = 'select * from event';
		$ret = $model->query($sql);
		vd($ret->fetchAll());
		die;
		$this->assign('data', $data);
		$this->assign('title', $title);
		$this->display('index/index.html');

	}
}