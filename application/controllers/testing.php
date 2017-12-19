<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class testing extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('Farmer_model');
    }

    public function index(){
        $data['farmers'] = $this->Farmer_model->farmers_pdf();
        $this->load->view('makepdf',$data);

    }

}