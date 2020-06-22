<?php
	class Blog_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}
		public function addnew_blog($data){
            #print_r($data);
            #exit();
            return $this->db->insert('blogs',$data);
        }
        public function listblogs($limit=false,$offset=false){
            $this->db->select('*');
            $this->db->from('blogs');
            if($limit){ $this->db->limit($limit,$offset); }
            $this->db->order_by('id','desc');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function countblogs(){
            $this->db->from('blogs');
            return $this->db->count_all_results();
       }
    }