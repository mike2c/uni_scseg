<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Page extends CI_Controller{

		function __construct(){
			parent::__construct();
		}

		function index(){
			$this->load_page("home");
		}
		
		function page($page){
			$this->load_page($page);
		}

		private function load_page($page){

			if(file_exists("application/views/pages/". $page. ".php")){
				$this->load->view("header");
				$this->load->view("top_menu");
				$this->load->view("pages/".$page);
				$this->load->view("footer");
			}else{
				echo "entra";
			}
		}

		function acceder(){

			$this->load->view("header");
			$this->load->view("top_menu");
			//$this->load->view("pages/home");
			//$this->load->view("pages/login");
			$this->load->view("footer");
		}

		function acerca_de(){

		}
	}
?>