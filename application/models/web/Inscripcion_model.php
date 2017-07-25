<?php
class Inscripcion_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function select()
    {
        $query = $this->db->query(
                'SELECT * '
                . 'FROM inscripcion;');
  	return $query->result_array();
    }
    public function search($i)
    {
        $query = $this->db->query(
                'SELECT inscripcion.*,direccion.*,contacto.*,estudiante.*,tutor.* '
                . 'FROM inscripcion '
                . 'INNER JOIN estudiante ON incripcion.estudiante_id = estudiante.estudiante_id '
                . 'INNER JOIN tutor ON incripcion.tutor_id = tutor.tutor_id '
                . 'WHERE inscripcion_id='.$i.';');
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
