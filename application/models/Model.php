<?php

class Model extends CI_Model
{

    public function User()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('farm');
         return $query;  
      } 
    function insert_farm($data)
    {
        return $this->db->insert('farm', $data);
    }

    function get_farm($data)
    {
        $this->db->where('name', $data['name']);
        return $this->db->get('farm')->result_array();
    }

    function delete_farm($data)
    {
        $this->db->where('name', $data['name']);
        $this->db->delete('farm');
        return $this->db->affected_rows();
    }

    function set_farm($data)
    {
        $this->db->set('name', $data['name']);
        $this->db->set('location', $data['location']);
        $this->db->set('owner_id', $data['owner_id']);
        $this->db->where('name', $data['name']);
        $this->db->update('farm');
        return $this->db->affected_rows();
    }
}