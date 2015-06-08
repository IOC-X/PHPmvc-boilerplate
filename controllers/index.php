<?php 
	class Index extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('index/index',false);
		}
		public function signUp(){
			$this->view->render('index/signUp',false);
		}
	}
?>