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



}