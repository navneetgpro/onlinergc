<?php
	class Teacher_model extends CI_Model{

		public function __construct(){
			$this->load->database();
        }
        public function teachersarr(){
            $this->db->select('*');
            $this->db->from('teachers');
            $this->db->order_by('id','desc');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function addnew_teacher($data){
            return $this->db->insert('teachers',$data);
        }
    }