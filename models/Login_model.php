<?php 
	class Login_model extends Model{
		function __construct(){
			parent::__construct();
		}
		public function login(){
			$st = $this->db->prepare("");
			$st->execute(array(
				
			));
		}
		public function signup(){
			$st = $this->db->prepare("");
			$st->execute(array(
		
			));
		}
	}
?>