<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farmer extends CI_Controller {
    public function index()
    {
        $this->load->view('farmer/Signup');
    }

    public function form_validation(){
        //echo 'OK';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|min_length[6]|matches[password]');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'First Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('telephone', 'Telephone', 'required');

        if($this->form_validation->run()){
            //true
            $this->load->model('main_model');
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email'),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'address' => $this->input->post('address'),
                'telephone' => $this->input->post('telephone')
            );

            $this->main_model->insert_data($data);

            redirect(base_url().'Farmer/inserted');

        }else{
            //false
            $this->index();
        }
    }

    public function inserted(){
        $this->index();
    }

    function login(){
        $this->load->view('Farmer/login');
    }

    function login2(){
        $this->load->view('Farmer/login');
    }

    function login_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if($this->form_validation->run()){
            //true

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('Farmer_model');
            if ($this->main_model->can_login($username, $password)){
                $session_data = array(
                    'username' => $username
                );
                $this->session->set_userdata($session_data);
                redirect(base_url().'Farmer/enter');
            }else {
                $this->session->set_flashdata('error', 'Invalid username or password!');
                redirect(base_url().'Farmer/login');
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
            redirect(base_url().'Farmer/login');
        }
    }

    function logout(){
        $this->session->unset_userdata('username');
        redirect(base_url().'Farmer/login');
    }
}
?>