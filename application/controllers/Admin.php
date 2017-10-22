<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index()
    {
        $this->load->view('admin/login');
    }

    function login_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if($this->form_validation->run()){
            //true

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('Admin_model');
            if ($this->Admin_model->can_login($username, $password)){
                $session_data = array(
                    'username' => $username
                );
                $this->session->set_userdata($session_data);
                redirect(base_url().'Admin/enter');
            }else {
                $this->session->set_flashdata('error', 'Invalid username or password!');
                redirect(base_url().'Admin/login');
            }

        }else{
            //false
            $this->login();
        }
    }

    function enter(){
        if ($this->session->userdata('username') != ''){
            $this->load->view('dashboard');
            //echo '<label><a href = "'.base_url().'main/logout">Logout</a></label>';
        } else {
            redirect(base_url().'Admin/login');
        }
    }

    function logout(){
        $this->session->unset_userdata('username');
        redirect(base_url().'Admin/login');
    }
}
?>