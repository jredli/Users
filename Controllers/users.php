<?php

class Users extends Controller{

	function __construct(){
		parent::__construct();
		
	}

	//Podrazumevani kontroler
	public function index(){
		$this->view->render('users/home');
	}


	//Uništava sesiju
	function logout(){
		Session::destroy();
		echo 'ss';
		exit;
	}


}