<?php

class System{

	function __construct(){

		//Pita da li je nešto prosleđeno u url, ako jeste cepa ga po /
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		//Ako ne unesemo ništa u url, poziva se podrazumevani početni controller
		if(empty($url[0])){
			require 'controllers/index.php';
			$controller = new Index();
			$controller->index();
			return false;
		}

		//Učitava controller koji smo pogodili u URL-u da bi ga Sistem video, u suprotnom ne može da napravi objekat
		$file = 'Controllers/' . $url[0] . '.php';		
			if (file_exists($file)) {
				require $file;
			} else {
				echo 'This page doesnt exist';
				return false;
			}

		//Pravimo objekat unetog controllera u url-u
		$controller = new $url[0];

		//Izvršava se ukoliko je prosleđen argument u controller
		if(isset($url[2]))
			if(method_exists($controller, $url[1])){
				$controller->{$url[1]}($url[2]);
			}
			else{
				echo 'This page doesnt exist';
				return false;
			}
		//Ako nije, poziva se controller bez argumenta
		else{
			if(isset($url[1])){
				if(method_exists($controller, $url[1])){
					$controller->{$url[1]}();
				}
				else{
					echo 'This page doesnt exist';
				return false;
				}				
			}
			//U suprotnom se poziva podrazumevani controller
			else{
				$controller->index();
			}
		}

	}

}