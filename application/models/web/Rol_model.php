<?php
class Rol_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function select()
    {
        $query = $this->db->query(
                'SELECT * '
                . 'FROM rol;');
  	return $query->result_array();
    }
    public function search($i)
    {
        $query = $this->db->query('call get_Rol('.$i.')');
  	return $query->result_array();
        
    }
    public function insert($data)
    {
        $query = $this->db->query('call set_Rol('.$data.')');
        return $query;
    }
    public function update($data)
    {
        $query = $this->db->query('call set_Rol('.$data.')');
        return $query;
    }
}
