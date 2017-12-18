<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
    {
        $this->load->view('Home');
    }

    public function view_products(){
        $this->load->view('products');
    }
}
