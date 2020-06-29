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
		public function addvideo($id){
			$data['id'] = $id;
		    $this->load->view('site_temp/header');
		    $this->load->view('course/addvideo',$data);
		    $this->load->view('site_temp/footer');
		}
		public function addcourse(){
			$data['subcategories'] = $this->course->subcategories();
		    $this->load->view('site_temp/header');
		    $this->load->view('course/addcourse',$data);
		    $this->load->view('site_temp/footer');
		}
		public function listcourse(){
			$data['courses'] = $this->course->courses();
		    $this->load->view('site_temp/header');
		    $this->load->view('course/listcourse',$data);
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

		public function addnew_course(){
			$this->form_validation->set_rules('subcat_id', 'Subcategory', 'required');
			$this->form_validation->set_rules('course_title', 'Title', 'required|max_length[100]');
			$this->form_validation->set_rules('sale_price', 'Sale Price', 'required');
			$this->form_validation->set_rules('actual_price', 'Actual Price', 'required');
			$this->form_validation->set_rules('demo_video', 'Demo video', 'required');
			if($this->form_validation->run() === FALSE){
                $err = $this->form_validation->error_array();
                // header change to json
                header('Content-Type: application/json');
                echo json_encode(array('errarray'=>'true','status'=>'error','data'=>$err));
			}else{
				$data = array(
					'subcat_id'=>$this->input->post('subcat_id'),
					'course_title'=>$this->input->post('course_title'),
					'sale_price'=>$this->input->post('sale_price'),
					'actual_price'=>$this->input->post('actual_price'),
					'demo_video'=>$this->input->post('demo_video'),
					'description'=>empty($this->input->post('description'))?null:$this->input->post('description'),
				);
				if(count($this->input->post('searchtag'))>0){
					$data['search_tags']=implode(',',$this->input->post('searchtag'));
				}else{
					$data['search_tags']=null;
				}
				$data['teacher_id']=1;
				$data['banner_img']='noimage.jpg';
				$data['created_at']=date('Y-m-d H:i:s');
				if($this->course->addnew_course($data)){
                    // header change to json
                    header('Content-Type: application/json');
                    echo json_encode(array('errarray'=>'false','status'=>'ok','data'=>"New Course created!"));
				}else{
                    // header change to json
                    header('Content-Type: application/json');
                    echo json_encode(array('errarray'=>'false','status'=>'error','data'=>"Something went wrong!"));
				}
			}
        }
		public function addnew_video(){
			$this->form_validation->set_rules('video_url', 'url', 'required|max_length[100]');
			if($this->form_validation->run() === FALSE){
                $err = $this->form_validation->error_array();
                // header change to json
                header('Content-Type: application/json');
                echo json_encode(array('errarray'=>'true','status'=>'error','data'=>$err));
			}else{
				$data = $this->input->post();
				$data['timestamp']=date('Y-m-d H:i:s');
				if($this->course->addnew_video($data)){
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