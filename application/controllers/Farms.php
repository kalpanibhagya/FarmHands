<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farms extends CI_Controller {

    public function index(){
        $this->load->library('googlemaps');
        $this->googlemaps->initialize();
        $data['map'] = $this->googlemaps->create_map();
        $this->load->view('farms',$data);

    }
}