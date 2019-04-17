<?php

namespace core\lib;

class model extends \PDO
{
	public function __construct()
	{
		$dsn      = "mysql:host=localhost;dbname=codehero";
		$username = 'codehero';
		$passwd   = 'codehero';

		try{
			parent::__construct($dsn, $username, $passwd);
		}catch(\PDOException $e){
			vd($e->getMessage());
		}
	}
}