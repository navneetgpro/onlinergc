<?php
	class P extends CI_Controller{
	    
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Blog_model', 'blog');
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
		public function blogs($offset=0){
			$device = $this->input->post('device')=="android"?'api':'web';
			$config['base_url'] = base_url('p/blogs/');
			$config['uri_segment'] = 3;
			$config['per_page'] = 2;
			$config['total_rows'] = $this->blog->countblogs();
			
			/* Bootstrap Pagination setting start */
			$config['full_tag_open'] = '<div><ul class="pagination">';
			$config['full_tag_close'] = '</ul></div><!--pagination-->';
			$config['first_link'] = '&laquo; First';
			$config['first_tag_open'] = '<li class="prev page">';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = 'Last &raquo;';
			$config['last_tag_open'] = '<li class="next page">';
			$config['last_tag_close'] = '</li>';
			$config['next_link'] = 'Next &rarr;';
			$config['next_tag_open'] = '<li class="next page">';
			$config['next_tag_close'] = '</li>';
			$config['prev_link'] = '&larr; Previous';
			$config['prev_tag_open'] = '<li class="prev page">';
			$config['prev_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li class="page">';
			$config['num_tag_close'] = '</li>';
			$config['anchor_class'] = 'follow_link';
			/* Bootstrap Pagination setting end */ 
	
			// Init Pagination
			$this->pagination->initialize($config);
	
			$data['thisvar']=$this;
			$data['listblogs'] = $this->blog->listblogs($config['per_page'],$offset);
			if($device=="api"){
			// header change to json
			header('Content-Type: application/json');
			echo json_encode(array('status'=>'ok','data'=>$data['listblogs']));
			}else{
				$this->load->view('site_temp/header');
				$this->load->view('site/blogs',$data);
				$this->load->view('site_temp/footer');
			}
		}
		public function blog($id){
			$data['thisvar']=$this;
			$data['blogid']=$id;
			$data['blog'] = $this->blog->blogdetail($id);
		    $this->load->view('site_temp/header');
			$this->load->view('site/blog',$data);
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