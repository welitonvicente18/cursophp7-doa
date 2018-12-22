<?php 

class Sql extends PDO{

	private $conn;

//para conectar com o db automaticamente
	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

	}

	private function setParams($stament, $parameters = array()){

		foreach ($parameters as $key => $value) {
			
			$this->bindParam($key, $value);
		}

	}

	private function setParam($stament, $key, $value){

		$stament->bindParam($key, $value);

	}

	public function query($rowQuery, $params = array()){

		$stmt= $this->conn->prepare($rowQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
	}

	public function select($rowQuery, $params = array()):array
	{

		$stmt = $this->query($rowQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

}
 ?>