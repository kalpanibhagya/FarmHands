<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farms extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Farm_model');
    }
/*
    public function index()
    {
        $this->load->library('googlemaps');
        $this->googlemaps->initialize();
        $data['map'] = $this->googlemaps->create_map();
        $this->load->view('farms',$data);
    }
*/
    function posted_farms(){
        $farmer_id = $this->session->userdata('id');
        $result['farms'] = $this->Farm_model->getPostedFarms($farmer_id);
        $this->load->view('farmer/myfarms',$result);
    }

    function deleteFarm($id){

        $this->Farm_model->deleteFarm($id);
        redirect('farmer/dashboard');

    }

    public function ajax_list()
    {
        $farms = $this->Farm_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($farms as $farm) {
            $no++;
            $row = array();
            $row[] = $farm->farm_name;
            $row[] = $farm->location;
            $row[] = $farm->description;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$farm->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="delete_person('."'".$farm->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
            <a class="btn btn-sm btn-default" href="javascript:void(0)" title="View" onclick="view_person('."'".$farm->id."'".')"><i class="glyphicon glyphicon-file"></i> View</a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Farm_model->count_all(),
            "recordsFiltered" => $this->Farm_model->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_list_view()
    {
        $farms = $this->Farm_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($farms as $farm) {
            $no++;
            $row = array();
            $row[] = $farm->farm_name;
            $row[] = $farm->location;
            $row[] = $farm->description;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-default" href="javascript:void(0)" title="View" onclick="view_person('."'".$farm->id."'".')"><i class="glyphicon glyphicon-file"></i> View</a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Farm_model->count_all(),
            "recordsFiltered" => $this->Farm_model->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit($id)
    {
        $data = $this->Farm_model->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_add()
    {
        $data = array(
            'farm_name' => $this->input->post('farm_name'),
            'location' => $this->input->post('location'),
            'description' => $this->input->post('description'),
            'farmer_id' => $this->input->post('farmer_id'),
        );
        $insert = $this->Farm_model->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update()
    {
        $data = array(
            'farm_name' => $this->input->post('farm_name'),
            'location' => $this->input->post('location'),
            'description' => $this->input->post('description'),
            'farmer_id' => $this->input->post('farmer_id'),

        );
        $this->Farm_model->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id)
    {
        $this->Farm_model->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function list_by_id($id){

        $data['output'] = $this->Farm_model->get_by_id_view($id);
        $this->load->view('admin/view_farms', $data);
    }
}