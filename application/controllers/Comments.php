<?php
class Comments extends CI_Controller
{
	public function create($post_id){
		$slug=$this->input->post('slug');
		$data['post']=$this->post_model->get_posts($slug);
		$this->form_validation->set_rules('Name','name','required');
		$this->form_validation->set_rules('Email','email','valid_email');
		$this->form_validation->set_rules('Email','email','required');
		$this->form_validation->set_rules('Message','message','required');
		if ($this->form_validation->run()===FALSE) {
			$this->load->view('blog/include/bloghead',$data);
			$this->load->view('blog/posts/view',$data);
		} else {
			$this->comment_model->create_comment($post_id);
			redirect('/Blog/'.$slug);
		}
		

	}

}