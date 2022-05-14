<?php
// Singleton - only allows one instance of this class
class Database
{
	private const HOST_NAME = 'database';
	private const DB_NAME = 'lamp';
	private const DB_USER = 'lamp';
	private const DB_PASS = 'lamp';

	// conserves the instance of PDO and avoids create an instance of PDO when a new request is made
    private static ?PDO $instance = null; 

	// function that allows to recover the instance of PDO -> static so we can access it from everywhere
	public static function getPDO(): PDO
	{
		// test if the PDO exists - either instanciates or creates the pdo
		if( is_null( self::$instance ) ) {
			try {
				$pdo_options = [ 
					PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
				];

				$db_connection = sprintf('mysql:dbname=%s;host=%s;charset=utf8mb4', self::DB_NAME, self::HOST_NAME);

				self::$instance = new PDO( $db_connection, self::DB_USER, self::DB_PASS, $pdo_options );

			} catch (PDOException $e) {
				$message = "Database Connection Error" . $e->getMessage();

				die($message);
			}
		}
		// return the instance of PDO
		return self::$instance;
	}

	private function __construct() {}
	private function __clone() {}
	private function __wakeup() {}
}