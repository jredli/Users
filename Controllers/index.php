<?php

class Index extends Controller{

	function __construct(){
		parent::__construct();
		
	}

	//Podrazumevani kontroler
	public function index(){
		$this->view->render('login');
	}

	//Učitavanje modela za logovanje i izvršavanje
	public function login(){		
		$this->loadModel('user_model');
		$this->model->login();
	}

	//Registracija korisnika
	public function register(){
		$this->loadModel('user_model');
		$newUser = array(
			'username' => $_POST['regUser'],
			'password' => md5($_POST['regPass']),
			'reg_date' => date('Y-m-d H:i:s')
		);	
		$this->model->register('user', $newUser);
		header('location: ../users/index');
	}



}