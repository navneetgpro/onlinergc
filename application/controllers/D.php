<?php
	class D extends CI_Controller{
	    
		public function __construct()
		{
			parent::__construct();
		}
		public function signupotp(){
			$this->form_validation->set_rules('fullname', 'Name', 'required|max_length[80]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[100]');
            $this->form_validation->set_rules('password', 'Password', 'required');
			if($this->form_validation->run() === FALSE){
                $err = validation_errors();
                // header change to json
                header('Content-Type: application/json');
                echo json_encode(array('status'=>'error','data'=>$err));
			}else{
				$data = array(
					'subcat_id'=>$this->input->post('subcat_id'),
					'course_title'=>$this->input->post('course_title'),
					'sale_price'=>$this->input->post('sale_price'),
					'actual_price'=>$this->input->post('actual_price'),
					'demo_video'=>$this->input->post('demo_video'),
					'description'=>empty($this->input->post('description'))?null:$this->input->post('description'),
				);
				if(true){
                    // header change to json
                    header('Content-Type: application/json');
                    echo json_encode(array('status'=>'ok','data'=>"OTP Sent to your email..."));
				}else{
                    // header change to json
                    header('Content-Type: application/json');
                    echo json_encode(array('status'=>'error','data'=>"Something went wrong!"));
				}
			}
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
		public function signup(){
		    $this->load->view('dash/signuppage');
		}
	}