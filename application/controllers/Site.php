<?php
	class Site extends CI_Controller{
	    
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Site_model', 'dbcon');
			$this->load->model('Common_model','common');
		}
		public function first(){
			$this->common->is_login();
			$head['title'] = "Add User";
		    $this->load->view('site_temp/site_header',$head);
			$this->load->view('site/advender');
		    $this->load->view('site_temp/site_footer');
		}
		public function users(){
			$this->common->is_login();
			$head['title'] = "User List";
			$data['users'] = $this->dbcon->listuser();
		    $this->load->view('site_temp/site_header',$head);
			$this->load->view('site/users',$data);
		    $this->load->view('site_temp/site_footer');
		}
		public function userslist($id=NULL){
			$this->common->is_login();
			$head['title'] = "User List";
			$data['users'] = $this->dbcon->underuser($id);
		    $this->load->view('site_temp/site_header',$head);
			$this->load->view('site/userslist',$data);
		    $this->load->view('site_temp/site_footer');
		}
		public function login(){
			//defult variables defied
			$er=0; $outmsg='';
			$baseu = base_url();
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if($this->form_validation->run() === FALSE){
				$outmsg = validation_errors();
			}else{
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				//login logic start
				$result = $this->dbcon->loginMe($username,$password);

				$err = count($result) > 0 ?  true : false;
				if(!$err){
					$outmsg='Invalid Login!';
				}else{
					$sesnvar = array(
						"logged_in" => true,
						"utype" => $result[0]->utype,
						"userid" => $result[0]->id
					);
					// user data in session
					$this->session->set_userdata($sesnvar);
					$er=1; $outmsg = "Login Successful!";
					$outmsg .= "<script>setTimeout(function () { window.location.href = '{$baseu}'; }, 250)</script>";
				}
			}

			//message post
			$type = ($er==1) ? "success" : "danger";
			echo json_encode(array('msgtype'=>$type,'datacon'=>$outmsg));
		}
        public function logout(){
			$newdata = array(
				'utype'  =>'',
				'userid' => '',
				'logged_in' => FALSE,
				);
			$this->session->unset_userdata($newdata);
			$this->session->sess_destroy();
			redirect('site/signin','refresh');
		}

	
		public function addnewvender(){
			$this->form_validation->set_rules('name', 'Customer Name', 'required');
			$this->form_validation->set_rules('contact', 'contact', 'required|min_length[10]|max_length[10]|callback_check_phone_exists');
			$this->form_validation->set_rules('pincode', 'Pincode', 'required|min_length[6]|max_length[6]');
			$this->form_validation->set_rules('address', 'Full address', 'required');
			if($this->form_validation->run() === FALSE){
			    $err = $this->form_validation->error_array();
    			echo json_encode(array("multi"=>"true","msg"=>$err,"reset"=>"false","typ"=>"danger"));
			}else{
				$data = array(
					"full_name" => $this->input->post('name'),
					"umob" => $this->input->post('contact'),
					"upincode" => $this->input->post('pincode'),
					"uaddress" => $this->input->post('address'),
					"add_by" => $this->session->userdata('userid')
				);
				if($this->dbcon->addnewvender($data)){
				    echo json_encode(array("multi"=>"false","msg"=>"User Added!","reset"=>"true","typ"=>"success"));
				}else{
				    echo json_encode(array("multi"=>"false","msg"=>"Something went wrong, please try again!","reset"=>"false","typ"=>"danger"));
				}
			}
		}

			//END CUSTOMER
		private function randomkey($length = 35){
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
		// pages
		public function addvendor(){
		    $this->common->is_login();
			$head['title'] = "Add Vender";
		    $this->load->view('site_temp/site_header',$head);
			$this->load->view('site/advender');
		    $this->load->view('site_temp/site_footer');
		}
		public function addcustomer(){
		    $this->common->is_login();
			$head['title'] = "Add Customer";
			$data['lastref'] = $this->dbcon->lastrefid();
			$d= $this->generateid();
			$data['bookid'] = $d['nxtid'];
		    $this->load->view('site_temp/site_header',$head);
			$this->load->view('site/adcust',$data);
		    $this->load->view('site_temp/site_footer');
		}
		public function viewvendor(){
		    $this->common->is_login();
			$head['title'] = "View Vender";
			$data['venders'] = $this->dbcon->venders();
		    $this->load->view('site_temp/site_header',$head);
			$this->load->view('site/viewvend',$data);
		    $this->load->view('site_temp/site_footer');
		}
		public function viewcustomer(){
		    $this->common->is_login();
			$head['title'] = "View Customer";
			$data['customers'] = $this->dbcon->customers();
		    $this->load->view('site_temp/site_header',$head);
			$this->load->view('site/viewcust',$data);
		    $this->load->view('site_temp/site_footer');
		}
		
		public function signin(){
			$this->load->view('site/signin');
		}

		// Check if phone exists
		public function check_phone_exists($phone){
			$this->form_validation->set_message('check_phone_exists', 'That Phone is taken. Please choose a different one');
			if($this->dbcon->check_phone_exists($phone)){
				return true;
			} else {
				return false;
			}
		}
	}