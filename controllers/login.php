<?php 
	class Login extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			Session::init();
			if(!isset($_SESSION['loggedIn'])){
				$this->view->render('login/index',false);	
			}
			else{
				header('location:'.URL);
			}
			
		}
		public function login(){
			require 'models/Login_model.php';
			$model = new Login_model();
			$model->login();
		}
		public function signup(){
			require 'models/Login_model.php';
			$model = new Login_model();
			$model->signup();
			header('location:'.URL);
		}
	}
?>