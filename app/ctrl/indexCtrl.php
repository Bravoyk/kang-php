<?php
namespace app\ctrl;

use core\imooc;
use core\lib\model;

class indexCtrl extends imooc{
	public function index(){
		$data= "hello world";
		$title= "title";

		$this->assign('data',$data);
		$this->assign('title',$title);
		$this->display('index/index.cc');

//		$model = new model();
//		$sql = 'select * from event';
//		$ret = $model->query($sql);
//		vd($ret->fetchAll());
	}
}