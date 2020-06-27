<?php
	class C extends CI_Controller{
	    
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Course_model', 'course');
		}
		public function index(){
		    die('access denied');
        }
		public function listcourse(){
		    $this->load->view('site_temp/header');
		    $this->load->view('site/certificates');
		    $this->load->view('site_temp/footer');
		}
		public function addcategory(){
            $data['categories'] = $this->course->categories();
		    $this->load->view('site_temp/header');
		    $this->load->view('course/addcategory',$data);
		    $this->load->view('site_temp/footer');
		}
        public function addsubcategory(){
            $data['categories'] = $this->course->categories();
            $data['subcategories'] = $this->course->subcategories();
		    $this->load->view('site_temp/header');
		    $this->load->view('course/addsubcategory',$data);
		    $this->load->view('site_temp/footer');
		}

		public function addnewcat(){
			$this->form_validation->set_rules('title', 'Name', 'required|max_length[150]');
			if($this->form_validation->run() === FALSE){
                $err = $this->form_validation->error_array();
                // header change to json
                header('Content-Type: application/json');
                echo json_encode(array('errarray'=>'true','status'=>'error','data'=>$err));
			}else{
				$data = $this->input->post();
				$data['banner_img']='noimage.jpg';
				$data['timestamp']=date('Y-m-d H:i:s');
				if($this->course->addnewcat($data)){
                    // header change to json
                    header('Content-Type: application/json');
                    echo json_encode(array('errarray'=>'false','status'=>'ok','data'=>"New Category Added!"));
				}else{
                    // header change to json
                    header('Content-Type: application/json');
                    echo json_encode(array('errarray'=>'false','status'=>'error','data'=>"Something went wrong!"));
				}
			}
        }
		public function addnewsubcat(){
			$this->form_validation->set_rules('cat_id', 'Category', 'required');
			$this->form_validation->set_rules('title', 'Name', 'required|max_length[150]');
			if($this->form_validation->run() === FALSE){
                $err = $this->form_validation->error_array();
                // header change to json
                header('Content-Type: application/json');
                echo json_encode(array('errarray'=>'true','status'=>'error','data'=>$err));
			}else{
				$data = $this->input->post();
				$data['icon_img']='noimage.jpg';
				$data['timestamp']=date('Y-m-d H:i:s');
				if($this->course->addnewsubcat($data)){
                    // header change to json
                    header('Content-Type: application/json');
                    echo json_encode(array('errarray'=>'false','status'=>'ok','data'=>"New Category Added!"));
				}else{
                    // header change to json
                    header('Content-Type: application/json');
                    echo json_encode(array('errarray'=>'false','status'=>'error','data'=>"Something went wrong!"));
				}
			}
        }
	}