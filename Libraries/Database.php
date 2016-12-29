<?php

//Povezuje PHP sa serverom
class Database extends PDO{

	public function __construct(){

		//Povezivanje sa bazom
		parent::__construct('mysql:host=localhost;dbname=users', 'root', '');;
	}
}