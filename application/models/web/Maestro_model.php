<?php
class Maestro_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function select()
    {
        $query = $this->db->query(
                'SELECT * '
                . 'FROM maestros;');
  	return $query->result_array();
    }
    public function search($i)
    {
        $query = $this->db->query(
                'SELECT maestros.*,grupo.*,materias.* '
                . 'FROM maestros '
                . 'INNER JOIN materias ON maestros.maestros_id = materias.materias_id '
                . 'INNER JOIN contacto ON administrativo.contacto_id = contacto.contacto_id '
                . 'WHERE administrativo_id='.$i.';');
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
