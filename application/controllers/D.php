<?php
	class D extends CI_Controller{
	    
		public function __construct()
		{
			parent::__construct();
		}
		public function index(){
		    $this->load->view('dash_temp/header');
		    $this->load->view('dash/indexpage');
		    $this->load->view('dash_temp/footer');
        }
		public function certificates(){
		    $this->load->view('dash_temp/header');
		    $this->load->view('dash/certificates');
		    $this->load->view('dash_temp/footer');
		}
		public function signin(){
		    $this->load->view('dash/signinpage');
		}
	}