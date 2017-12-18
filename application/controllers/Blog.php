<?php

class Blog extends  CI_Controller{

	
	
	public function index($page='home'){
		$data['content']=ucfirst($page);

		
			# code...
			$this->load->view('blog/include/bloghead');
			$this->load->view('blog/home',$data);
			//$this->load->view('include/blogfoot');
		
		
		
	}
	public function single($page='single'){
		$data['content']=ucfirst($page);

		
			# code...
			$this->load->view('blog/include/bloghead');
			$this->load->view('blog/single',$data);
			//$this->load->view('include/blogfoot');
		
		
		
	}

	public function about($page='about'){
		$data['content']=ucfirst($page);

		
			# code...
			$this->load->view('blog/include/bloghead');
			$this->load->view('blog/about',$data);
			//$this->load->view('include/blogfoot');
		
		
		
	}
}