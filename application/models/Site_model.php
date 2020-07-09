<?php
	class Site_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}
		public function registerstudent($data,$profile){
			$this->db->insert('student_details',$profile);
			return $this->db->insert('users',$data);
		}
		public function loginMe($username,$password){
            $this->db->select('userid,user_name,password,user_type');
			$this->db->from('users');
			$this->db->where('username',$username);
			$this->db->where('acc_status','active');
			$query = $this->db->get();
            $user = $query->result();

            if(!empty($user)){
                return verifyEncryptPass($password, $user[0]->password) ? $user : array();
            } else {
                return array();
            }
		}
		public function listuser(){
			$this->db->select('id,uname');
			$this->db->from('users');
			$query = $this->db->get();
			if($query->num_rows()>0){
			return $query->result_array();
			}else{ return array(); }
		}
		public function underuser($id){
			$this->db->select('*');
			$this->db->from('newuser');
			$this->db->where('add_by',$id);
			$query = $this->db->get();
			if($query->num_rows()>0){
			return $query->result_array();
			}else{ return array(); }
		}
		public function venders(){
            $this->db->select('*');
			$this->db->from('venders');
			$this->db->order_by("id", "asc");
			$query = $this->db->get();
			if($query->num_rows()>0){
			return $query->result_array();
			}else{ return array(); }
        }
        public function customers(){
            $this->db->select('*');
			$this->db->from('customer');
			$this->db->order_by("id", "asc");
			$query = $this->db->get();
			if($query->num_rows()>0){
			return $query->result_array();
			}else{ return array(); }
        }
		public function check_phone_exists($phn){
            $query = $this->db->get_where('newuser', array('umob' => $phn));
			if($query->row_array()){
				return false;
			} else {
				return true;
			}
        }
		public function isnotassign($site,$agent){
            $query = $this->db->get_where('assign_site', array('site_id' => $site,'agent_id'=>$agent));
			if($query->row_array()){
				return false;
			} else {
				return true;
			}
        }
		public function fullviewflat($id){
			$this->db->select('fi.uniq_id as unqid,fi.*,pro.*');
			$this->db->from('flatsinfo fi');
			$this->db->join('propty pro','pro.uniq_id = fi.uniq_id');
			$this->db->where('fi.id',$id);
			$query = $this->db->get();
            return $query->row_array();
		}
		public function fullviewsite($id){
			$this->db->select('uniq_id as unqid,site_name,site_size,site_lat,site_long,site_stateid,site_cityid,site_address,site_type,site_ownername,site_ownerphone,site_owneremail');
			$this->db->from('propty');
			$this->db->where('uniq_id',$id);
			$query = $this->db->get();
            return $query->row_array();
		}
		public function flatinfo($fid){
			$this->db->select('flat_total as tolsize,flat_price_persqr as pricesqr');
			$this->db->from('flatsinfo');
			$this->db->where('id',$fid);
			$query = $this->db->get();
            return $query->row_array();
		}
		public function listassigned(){
			$this->db->select('site_id,agent_id');
			$this->db->from('assign_site');
			$query = $this->db->get();
            return $query->result_array();
		}
		public function agents(){
			$this->db->select('ag_id,name');
			$this->db->from('agent');
			$query = $this->db->get();
            return $query->result_array();
		}
		public function listsites(){
			$this->db->select('uniq_id,site_name,site_cityid,site_size,site_ownername,site_ownerphone,site_type');
			$this->db->from('propty');
			$query = $this->db->get();
            return $query->result_array();
		}
		public function listbooking(){
			$this->db->select('*');
			$this->db->from('current_books');
			$query = $this->db->get();
            return $query->result_array();
		}
		public function listsitesofuser($logid=null){
			if(empty($logid)){
				$agntid = $this->getuseridbyagent($this->session->userdata('userid'));
			}else{ $agntid = $logid; }
			$this->db->select('p.*,at.*');
			$this->db->from('propty p');
			$this->db->join('assign_site at','at.site_id = p.uniq_id');
			$this->db->where('at.agent_id',$agntid);
			$query = $this->db->get();
            return $query->result_array();
		}
		public function getuseridbyagent($id){
			$this->db->select('a.ag_id as agntid');
			$this->db->from('users u');
			$this->db->join('agent a','a.contact = u.uphone');
			$this->db->where('u.id',$id);
			$query = $this->db->get();
			if($query->num_rows() > 0){
				return $query->row()->agntid;
			}else{ return null; }
		}
		public function agentsalary($id){
			$this->db->select('salary_amt');
			$this->db->from('agent');
			$this->db->where('ag_id',$id);
			$query = $this->db->get();
			if($query->num_rows() > 0){
				return $query->row()->salary_amt;
			}else{ return 0; }
		}
		public function listflats($id){
			$this->db->select('*');
			$this->db->from('flatsinfo');
			$this->db->where('uniq_id',$id);
			$query = $this->db->get();
            return $query->result_array();
		}
		public function getagent($id){
			$this->db->select('*');
			$this->db->from('agent');
			$this->db->where('ag_id',$id);
			$query = $this->db->get();
            return $query->row_array();
		}
		public function getcust($id){
			$this->db->select('*');
			$this->db->from('customer');
			$this->db->where('cust_id',$id);
			$query = $this->db->get();
            return $query->row_array();
		}
		public function listcustomer(){
			$this->db->select('cust_id,custname,father,email,mob1,mob2,custstate,custcity,custadd,acno,ifsc,bname,acname');
			$this->db->from('customer');
			$query = $this->db->get();
            return $query->result_array();
		}
		public function addnewcust($data){
			return $this->db->insert('customer', $data);
		}
		public function addnewvender($data){
			return $this->db->insert('newuser', $data);
		}
		public function addnewuser($data){
			return $this->db->insert('users', $data);
		}
		public function addnewflats($data){
			$this->db->insert('flatsinfo', $data);
			return $this->db->insert_id();
		}
		public function addament($unqid,$r,$utyp,$fid=0){
			$data = array("uniq_id" => $unqid,"ameniti" => $r,"am_type" => $utyp,"flat_id" => $fid);
			return $this->db->insert('amenities', $data);
		}
		public function states(){
			$this->db->select('id,name');
			$this->db->from('states');
			$query = $this->db->get();
            return $query->result_array();
		}
		public function citiesofstate($stateid){
			$this->db->select('id,name');
			$this->db->from('cities');
			$this->db->where('state_id',$stateid);
			$query = $this->db->get();
            return $query->result_array();
		}
		public function addnewagent($data){
			return $this->db->insert('agent', $data);
		}
		public function addnewcustomer($data){
			return $this->db->insert('customer', $data);
		}
		public function agentlist(){
			$this->db->select('ag_id,name,contact,email');
			$this->db->from('agent');
			$query = $this->db->get();
            return $query->result_array();
		}
		public function listfloor($unqid){
			$this->db->select('floor_no');
			$this->db->from('flatsinfo');
			$this->db->where('uniq_id',$unqid);
			$this->db->group_by('floor_no');
			$query = $this->db->get();
            return $query->result_array();
		}
		public function flatlist($floorid,$unqid){
			$this->db->select('id,flat_no');
			$this->db->from('flatsinfo');
			$this->db->where('floor_no',$floorid);
			$this->db->where('uniq_id',$unqid);
			$query = $this->db->get();
            return $query->result_array();
		}
		public function sitel(){
			$this->db->select('uniq_id,site_name');
			$this->db->from('propty');
			$query = $this->db->get();
            return $query->result_array();
		}
		public function assignsiteins($data){
			return $this->db->insert('assign_site', $data);
		}
		public function lastrefid(){
            $this->db->select('cust_id');
			$this->db->from('customer');
			$this->db->order_by("cust_id", "desc");
			$this->db->limit('1');
			$query = $this->db->get();
			if($query->num_rows()>0){
			return $query->row()->cust_id;
			}else{ return 0; }
        }
	}