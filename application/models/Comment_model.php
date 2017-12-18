<?php
/**
* Ca
*/
class Comment_model extends CI_Model
{
	public function __construct(){
		$this->load->database();
	}

	public function create_comment($post_id){
		$data=array(
			'post_id'=>$post_id,
			'name'=>$this->input->post('Name'),
			'email'=>$this->input->post('Email'),
			'body'=>$this->input->post('Message'),
			
		);
		return $this->db->insert('comments',$data);
	}

	public function get_comments($post_id){
		$query=$this->db->get_where('comments',array('post_id'=>$post_id));
		return $query->result_array();

	}
	
	 
}