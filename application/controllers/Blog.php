<?php

class Blog extends  CI_Controller{

	
	
	public function index($page='home'){
		$data['content']=ucfirst($page);
		$this->load->view('blog/include/bloghead');
		$this->load->view('blog/home',$data);
	}
	public function single($page='single'){
		$data['content']=ucfirst($page);
		$this->load->view('blog/include/bloghead');
		$this->load->view('blog/post1',$data);
	}

	public function post1($page='post1'){
		$data['content']=ucfirst($page);
		$this->load->view('blog/include/bloghead');
		$this->load->view('blog/post1',$data);
	}
	public function post2($page='post2'){
		$data['content']=ucfirst($page);
		$this->load->view('blog/include/bloghead');
		$this->load->view('blog/post2',$data);
	}
	public function post3($page='post3'){
		$data['content']=ucfirst($page);
		$this->load->view('blog/include/bloghead');
		$this->load->view('blog/post3',$data);
	}
	public function post4($page='post4'){
		$data['content']=ucfirst($page);
		$this->load->view('blog/include/bloghead');
		$this->load->view('blog/post4',$data);
	}
	public function about($page='about'){
		$data['content']=ucfirst($page);
		$this->load->view('blog/include/bloghead');
		$this->load->view('blog/about',$data);
	}

}