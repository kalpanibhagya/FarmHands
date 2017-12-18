<?php
/**
* Cate
*/
class Categories extends CI_Controller
{
	public function index(){

	}
	
	public function create(){
		$data['title']='Create Category';
		//$this->load->view('blog/include/bloghead');
		//$data['content']=ucfirst($page);
		$this->load->view('blog/include/bloghead');
			//$this->load->view('blog/categories/create',$data);
			//$this->load->view('blog/categories/create',$data);
			$this->load->view('blog/categories/create',$data);
		     
		
		$this->form_validation->set_rules('Name','Category Name','required');
		if($this->form_validation->run()===FALSE){
			//$this->load->view('blog/include/bloghead',$data);
			
			//$this->load->view('blog/categories/create',$data);
			//$this->load->view('blog/include/blogfoot');

			
		}else{
			//$this->load->view('include/bloghead',$data);
			$this->Category_model->create_category();
			redirect('FarmHands/Blog');

			
		}
	}
}