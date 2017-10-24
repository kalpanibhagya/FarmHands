<?php

class Main_model extends CI_Model{

    public function insert_data($data){
        $this->db->insert('volunteer', $data);
    }

    function can_login($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('volunteer');

        if ($query -> num_rows() > 0){
            return true;
        }else {
            return false;
        }
    }
}

?>