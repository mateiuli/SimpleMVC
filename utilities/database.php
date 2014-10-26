<?php

class Database {
	private static $db;

	// Database PDO Resource
	private $pdo;

	private function __construct() {
		try {
			// Connection string
			$dsn  = 'mysql:host=' . DB_HOST .';';
			$dsn .= 'dbname=' . DB_NAME . ';';

			$this->pdo = new PDO($dsn, DB_USER, DB_PASS);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		}
		catch(PDOException $e) {
			echo 'Database error: ' . $e->getMessage();
		}
	}

	public static function getInstance() {
		if(self::$db instanceof PDO)
			return self::$db;

		self::$db = (new Database())->pdo;
		return self::$db;
	}
}

?>