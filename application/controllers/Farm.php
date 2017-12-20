<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
  class Farm extends CI_Controller
   {  
      public function index()  
      {    
         //load the method of model
          $this->load->model('Model');
         $data['h']=$this->Model->User();  
         //return the data in view  
         $this->load->view('farm/farms', $data);

      }





    function register()
    {
        // Set validation rules
        $this->form_validation->set_rules('owner_id', 'Owner Id', 'trim|required|max_length[10]');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[1]|max_length[15]');
        $this->form_validation->set_rules('location', 'Location', 'trim|required|min_length[1]|max_length[15]');

        $data = array(
            'owner_id' => $this->input->post('owner_id'),
            'name' => $this->input->post('name'),
            'location' => $this->input->post('location')
        );

        // Validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('person_create_msg', '<div class="alert alert-danger text-center">'
                . validation_errors('<p class="error">') . '</div>');

            $this->load->view('farm/create', $data);
        } else {
            // Insert form data into database
            if ($this->Model->insert_farm($data)) {
                // Successful
                $this->session->set_flashdata('person_create_msg', '<div class="alert alert-success text-center">Farm added successfully!</div>');
                $this->load->view('farm/create');
            }else{
                // Error
                $this->session->set_flashdata('person_create_msg', '<div class="alert alert-danger text-center">Ops! Something bad happened. Please try again</div>');
                $this->load->view('farm/create', $data);
            }
        }
    }



    public function search_farm()
    {
        // Set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[15]');

        $data = array(
            'name' => $this->input->post('name')
        );

        // Validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('person_create_msg', '<div class="alert alert-danger text-center">'
                . validation_errors('<p class="error">') . '</div>');

            $this->load->view('farm/retrieve', $data);
        } else {
            // Insert form data into database
            $ret = $this->Model->get_farm($data);
            if ($ret != null) {
                $data = array(
                    'owner_id' => $ret[0]['owner_id'],
                    'name' => $ret[0]['name'],
                    'location' => $ret[0]['location']
                );

                $this->session->set_flashdata(null);

                $this->load->view('farm/retrieve', $data);
            }else{
                // Error
                $this->session->set_flashdata('person_create_msg', '<div class="alert alert-danger text-center">Incorrect Name</div>');

                $this->load->view('farm/retrieve', $data);

            }
        }
    }




    public function update_farm(){
        // Set validation rules
        $this->form_validation->set_rules('owner_id', 'Owner ID', 'trim|required|max_length[8]');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[1]|max_length[15]');
        $this->form_validation->set_rules('location', 'Location', 'trim|required|min_length[1]|max_length[15]');

        $data = array(
            'owner_id' => $this->input->post('owner_id'),
            'name' => $this->input->post('name'),
            'location' => $this->input->post('location')
        );

        // Validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('person_create_msg', '<div class="alert alert-danger text-center">'
                . validation_errors('<p class="error">') . '</div>');

            $this->load->view('farm/update', $data);
        } else {
            // Insert form data into database
            if ($this->Model->set_farm($data)) {
                // Successful
                $this->session->set_flashdata('person_create_msg', '<div class="alert alert-success text-center">Farm updated successfully!</div>');
                $this->load->view('farm/update');
            }else{
                // Error
                $this->session->set_flashdata('person_create_msg', '<div class="alert alert-danger text-center">Ops! Something bad happened. Please try again</div>');
                $this->load->view('farm/update', $data);
            }
        }
    }



    public function get_farm()
    {
        // Set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[15]');

        $data = array(
            'name' => $this->input->post('name')
        );

        // Validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('person_create_msg', '<div class="alert alert-danger text-center">'
                . validation_errors('<p class="error">') . '</div>');

            $this->load->view('farm/update', $data);
        } else {
            // Insert form data into database
            $ret = $this->Model->get_farm($data);
            if ($ret != null) {
                $data = array(
                    'owner_id' => $ret[0]['owner_id'],
                    'name' => $ret[0]['name'],
                    'location' => $ret[0]['location']
                );

                $this->session->set_flashdata(null);

                $this->load->view('farm/update', $data);
            }else{
                // Error
                $this->session->set_flashdata('person_create_msg', '<div class="alert alert-danger text-center">Incorrect name</div>');

                $this->load->view('farm/update', $data);
            }
        }
      }

     

   public function remove()
    {
        // Set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[15]');

        $data = array(
            'name' => $this->input->post('name')
        );

        // Validate form input
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('person_create_msg', '<div class="alert alert-danger text-center">'
                . validation_errors('<p class="error">') . '</div>');

            $this->load->view('farm/delete', $data);
        } else {
            // Insert form data into database
            $ret = $this->Model->delete_farm($data);
            if ($ret != null) {
                $this->session->set_flashdata('person_create_msg', '<div class="alert alert-success text-center">Farm deleted successfully!</div>');

                $this->load->view('farm/delete');
            }else{
                // Error
                $this->session->set_flashdata('person_create_msg', '<div class="alert alert-danger text-center">Incorrect name</div>');

                $this->load->view('farm/delete', $data);

            }
        }
    }
}  
   ?>