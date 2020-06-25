<?php
	class Blog_model extends CI_Model{

		public function __construct(){
			$this->load->database();
        }
        public function categories(){
            $this->db->select('*');
            $this->db->from('blog_cat');
            $this->db->order_by('id','desc');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function subcategories(){
            $this->db->select('s.id,c.category_name,s.subcat_name');
            $this->db->from('blog_subcat as s');
            $this->db->join('blog_cat as c','s.cat_id=c.id');
            $this->db->order_by('id','desc');
            $query = $this->db->get();
            return $query->result_array();
        }
		public function addnew_blog($data){
            #print_r($data);
            #exit();
            return $this->db->insert('blogs',$data);
        }
		public function addnewcat($data){
            return $this->db->insert('blog_cat',$data);
        }
		public function addnewsubcat($data){
            return $this->db->insert('blog_subcat',$data);
        }
        public function listblogs($limit=false,$offset=false){
            $this->db->select('b.*,s.subcat_name');
            $this->db->from('blogs as b');
            $this->db->from('blog_subcat as s','s.id=b.subcat_id');
            if($limit){ $this->db->limit($limit,$offset); }
            $this->db->order_by('id','desc');
            $query = $this->db->get();
            return $query->result_array();
        }
        public function countblogs(){
            $this->db->from('blogs');
            return $this->db->count_all_results();
       }

      /*  public function getblogcat(){
            $this->db->select('*');
            $this->db->from('blog_cat');
        }
        public function countblogcat(){
            $this->getblogcat();
            return $this->db->count_all_results();
        } */
    }