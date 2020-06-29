<?php
	class Course_model extends CI_Model{

		public function __construct(){
			$this->load->database();
        }
        public function addnew_video($data){
            return $this->db->insert('course_videos',$data);
        }
        public function addnew_course($data){
            return $this->db->insert('course_details',$data);
        }
        public function courses(){
            $this->db->select('*');
            $this->db->from('course_details');
            $this->db->order_by('id','desc');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function categories(){
            $this->db->select('*');
            $this->db->from('course_cat');
            $this->db->order_by('id','desc');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function subcategories(){
            $this->db->select('s.id,c.title as category,s.title as subcategory');
            $this->db->from('course_subcat as s');
            $this->db->join('course_cat as c','s.cat_id=c.id');
            $this->db->order_by('id','desc');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function addnewcat($data){
            return $this->db->insert('course_cat',$data);
        }
        public function addnewsubcat($data){
            return $this->db->insert('course_subcat',$data);
        }
    }