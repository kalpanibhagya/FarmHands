<?php

class Posts extends  CI_Controller{

	
	
	public function index(){
		$data['title']='latest posts';
		$data['posts']=$this->post_model->get_posts();
		
		
		$this->load->view('blog/include/bloghead');
		
		$this->load->view('blog/posts/index',$data);
		//$this->load->view('blog/include/blogfoot');
	}

	public function view($slug=NULL){
		$data['post']=$this->post_model->get_posts($slug);
		$post_id=$data['post']['id'];
		$data['comments']=$this->comment_model->get_comments($post_id);
		if (empty($data['post'])) {
			# code...
			show_404();
		}

		$data['title']=$data['post']['title'];

		$this->load->view('blog/include/bloghead');
		
		$this->load->view('blog/posts/view',$data);
		//$this->load->view('blog/include/blogfoot');
	}

	public function create(){
		$data['title']='Create post';
		$data['categories']=$this->post_model->get_categories();


		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('body','Body','required');

		if ($this->form_validation->run()===FALSE) {
				$this->load->view('blog/include/bloghead',$data);
				$this->load->view('blog/posts/create',$data);
				//$this->load->view('include/blogfoot');
			
		}else{
			//upload image]

			$config['upload_path']='./assets/images/posts';
			$config['allowed_types']='gif|jpg|png';
			$config['max_size']='2048';
			//$config['max_width']='500';
			//$config['max_height']='300';
			$this->load->library('upload',$config);

			if(!$this->upload->do_upload()){
				$errors=array('error'=>$this->upload->display_errors());
				$post_image='noimage.jpg';

			}else{
				$data=array('upload_data'=>$this->upload->data());
				$post_image=$_FILES['userfile']['name'];

			}
			$this->post_model->create_post($post_image);
			redirect('/Blog/recent');
		}

		
	}

	public function delete($id){

		$this->post_model->delete_post($id);
		redirect('/Blog/recent');
	}

    public function edit($slug){
    	$data['post']=$this->post_model->get_posts($slug);
    	$data['categories']=$this->post_model->get_categories();


		if (empty($data['post'])) {
			# code...
			show_404();
		}

		$data['title']='Edit Post';

		$this->load->view('blog/include/bloghead');
		$this->load->view('blog/posts/edit',$data);
		//$this->load->view('blog/include/blogfoot');

    }

    public function update(){
    	$this->post_model->update_post();
    	redirect('/Blog/recent');
    }
}