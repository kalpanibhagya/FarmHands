<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf_Generator extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('Farmer_model');
        $this->load->model('Volunteer_model');
        $this->load->model('Farm_model');
    }

    public function index(){
        $data['farmers'] = $this->Farmer_model->farmers_pdf();
        $this->load->view('makepdf',$data);

    }

    public function farmers(){
        $data['farmers'] = $this->Farmer_model->farmers_pdf();
        $this->load->view('makepdf',$data);

    }

    public function volunteers(){
        $data['volunteers'] = $this->Volunteer_model->volunteers_pdf();
        $this->load->view('makepdf_volunteer',$data);

    }

    public function farms(){
        $data['farms'] = $this->Farm_model->farms_pdf();
        $this->load->view('makepdf_farms',$data);

    }

}