<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farmer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Farmer_model');
    }

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
            $password = base64_encode(strrev(md5($this->input->post('password'))));

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
            $email = $this->session->userdata('email');
            $this->load->model('Farmer_model');
            $data = $this->Farmer_model->get_data($email);
            $this->load->view('farmer/dashboard',$data);
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
        $email = $this->session->userdata('email');
        $this->load->model('Farmer_model');
        $data = $this->Farmer_model->get_data($email);
        $this->load->view('farmer/profile', $data);

    }

    function volunteers(){
        $this->load->view('farmer/volunteers');
    }

    function contacts(){
        $this->load->view('farmer/contacts');
    }


    public function ajax_edit_profile()
    {
        $email = $this->session->userdata('email');
        $data = $this->Farmer_model->get_by_email($email);
        echo json_encode($data);
    }

    public function ajax_list()
    {
        $list = $this->Farmer_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $person) {
            $no++;
            $row = array();
            $row[] = $person->username;
            $row[] = $person->email;
            $row[] = $person->fname;
            $row[] = $person->lname;
            $row[] = $person->address;
            $row[] = $person->telephone;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="delete_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
            <a class="btn btn-sm btn-default" href="javascript:void(0)" title="View" onclick="view_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-file"></i> View</a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Farmer_model->count_all(),
            "recordsFiltered" => $this->Farmer_model->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit($id)
    {
        $data = $this->Farmer_model->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_add()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => base64_encode(strrev(md5($this->input->post('password')))),
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'address' => $this->input->post('address'),
            'telephone' => $this->input->post('telephone'),
        );
        $insert = $this->Farmer_model->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => base64_encode(strrev(md5($this->input->post('password')))),
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'address' => $this->input->post('address'),
            'telephone' => $this->input->post('telephone'),
        );
        $this->Farmer_model->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id)
    {
        $this->Farmer_model->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function list_by_id($id){

        $data['output'] = $this->Farmer_model->get_by_id_view($id);
        $this->load->view('admin/view_farmers', $data);
    }

}
?>