<?php
	class T extends CI_Controller{
	    
		public function __construct()
		{
            parent::__construct();
            $this->load->model('Teacher_model', 'tech');
		}
		public function index(){
		    die('access denied');
        }
        public function addnewtecher(){
		    $this->load->view('site_temp/header');
		    $this->load->view('teacher/addnewtecher');
		    $this->load->view('site_temp/footer');
		}
		public function listtechers(){
            $data['teachers'] = $this->tech->teachersarr();
		    $this->load->view('site_temp/header');
		    $this->load->view('teacher/listtechers',$data);
		    $this->load->view('site_temp/footer');
        }
        public function addnew_teacher(){
            $this->form_validation->set_rules('full_name', 'Name', 'required|max_length[100]');
            $this->form_validation->set_rules('bio', 'Bio', 'max_length[50]');
            $this->form_validation->set_rules('contact_no', 'Contact', 'required|min_length[10]|max_length[10]');
            $this->form_validation->set_rules('email', 'Email', 'valid_email|max_length[100]');
            $this->form_validation->set_rules('experience', 'Experience', 'max_length[250]');
			if($this->form_validation->run() === FALSE){
                $err = $this->form_validation->error_array();
                // header change to json
                header('Content-Type: application/json');
                echo json_encode(array('errarray'=>'true','status'=>'error','data'=>$err));
			}else{
                $data = $this->input->post();
                $data['profile_picture']='tech_pro.jpg';
                $data['timestamp']=date('Y-m-d H:i:s');
				if($this->tech->addnew_teacher($data)){
                    // header change to json
                    header('Content-Type: application/json');
                    echo json_encode(array('errarray'=>'false','status'=>'ok','data'=>"New Teacher Added!"));
				}else{
                    // header change to json
                    header('Content-Type: application/json');
                    echo json_encode(array('errarray'=>'false','status'=>'error','data'=>"Something went wrong!"));
				}
			}
        }
	}