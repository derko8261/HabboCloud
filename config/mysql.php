<?php

require_once './config/applications.php';

class MySQL extends Applications {

	public static function Database() {
		try {
			$host = "sql01.hebergnity.com";
			$dbname = "NITYDB-21343628";
			$user = "eh66Zg511X";
			$pass = "NITYDB-21343628";
            
			$db = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $user, $pass);
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$db->exec("SET CHARACTER SET utf8mb4");
			return $db;
		}

		catch(PDOException $e) {
			die('Habbo Cloud est déconnecté');
		}
	}
}
