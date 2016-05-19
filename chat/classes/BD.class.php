<?php
class BD{
	private static $conn;
	public function __construct(){}
	
	public function conn(){
		if(is_null(self::$conn)){
			self::$conn = new PDO('mysql:host='.HOST.';dbname='.BD.'', ''.USER);
		}
		return self::$conn;
	}
}
?>