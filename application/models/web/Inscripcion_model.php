<?php
class Inscripcion_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function select()
    {
        $query = $this->db->query('call get_Inscripcion("0")');
  	return $query->result_array();
    }
    public function search($i)
    {
        $query = $this->db->query('call get_Inscripcion('.$i.')');
  	return $query->result_array();
        
    }
    public function insert($data)
    {
        $query = $this->db->query('call set_Inscripcion('.$data.')');
        return $query;
    }
    public function update($data)
    {
        $query = $this->db->query('call set_Inscripcion('.$data.')');
        return $query;
    }
}
