<?php
/**
* Ca
*/
class Category_model extends CI_Model
{
	public function __construct(){
		$this->load->database();
	}

	 public function create_category(){
	 	$data=array('name'=>$this->input->post('Name'));
	 
	 	return $this->db->insert('categories',$data); 
	 }
	 
}