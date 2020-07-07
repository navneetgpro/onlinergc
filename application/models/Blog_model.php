<?php
	class Blog_model extends CI_Model{

		public function __construct(){
			$this->load->database();
        }
        public function addcomment($data){
            $this->updatecnum($data['blog_id']);
            return $this->db->insert('blog_comments',$data);
        }
        private function updatecnum($id){
            $this->db->set('comments','comments+1',FALSE);
            $this->db->where('id',$id);
            return $this->db->update('blogs');
        }
        public function blogcomment($id){
            $this->db->select('*');
            $this->db->from('blog_comments');
            $this->db->order_by('id','desc');
            $this->db->where('blog_id',$id);
            $this->db->where('is_active',1);
            $query = $this->db->get();
            return $query->result_array();
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
        public function blog_by($id){
            $this->db->select('full_name');
            $this->db->from('teachers');
            $this->db->where('id',$id);
            $query = $this->db->get();
            if($query->num_rows() > 0){
				return $query->row()->full_name;
			}else{ return 'Admin'; }
        }
        public function blogdetail($id){
            $this->db->select('b.*,s.subcat_name,c.category_name');
            $this->db->from('blogs as b');
            $this->db->join('blog_subcat as s','s.id=b.subcat_id');
            $this->db->join('blog_cat as c','c.id=s.cat_id');
            $this->db->where('b.id',$id);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function listblogs($limit=false,$offset=false){
            $this->db->select('b.*,s.subcat_name,c.category_name');
            $this->db->from('blogs as b');
            $this->db->join('blog_subcat as s','s.id=b.subcat_id');
            $this->db->join('blog_cat as c','c.id=s.cat_id');
            if($limit){ $this->db->limit($limit,$offset); }
            $this->db->order_by('b.id','desc');
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