<?php
class Inscripcion_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function select()
    {
        $query = $this->db->query(
                'SELECT inscripcion.*,estudiante.*,tutor.*,direccion.*, contacto.*'
                . 'FROM inscripcion '
                . 'INNER JOIN estudiante ON inscripcion.estudiante_id = estudiante.estudiante_id '
                . 'INNER JOIN tutor ON inscripcion.tutor_id = tutor.tutor_id '
                . 'INNER JOIN contacto ON tutor.contacto_id = contacto.contacto_id '
                . 'INNER JOIN direccion ON tutor.direccion_id = direccion.direccion_id ');
  	return $query->result_array();
    }
    public function search($i)
    {
        $query = $this->db->query(
                'SELECT inscripcion.*,estudiante.*,tutor.*,contacto.*,direccion.*'
                . 'FROM inscripcion '
                . 'INNER JOIN estudiante ON inscripcion.estudiante_id = estudiante.estudiante_id '
                . 'INNER JOIN tutor ON inscripcion.tutor_id = tutor.tutor_id '
                . 'INNER JOIN contacto ON tutor.contacto_id = contacto.contacto_id '
                . 'INNER JOIN direccion ON tutor.direccion_id = direccion.direccion_id '
                . 'WHERE inscripcion_id='.$i.';');
  	return $query->result_array();
        
    }
    public function insert($data)
    {
        $this->db->insert('inscripcion',$data);
    }
    public function update($data)
    {
        $this->db->where('inscripcion_id', $data['inscripcion_id']);
        $this->db->update('inscripcion', $data); ;
    }
}
