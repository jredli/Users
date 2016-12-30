<?php

class Users extends Controller{

	function __construct(){
		parent::__construct();

		//Provera da li je sesija popunjena
		Session::init();
		$loggedIn = Session::get('loggedIn');
		if($loggedIn == false){
			Session::destroy();
			header('location: ../index');
			exit;
		}
		
	}

	//Podrazumevani kontroler
	public function index(){
		$this->view->render('users/home');
	}

	public function allUsers(){
		$this->loadModel('user_model');
		$this->view->all_users = $this->model->all_users();

		$this->view->render('users/all_users');
	}


	//Uništava sesiju
	function logout(){
		Session::destroy();
		header('location: ../index');
		exit;
	}


}