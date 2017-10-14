<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    public function index(){
        //echo 'test index function ';
        //$this->test1();
        //$this->load->model('Main_model');
        $data['title'] = 'Controllers text';
        //$data['test1'] = 'other controller text';
        //$data['model_data'] = $this->Main_model->test_main();

        $this->load->view('Main_view');
    }

    public function form_validation(){
        //echo 'OK';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|min_length[6]|matches[password]');

        if($this->form_validation->run()){
            //true
            $this->load->model('main_model');
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );

            $this->main_model->insert_data($data);

            redirect(base_url().'main/inserted');

        }else{
            //false
            $this->index();
        }
    }

    public function inserted(){
        $this->index();
    }

    function login(){
        $this->load->view('welcome_message');
    }

    function login2(){
        $this->load->view('login');
    }

    function login_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if($this->form_validation->run()){
            //true

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('main_model');
            if ($this->main_model->can_login($username, $password)){
                $session_data = array(
                  'username' => $username
                );
                $this->session->set_userdata($session_data);
                redirect(base_url().'main/enter');
            }else {
                $this->session->set_flashdata('error', 'Invalid username or password!');
                redirect(base_url().'main/login');
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
            redirect(base_url().'main/login');
        }
    }

    function logout(){
        $this->session->unset_userdata('username');
        redirect(base_url().'main/login');
    }
}