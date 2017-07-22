<?php
class Calificacion_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function select()
    {
        $query = $this->db->query(
                'SELECT calificaciones_alumno.*,calificaciones.*,materias.*,estudiante.* '
                . 'FROM calificaciones_alumno'
                . 'INNER JOIN calificaciones ON calificaciones_alumno.calificaciones_id = calificaciones.calificaciones_id '
                . 'INNER JOIN materias ON calificaciones_alumno.materias_id = materias.materias_id '
                . 'INNER JOIN estudiante ON calificaciones_alumno.estudiante_id = estudiante.estudiante_id '
                . ';');
  	return $query->result_array();
    }
    public function search($i)
    {
        $query = $this->db->query(
                'SELECT calificaciones_alumno.*,calificaciones.* '
                . 'FROM calificaciones_alumno'
                . 'INNER JOIN calificaciones ON calificaciones_alumno.calificaciones_id = calificaciones.calificaciones_id '
                . 'WHERE calificaciones_alumno.calificaciones_id='.$i.';');
  	return $query->result_array();
        
    }
    public function insert($data)
    {
        $query = $this->db->query('call set_Calificacion('.$data.')');
        return $query;
    }
    public function update($data)
    {
        $query = $this->db->query('call set_Calificacion('.$data.')');
        return $query;
    }
}
