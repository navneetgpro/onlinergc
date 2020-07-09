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
        public function courseview($id){
            $this->db->select('ct.title as category_name,s.title as subcategory_name,c.*');
            $this->db->from('course_details as c');
            $this->db->join('course_subcat as s','s.id=c.subcat_id');
            $this->db->join('course_cat as ct','s.cat_id=ct.id');
            $this->db->where('c.id',$id);
            $this->db->where('c.is_active',1);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function listcourse($limit=false,$offset=false){
            $this->db->select('c.*');
            $this->db->from('course_details as c');
            $this->db->where('c.is_active',1);
            if($limit){ $this->db->limit($limit,$offset); }
            $this->db->order_by('c.id','desc');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function countcourse(){
            $this->db->from('course_details');
            return $this->db->count_all_results();
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