<?php

class ConexionBD {

	private static $instance;

	private function __construct() {

	}
	public static function getInstance(){
		if(self::$instance == null){
			self::$instance = new ConexionBD();
		}

		return self::$instance;
	}
	public function getConexion() {
		$cn = null;
		try {
    		$cn = new PDO("mysql:host=localhost;dbname=productos",
    					  "root", "");
		} catch (PDOException $ex) {
    		throw new Exception($ex->getMessage());
		}
		return $cn;
	}
}

?>