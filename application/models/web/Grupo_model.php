<?php
class Grupo_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function select()
    {
        $query = $this->db->query(
                'SELECT grupo.* '
                . 'FROM grupo;');
  	return $query->result_array();
    }
    public function search($i)
    {
        $query = $this->db->query(
                'SELECT grupo.* '
                . 'FROM grupo '
                . 'WHERE grupo_id='.$i.';');
  	return $query->result_array();
        
    }
    public function insert($data)
    {
        $this->db->insert('grupo',$data);
    }
    public function update($data)
    {
        $this->db->where('grupo_id', $data['grupo_id']);
        $this->db->update('grupo', $data); 
    }
}
