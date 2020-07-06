<?php
	class Blog extends CI_Controller{
	    
		public function __construct(){
            parent::__construct();
            $this->load->model('Blog_model', 'blog');
            $this->load->model('App_model', 'app');
        }
        public function blogcomment($blogid){
            $blogcomment = $this->blog->blogcomment($blogid);
            $c=0; $comments = null;
            foreach ($blogcomment as $comment) { $c++;
                $comments .= "<div class='media'>
                <div class='media-left'>
                    <a href='#'>
                        <img class='media-object img-circle' src='https://ui-avatars.com/api/?format=svg&name=$comment[pname]' alt='$comment[pname]'>
                    </a>
                </div>
                <div class='media-body'>
                        <a class='btn btn-primary btn-xs pull-right'>".date('d M Y',strtotime($comment['timestamp']))."</a>
                    <h4 class='media-heading'>$comment[pname]</h4>
                    
                    <p>$comment[comment]</p>
                </div>
            </div>";
            }if($c==0){
                $comments .= "<p><center>No Comment found</center></p>";
            }
            echo json_encode(['count'=>$c,'comments'=>$comments]);
        }
        public function addcomment(){
            $this->form_validation->set_rules('blogid', 'Something', 'required|max_length[150]');
            $this->form_validation->set_rules('pname', 'Name', 'required|max_length[150]');
            $this->form_validation->set_rules('pcomment', 'Comment', 'required|max_length[150]');
			if($this->form_validation->run() === FALSE){
                $err = validation_errors();
                // header change to json
                header('Content-Type: application/json');
                echo json_encode(array('status'=>'error','data'=>$err));
			}else{
                $data = array(
                    "blog_id"=>$this->input->post('blogid'),
                    "pname"=>$this->input->post('pname'),
                    "comment"=>$this->input->post('pcomment'),
                    "timestamp"=>date('Y-m-d H:i:s')
                );
				if($this->blog->addcomment($data)){
                    // header change to json
                    header('Content-Type: application/json');
                    echo json_encode(array('status'=>'ok','data'=>"Comments Added!"));
				}else{
                    // header change to json
                    header('Content-Type: application/json');
                    echo json_encode(array('status'=>'error','data'=>"Something went wrong!"));
				}
			}
        }
        public function categoryjson(){
            $categories = $this->blog->categories();
            // header change to json
            header('Content-Type: application/json');
            echo json_encode(['categories'=>$categories]);
        }
        public function subcategoryjson(){
            $subcategories = $this->blog->subcategories();
            // header change to json
            header('Content-Type: application/json');
            echo json_encode(['subcategories'=>$subcategories]);
        }
        public function addblogcategory(){
            $data['categories'] = $this->blog->categories();
		    $this->load->view('dash_temp/header');
		    $this->load->view('blogs/addblogcategory',$data);
		    $this->load->view('dash_temp/footer');
		}
        public function addblogsubcategory(){
            $data['categories'] = $this->blog->categories();
            $data['subcategories'] = $this->blog->subcategories();
		    $this->load->view('dash_temp/header');
		    $this->load->view('blogs/addblogsubcategory',$data);
		    $this->load->view('dash_temp/footer');
		}
		public function addnewcat(){
			$this->form_validation->set_rules('category_name', 'Name', 'required|max_length[150]');
			if($this->form_validation->run() === FALSE){
                $err = $this->form_validation->error_array();
                // header change to json
                header('Content-Type: application/json');
                echo json_encode(array('errarray'=>'true','status'=>'error','data'=>$err));
			}else{
                $data = $this->input->post();
				if($this->blog->addnewcat($data)){
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
			$this->form_validation->set_rules('subcat_name', 'Name', 'required|max_length[150]');
			if($this->form_validation->run() === FALSE){
                $err = $this->form_validation->error_array();
                // header change to json
                header('Content-Type: application/json');
                echo json_encode(array('errarray'=>'true','status'=>'error','data'=>$err));
			}else{
                $data = $this->input->post();
				if($this->blog->addnewsubcat($data)){
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
        public function newblog(){
            $data['categories'] = $this->blog->categories();
            $data['subcategories'] = $this->blog->subcategories();
            $data['listblogs'] = $this->blog->listblogs();
		    $this->load->view('dash_temp/header');
		    $this->load->view('blogs/newblog',$data);
		    $this->load->view('dash_temp/footer');
		}
		public function addnew_blog(){
            $this->form_validation->set_rules('subcat_id', 'Category/Subtegory', 'required');
			$this->form_validation->set_rules('blog_title', 'Title', 'required|max_length[150]');
			if($this->form_validation->run() === FALSE){
                $err = $this->form_validation->error_array();
                // header change to json
                header('Content-Type: application/json');
                echo json_encode(array('errarray'=>'true','status'=>'error','data'=>$err));
			}else{
                $data = $this->input->post();
                $data['thumbnail'] = 'nothumb.jpg';
                $data['created_by'] = 1;
                $data['timestamp'] = date('Y-m-d H:i:s');
				if($this->blog->addnew_blog($data)){
                    // header change to json
                    header('Content-Type: application/json');
                    echo json_encode(array('errarray'=>'false','status'=>'ok','data'=>"New Blog Added!"));
				}else{
                    // header change to json
                    header('Content-Type: application/json');
                    echo json_encode(array('errarray'=>'false','status'=>'error','data'=>"Something went wrong!"));
				}
			}
        }

        public function blogs($offset=0){
            $device = $this->input->post('device')=="android"?'api':'web';
            $config['base_url'] = base_url('blog/blogs/');
            $config['uri_segment'] = 3;
            $config['per_page'] = 1;
            $config['total_rows'] = $this->blog->countblogs();
            
            /* Bootstrap Pagination setting start */
            $config['full_tag_open'] = "<ul class='pagination'>";
            $config['full_tag_close'] ="</ul>";
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
            $config['next_tag_open'] = "<li>";
            $config['next_tagl_close'] = "</li>";
            $config['prev_tag_open'] = "<li>";
            $config['prev_tagl_close'] = "</li>";
            $config['first_tag_open'] = "<li>";
            $config['first_tagl_close'] = "</li>";
            $config['last_tag_open'] = "<li>";
            $config['last_tagl_close'] = "</li>";
            /* Bootstrap Pagination setting end */ 
    
            // Init Pagination
            $this->pagination->initialize($config);
    
            $data['listblogs'] = $this->blog->listblogs($config['per_page'],$offset);
            if($device=="api"){
            // header change to json
			header('Content-Type: application/json');
			echo json_encode(array('status'=>'ok','data'=>$data['listblogs']));
            }else{
                $this->load->view('dash_temp/header');
                $this->load->view('blogs/bloglist',$data);
                $this->load->view('dash_temp/footer');
            }
        }

        /* public function catlistjson(){
			$filterdata = array(
				"column_order" => array('id','category_name',null),
				"column_search" => array('category_name'),
				"order" => array('id' => 'desc')
			);
			$this->blog->getblogcat();
			$list = $this->app->datatableapi($this->input->post(),$filterdata);

			$data = array();
			$no = $this->input->post('start');
			foreach ($list['data'] as $rowdata) {
				$no++;
				$row = array();
				$row[] = $no.".";
				$row[] = $rowdata->category_name;
				$row[] = "edit btn";
				$data[] = $row;
            }
            
			$output = array(
				"draw" => empty($this->input->post('draw')) ? 'none' : $this->input->post('draw'),
				"recordsTotal" => $this->blog->countblogcat(),
				"recordsFiltered" => $list['numrows'],
				"data" => $data
			);
			// header change to json
			header('Content-Type: application/json');
			echo json_encode($output);
		} */
	}