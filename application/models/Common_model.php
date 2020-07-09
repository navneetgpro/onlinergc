<?php
	class Common_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}
		public function countu($id){
			$this->db->select('id');
			$this->db->from('newuser');
			$this->db->where('add_by',$id);
			$query = $this->db->get();
			return $query->num_rows();
		}
		public function citynamebyid($id){
			return $this->db->select('name')->from('cities')->where('id',$id)->get()->row()->name;
		}
		public function statenamebyid($id){
			return $this->db->select('name')->from('states')->where('id',$id)->get()->row()->name;
		}

		public function usernamebyid($id){
			$this->db->select('uname');
			$this->db->from('users');
			$this->db->where('id',$id);
			$query = $this->db->get();
			if($query->num_rows() > 0){
				return $query->row()->uname;
			}else{ return null; }
		}
		public function sitenamebyuqid($id){
			$this->db->select('site_name');
			$this->db->from('propty');
			$this->db->where('uniq_id',$id);
			$query = $this->db->get();
			if($query->num_rows() > 0){
				return $query->row()->site_name;
			}else{ return null; }
		}
		public function agentnamebyid($id){
			$this->db->select('name');
			$this->db->from('agent');
			$this->db->where('ag_id',$id);
			$query = $this->db->get();
			if($query->num_rows() > 0){
				return $query->row()->name;
			}else{ return null; }
		}
		public function flatpricearray($id){
			$this->db->select('id,(flat_total * flat_price_persqr) as flatprice');
			$this->db->from('flatsinfo');
			$this->db->where('uniq_id',$id);
			$query = $this->db->get();
            return $query->result_array();
		}
		public function getament($unid,$flat=NULL){
			$this->db->select('ameniti');
			$this->db->from('amenities');
			$this->db->where('uniq_id',$unid);
			if($flat){
				$this->db->where('flat_id',$flat);
				$this->db->where('am_type',"flat");
			}else{
				$this->db->where('am_type',"prop");
			}
			$query = $this->db->get();
			if($query->num_rows() > 0){
				return $query->row()->ameniti;
			}else{ return null; }
		}
		function resizeimg($fpath,$qlty,$filename,$thumb=FALSE){
			$fpath = $fpath."/";
			$config = array(
				'image_library' => 'gd2',
				'source_image' => $fpath.$filename,
				'maintain_ratio' => TRUE,
				'quality' => $qlty."%",
				'width' => 640,
				'height' => 480
			);
			if($thumb){
				$config['new_image'] = $fpath."thumb/".$filename;
				$config['create_thumb'] = TRUE;
				$config['thumb_marker'] = '';
			}else{
				$config['new_image'] = $fpath.$filename;
				$config['create_thumb'] = FALSE;
			}
			$this->load->library('image_lib', $config);
			$this->image_lib->initialize($config);
			if (! $this->image_lib->resize()) {
				return $this->image_lib->display_errors();
			}
			$this->image_lib->clear();
		}
    }
    ?>