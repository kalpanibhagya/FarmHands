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
            $this->load->model('Farmer_model');
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email'),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'address' => $this->input->post('address'),
                'telephone' => $this->input->post('telephone')
            );

            $this->Farmer_model->insert_data($data);

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
        $this->load->view('farmer/login');
    }

    function login_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'E-mail', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if($this->form_validation->run()){
            //true

            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $this->load->model('Farmer_model');
            if ($this->Farmer_model->can_login($email, $password)){
                $session_data = array(
                    'email' => $email
                );
                $this->session->set_userdata($session_data);
                redirect(base_url().'Farmer/enter');
            }else {
                $this->session->set_flashdata('error', 'Invalid e-mail or password!');
                redirect(base_url().'Farmer/login');
            }

        }else{
            //false
            $this->login();
        }
    }

    function enter(){
        if ($this->session->userdata('email') != ''){
            $this->load->view('farmer/dashboard');
        } else {
            redirect(base_url().'Farmer/login');
        }
    }

    function logout(){
        $this->session->unset_userdata('email');
        redirect(base_url().'Farmer/login');
    }

    function post_an_event(){
        $this->load->view('farmer/postEvent');
    }

    function profile(){
        $this->load->view('farmer/profile');

    }

}
?>