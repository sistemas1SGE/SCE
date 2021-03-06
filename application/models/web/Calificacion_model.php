<?php
class Calificacion_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function select()
    {
        $query = $this->db->query(
                'SELECT calificaciones_alumno.*,materias.*,estudiante.*,grupo.*,calificaciones.* '
                . 'FROM calificaciones_alumno '
                . 'INNER JOIN materias ON calificaciones_alumno.materias_id = materias.materias_id '
                . 'INNER JOIN estudiante ON calificaciones_alumno.estudiante_id = estudiante.estudiante_id '
                . 'INNER JOIN calificaciones ON calificaciones_alumno.calificaciones_id = calificaciones.calificaciones_id '                
                . 'INNER JOIN grupo ON estudiante.grupo_id = grupo.grupo_id ');
  	return $query->result_array();
    }
    public function search($i)
    {
        $query = $this->db->query(
                'SELECT calificaciones_alumno.*,materias.*,estudiante.*,grupo.*,calificaciones.* '
                . 'FROM calificaciones_alumno '
                . 'INNER JOIN materias ON calificaciones_alumno.materias_id = materias.materias_id '
                . 'INNER JOIN estudiante ON calificaciones_alumno.estudiante_id = estudiante.estudiante_id '
                . 'INNER JOIN calificaciones ON calificaciones_alumno.calificaciones_id = calificaciones.calificaciones_id '                
                . 'INNER JOIN grupo ON estudiante.grupo_id = grupo.grupo_id '
                . 'WHERE calificaciones_alumno.calificaciones_id='.$i.';');
  	return $query->result_array();
        
    }
    public function insert($data)
    {
        $this->db->insert('calificaciones',$data);
    }
    public function update($data)
    {
        $this->db->where('calificaciones_id', $data['calificaciones_id']);
        $this->db->update('calificaciones', $data); 
    }
}
