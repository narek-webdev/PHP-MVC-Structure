<?php 

namespace connect;

class DB 
{

	private static $db = false;
	
	private static $credentias  = [
		'host'      => 'localhost',
		'username'  => 'root',
		'password'  => '',
		'database'  => 'cool_corner'
	];

	public static function connect () 
	{
		if(self::$db) {
			return self::$db;
		} else {
			$dsn = 'mysql:host='. self::$credentias['host'] .';dbname='. self::$credentias['database'];
			self::$db = new \PDO($dsn, self::$credentias['username'], self::$credentias['password']);
			return self::$db;
		}
	}

	public static function query($query) 
	{
		self::connect();
		return self::$db->query($query);
	}

}