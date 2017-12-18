<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Products_model');
    }

    function posted_farms(){
        $farmer_id = $this->session->userdata('id');
        $result['farms'] = $this->Products_model->getPostedFarms($farmer_id);
        $this->load->view('farmer/myfarms',$result);
    }

    function deleteFarm($id){

        $this->Products_model->deleteFarm($id);
        redirect('farmer/dashboard');

    }

    public function ajax_list()
    {
        $this->load->model('Products_model');
        $list = $this->Products_model->get_datatables();
        $data = array();

        $email = $this->session->userdata['email'];

        $this->load->model('Farmer_model');
        $data1 = $this->Farmer_model->get_data($email);

        $id = $data1['id'];


        echo $data1['id'];
        $no = $_POST['start'];
        foreach ($list as $product) {
            if ($id == $product->farmer_id)
            {
                $no++;
                $row = array();
                //$row[] = $academic->id;
                $row[] = $product->farm_name;
                $row[] = $product->quantity;
                $row[] = $product->price;

                //add html for action
                $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_product('."'".$product->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
            <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Delete" onclick="delete_product('."'".$product->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
            <a class="btn btn-sm btn-default" href="javascript:void(0)" title="View" onclick="view_product('."'".$product->id."'".')"><i class="glyphicon glyphicon-file"></i> View</a>';

                $data[] = $row;
            }

        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Academic->count_all(),
            "recordsFiltered" => $this->Academic->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_list_view()
    {
        $farms = $this->Products_model->get_datatables();
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
            "recordsTotal" => $this->Products_model->count_all(),
            "recordsFiltered" => $this->Products_model->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_list_view_all()
    {
        $farms = $this->Products_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($farms as $farm) {
            $no++;
            $row = array();
            $row[] = $farm->farm_name;
            $row[] = $farm->location;
            $row[] = $farm->description;
            $row[] = $farm->farmer_id;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-default" href="javascript:void(0)" title="View" onclick="view_person('."'".$farm->id."'".')"><i class="glyphicon glyphicon-file"></i> View</a>';

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Products_model->count_all(),
            "recordsFiltered" => $this->Products_model->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit($id)
    {
        $data = $this->Products_model->get_by_id($id);
        echo json_encode($data);
    }

    public function ajax_add()
    {
        $data = array(
            'farm_name' => $this->input->post('produt_name'),
            'location' => $this->input->post('quantity'),
            'description' => $this->input->post('price'),
            'farmer_id' => $this->input->post('farmer_id'),
        );
        $insert = $this->Products_model->save($data);
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
        $this->Products_model->update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($id)
    {
        $this->Products_model->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function list_by_id($id){

        $data['output'] = $this->Products_model->get_by_id_view($id);
        $this->load->view('admin/view_farms', $data);
    }
}