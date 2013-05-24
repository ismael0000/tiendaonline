<?php
	class Connection {
		//Fijar variables de la DB
		public static $serverIP="localhost";
		public static $loginName="root";
		public static $password="";
		public static $dbName="miscositas";
		public static $conn;
		
		public static function Connect() {
			Connection::$conn = mysql_connect(Connection::$serverIP,
											  Connection::$loginName,
											  Connection::$password);
		}
		
		public static function choiceDatabase(){
			mysql_select_db(Connection::$dbName, Connection::$conn);
			mysql_query("SET NAMES 'utf8'", Connection::$conn);
		}
		
		public static function excuteQuery($sql) {
			Connection::Connect();
			Connection::choiceDatabase();
			$result = mysql_query($sql, Connection::$conn);
			return $result;
		}
	}
?>
