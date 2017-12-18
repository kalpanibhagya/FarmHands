<?php

class testing_m extends CI_Model
{
    public function get_Data(){
        $this->db->select('*');
        $this->db->from('farmer');
    }
}