<?php
class Materia_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function select()
    {
        $query = $this->db->query(
                'SELECT * '
                . 'FROM materias;');
  	return $query->result_array();
    }
    public function search($i)
    {
        $query = $this->db->query(
                'SELECT administrativo.*,direccion.*,contacto.* '
                . 'FROM administrativo '
                . 'INNER JOIN direccion ON administrativo.direccion_id = direccion.direccion_id '
                . 'INNER JOIN contacto ON administrativo.contacto_id = contacto.contacto_id '
                . 'WHERE administrativo_id='.$i.';');
  	return $query->result_array();
        
    }
    public function insert($data)
    {
        $query = $this->db->query('call set_Materia('.$data.')');
        return $query;
    }
    public function update($data)
    {
        $query = $this->db->query('call set_Materia('.$data.')');
        return $query;
    }
}
