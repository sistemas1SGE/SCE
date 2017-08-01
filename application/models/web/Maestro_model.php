<?php
class Maestro_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function select()
    {
        $query = $this->db->query(
                'SELECT maestros.*,contacto.*,direccion.* '
                . 'FROM maestros '
                . 'INNER JOIN contacto ON maestros.contacto_id =contacto.contacto_id '
                . 'INNER JOIN direccion ON maestros.direccion_id =direccion.direccion_id ');
  	return $query->result_array();
    }
    public function search($i)
    {
        $query = $this->db->query(
                'SELECT maestros.* '
                . 'FROM maestros '
                . 'WHERE maestros_id='.$i.';');
  	return $query->result_array();
        
    }
    public function insert($data)
    {
        $query = $this->db->query('call set_Maestro('.$data.')');
        return $query;
    }
    public function update($data)
    {
        $query = $this->db->query('call set_Maestro('.$data.')');
        return $query;
    }
}
