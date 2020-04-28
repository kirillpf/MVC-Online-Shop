<?php

/**
 * 
 */
class DB
{
	const USER = "root";
	const PASS = "";
	const HOST = "localhost";
	const DB = "mvc";

	public static function connToDB()
	{
		$user = self::USER;
		$pass = self::PASS;
		$host = self::HOST;
		$dbname = self::DB;

		$conn = new pdo("mysql:dbname=$dbname;host=$host", $user, $pass);

		return $conn;
	}
}