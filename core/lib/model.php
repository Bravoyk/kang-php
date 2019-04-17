<?php

namespace core\lib;

class model extends \PDO
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