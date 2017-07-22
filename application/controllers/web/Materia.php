<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Materia extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
	$this->load->model('web/Materia_model');
	session_start();
    }
    public function index()
    {
    }

    public function get()
    {
        if(!isset($_SESSION['id'])){
            $get=$this->Materia_model->select();
            $data=array();
            foreach ($get as $key) {
                array_push($data,array(
                    'materias_id'=>$key['materias_id'],
                    'materias_nombre'=>$key['materias_nombre'],
                    'grupo_id'=>$key['grupo_id'],
                    'maestros_id'=>$key['maestros_id']
                        ));
            }
            $this->load->view('web/templates/head',array('titulo'=>'Materia'));
            $this->load->view('web/sections/Materia/get',array('titulo'=>'Materia','get'=>$data));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function set($i)
    {
        if(!isset($_SESSION['id'])){
            $get=$this->Materia_model->search($i);
            $data=array();
            foreach ($get as $key) {
                array_push($data,array(
                    'materias_id'=>$key['materias_id'],
                    'materias_nombre'=>$key['materias_nombre'],
                    'grupo_id'=>$key['grupo_id'],
                    'maestros_id'=>$key['maestros_id']
                        ));
            }
            $this->load->view('web/templates/head',array('titulo'=>'Materia'));
            $this->load->view('web/sections/Materia/set',array('titulo'=>'Materia','get'=>$data));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function pro()
    {
        if(!isset($_SESSION['id'])){
            $this->load->view('web/templates/head',array('titulo'=>'Materia'));
            if($this->input->post('submit')){
                $data = array(
                    'materias_id'       =>  $this->input->post('materias_id'),
                    'materias_nombre'   =>  $this->input->post('materias_nombre'),
                    'grupo_id'          =>  $this->input->post('grupo_id'),
                    'maestros_id'       =>  $this->input->post('maestros_id')
                        );
                if($data['materias_id'] == '0'){
                    $query = $this->Materia_model->insert($data);
                }else{
                    $query = $this->Materia_model->update($data);
                }
            }
            if(isset($query) && $query){
                $valid=true;
                $msg="";
            }else{
                $valid=false;
                $msg="";                
            }
            $this->load->view('web/sections/Materia/pro',array('titulo'=>'Materia','valid'=>$valid,'msg'=>$msg));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
}
