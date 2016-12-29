<?php

//Povezuje PHP sa serverom
class Database extends PDO{

	public function __construct(){

		//Povezivanje sa bazom
		parent::__construct('mysql:host=localhost;dbname=users', 'root', '');;
	}

	//Osnovna funkcija za sve SELECT upite ka bazi
	public function select($query, $bindValues = array(), $fetchMode = PDO::FETCH_ASSOC){
		
		//Prosleđivanje sql upita
		$statement = $this->prepare($query);
		//Postavljanje vrednosti koje se dinamički pune
		foreach($bindValues as $key => $value){
			$statement->bindValue(":$key", $value);
		}

		$statement->execute();
		return $statement->fetchAll($fetchMode);
	}

	public function insert($table, $data){

		//
		$dataName = implode("', '", array_keys($data));
		$dataValues = ":" . implode("', :", array_keys($data));

		$statement = $this->prepare("INSERT INTO $table ($dataName) VALUES ($dataValues)";

		foreach($bindValues as $key => $value){
			$statement->bindValue(":$key", $value);
		}

		$statement->execute();
	}
}