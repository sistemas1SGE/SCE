<?php
class Actividad_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function select()
    {
        $query = $this->db->query(
                'SELECT * '
                . 'FROM actividades;');
  	return $query->result_array();
    }
    public function search($i)
    {
        $query = $this->db->query(
                'SELECT * '
                . 'FROM actividades '
                . 'WHERE actividades_id='.$i.';');
  	return $query->result_array();
        
    }
    public function insert($data)
    {
        $query = $this->db->query('call set_Actividad('.$data.')');
        return $query;
    }
    public function update($data)
    {
        $query = $this->db->query('call set_Actividad('.$data.')');
        return $query;
    }
}