<?php

namespace core\lib;

use Medoo\Medoo;

class model extends Medoo
{
	public function __construct()
	{
		$database = conf::all('database');
		try{
			parent::__construct($database['DSN'], $database['USERNAME'], $database['PASSWD']);
		}catch(\PDOException $e){
			vd($e->getMessage());
		}
	}
}