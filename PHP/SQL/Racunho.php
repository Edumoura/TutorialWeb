<?php

Class Sql extends PDO {

	private $conn;

	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root","");
	}

	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		foreach ($params as $key => $value) {

			$stmt->bintParam($key, $value);
			
		}

	}

}






 ?>