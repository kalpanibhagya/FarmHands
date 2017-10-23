<?php

class volunteerHouse_model extends CI_Model{

    public function insert_data($data){
        $this->db->insert('volunteer_house', $data);
    }

    function can_login($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('volunteer_house');

        if ($query -> num_rows() > 0){
            return true;
        }else {
            return false;
        }
    }
}

?>