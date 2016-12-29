<?php

class Controller{

	function __construct(){
		$this->view = new View();
	}

	//Učitava model
	public function loadModel($name){

		$path = 'Models/' . $name . '.php';

		if(file_exists($path)){
			require 'Models/' . $name . '.php';
			$this->model = new $name();
		}
	}

}