<?php
	class App_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    function datatableapi_query($postData,$fdata){
		$i = 0;
		if(isset($postData['search']['value'])){
		foreach($fdata['column_search'] as $item){
			if($postData['search']['value']){
				if($i===0){
					$this->db->group_start();
					$this->db->like($item, $postData['search']['value']);
				}else{
					$this->db->or_like($item, $postData['search']['value']);
				}
				if(count($fdata['column_search']) - 1 == $i){
					$this->db->group_end();
				}
			}
			$i++;
		} }
		
		if(isset($postData['order'])){
			$this->db->order_by($fdata['column_order'][$postData['order']['0']['column']], $postData['order']['0']['dir']);
		}else if(isset($fdata['order'])){
			$order = $fdata['order'];
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}
	public function datatableapi($postData,$fdata){
		$this->datatableapi_query($postData,$fdata);
		$numrows = $this->db->count_all_results('', false);
		$length = empty($postData['length']) ? 10 : $postData['length'];
		$start = empty($postData['start']) ? 0 : $postData['start'];
		if($length != -1){
			$this->db->limit($length, $start);
		}
		$query = $this->db->get();
		$data = $query->result();
		return array("data"=>$data,"numrows"=>$numrows);
	}
	function resizeimg($fpath,$filename,$qlty="90",$iwidth="120",$iheight="90",$thumb=FALSE){
		$config = array(
			'image_library' => 'gd2',
			'source_image' => $fpath.$filename,
			'maintain_ratio' => TRUE,
			'quality' => $qlty."%",
			'width' => $iwidth,
			'height' => $iheight
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