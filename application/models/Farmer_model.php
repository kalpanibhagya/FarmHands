<?php

class Farmer_model extends CI_Model{

    public function insert_data($data){
        $this->db->insert('farmer', $data);
    }

    function can_login($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('farmer');

        if ($query -> num_rows() > 0){
            return true;
        }else {
            return false;
        }
    }
}

?>