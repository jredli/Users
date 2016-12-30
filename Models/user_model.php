<?php

class user_model extends Model{

	public function __construct(){
		//Omogućava korišćenje PDO
		parent::__construct();
	}

	public function login(){
		$query = $this->db->prepare("SELECT * FROM user WHERE username = :usr AND password = :pass");
		$query->execute(array(
			':usr' => $_POST['tbUser'],
			':pass' => $_POST['tbPass']
		));

		var_dump($query);
		//Provera da li je upit vratio neki rezultat, ako jeste, redirect, ako nije, vraćanje na login formu
		$check = $query->rowCount();
		if($check > 0){
			//Startovanje i popunjavanje sesije
			Session::init();
			Session::set('loggedIn', true);	
			Session::set('user', $_POST['tbUser']);		
			header('location: ../users');
		} else {
			header('location: ../index');
		}
	}


	//Dohvatanje svih korisnika po datumu kreiranja naloga
	public function all_users(){
		return $this->db->select("SELECT * FROM user ORDER BY reg_date ASC");
	}

	//Za ispit ulogovanog korisnika
	public function user($data){

	}
}