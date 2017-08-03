<?php
class Actividad_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function select()
    {
        $query = $this->db->query(
                'SELECT actividades.*, estudiante.* '
                . 'FROM actividades '
                . 'LEFT JOIN estudiante ON estudiante.estudiante_id = actividades.estudiante_id;');
  	return $query->result_array();
    }
    public function search($i)
    {
        $query = $this->db->query(
                'SELECT actividades.*'
                . 'FROM actividades '
                . 'WHERE actividades_id='.$i.';');
  	return $query->result_array();
        
    }
    public function insert($data)
    {
        $this->db->insert('actividades',$data);
    }
    public function update($data)
    {
        $this->db->where('actividades_id', $data['actividades_id']);
        $this->db->update('actividades', $data); 
    }
}
