<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/login');
    }

    function login_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'E-mail', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if($this->form_validation->run()){
            //true

            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $this->load->model('Admin_model');
            if ($this->Admin_model->can_login($email, $password)){
                $session_data = array(
                    'email' => $email
                );
                $this->session->set_userdata($session_data);
                redirect(base_url().'Admin/enter');
            }else {
                $this->session->set_flashdata('error', 'Invalid email or password!');
                redirect(base_url().'Admin');
            }

        }else{
            //false
            $this->index();
        }
    }

    function enter(){
        if ($this->session->userdata('email') != ''){
            $this->load->view('admin/dashboard');
        } else {
            redirect(base_url().'Admin');
        }
    }

    function logout(){
        $this->session->unset_userdata('email');
        redirect(base_url().'Admin');
    }

    function addAdmin(){
        $this->load->view('administrator/addAdmin');
    }

    public function ajax_list()
    {
        $list = $this->person->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $person) {
            $no++;
            $row = array();
            $row[] = $person->username;
            $row[] = $person->email;
            $row[] = $person->password;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$person->admin_id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="delete_person('."'".$person->admin_id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
            <a class="btn btn-sm btn-default" href="javascript:void(0)" title="View" onclick="view_person('."'".$person->admin_id."'".')"><i class="glyphicon glyphicon-file"></i> View</a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->person->count_all(),
            "recordsFiltered" => $this->person->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit($admin_id)
    {
        $data = $this->person->get_by_id($admin_id);
        echo json_encode($data);
    }

    public function ajax_add()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => base64_encode(strrev(md5($this->input->post('password')))),
        );
        $insert = $this->person->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => base64_encode(strrev(md5($this->input->post('password')))),
        );
        $this->person->update(array('admin_id' => $this->input->post('admin_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($admin_id)
    {
        $this->person->delete_by_id($admin_id);
        echo json_encode(array("status" => TRUE));
    }

    public function list_by_id($admin_id){

        $data['output'] = $this->person->get_by_id_view($admin_id);
        $this->load->view('Pages/Admin/view_addAdmin', $data);
    }
}
?>