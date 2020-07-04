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
		public function certificates(){
			$this->load->view('site_temp/header');
			$this->load->view('site/indexpage');
			$this->load->view('site_temp/footer');
		}
		public function about(){
		    $this->load->view('site_temp/header');
			$this->load->view('site/about');
			$this->load->view('site_temp/footer');
		}
		public function blogs(){
		    $this->load->view('site_temp/header');
			$this->load->view('site/blogs');
			$this->load->view('site_temp/footer');
		}
		public function contact(){
		    $this->load->view('site_temp/header');
			$this->load->view('site/contact');
			$this->load->view('site_temp/footer');
		}
		public function signin(){
		    $this->load->view('site/signinpage');
		}
	}