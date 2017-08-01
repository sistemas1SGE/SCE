<?php
class EstudianteTutor_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function select()
    {
        $query = $this->db->query(
                'SELECT * '
                . 'FROM tutor;');
  	return $query->result_array();
    }
    public function search($i)
    {
        $query = $this->db->query(
                'SELECT estudiante.*,tutor.*, direccion.* '
                . 'FROM estudiantes '
                . 'INNER JOIN direccion ON estudiantes.direccion_id = direccion.direccion_id '
                . 'INNER JOIN tutor ON direccion.maestros_id = tutor.maestros_id '
                . 'WHERE estudiantes_id='.$i.';');
  	return $query->result_array();
        
    }
    public function insert($data)
    {
        $query = $this->db->query('call set_EstudianteTutor('.$data.')');
        return $query;
    }
    public function update($data)
    {
        $query = $this->db->query('call set_EstudianteTutor('.$data.')');
        return $query;
    }
}
