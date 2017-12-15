<?php

class Farmer_model extends CI_Model{

    public function insert_data($data){
        $this->db->insert('farmer', $data);
    }

    function can_login($email, $password){
        $this->db->select('*');
        $this->db->from('farmer');
        $this->db->where('email', $email);
        $this->db->where('password', $password);

        if ($query = $this->db->get()){
            return $query->row_array();
        }else {
            return false;
        }
    }
}

?>