<?php
	class P extends CI_Controller{
	    
		public function __construct()
		{
			parent::__construct();
		}
		public function index(){
		    $this->load->view('site_temp/header');
		    $this->load->view('site/indexpage');
		    $this->load->view('site_temp/footer');
		}
		public function testing(){
			echo "hello navneet on dev";
		}
		public function certificates(){
		    $this->load->view('site_temp/header');
		    $this->load->view('site/certificates');
		    $this->load->view('site_temp/footer');
		}
		public function signin(){
		    $this->load->view('site/signinpage');
		}
	}