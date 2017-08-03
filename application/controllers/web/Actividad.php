<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Actividad extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
	$this->load->model('web/Actividad_model');
	session_start();
    }
    public function index()
    {
    }
    public function get()
    {
        if(!isset($_SESSION['id'])){
            $get=$this->Actividad_model->select();
            $data=array();
            foreach ($get as $key) {
                array_push($data,array(
                    'actividades_id'        =>  $key['actividades_id'],
                    'actividades_nombre'    =>  $key['actividades_nombre'],
                    'actividades_cupo'      =>  $key['actividades_cupo'],
                    'actividades_horario'   =>  $key['actividades_horario'],
                    'estudiante_id'         =>  $key['estudiante_id'],
                    'estudiante_nombre'     =>  $key['estudiante_nombre'],
                    'maestros_id'           =>  $key['maestros_id']
                        ));
            }
            $this->load->view('web/templates/head',array('titulo'=>'Actividad'));
            $this->load->view('web/sections/Actividad/get',array('titulo'=>'Actividad','get'=>$data));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function set($i)
    {
        if(!isset($_SESSION['id'])){
            $get=$this->Actividad_model->search($i);
            $data=array();
            foreach ($get as $key) {
                array_push($data,array(
                    'actividades_id'        =>  $key['actividades_id'],
                    'actividades_nombre'    =>  $key['actividades_nombre'],
                    'actividades_cupo'      =>  $key['actividades_cupo'],
                    'actividades_horario'   =>  $key['actividades_horario'],
                    'estudiante_id'         =>  $key['estudiante_id'],
                    'maestros_id'           =>  $key['maestros_id']
                        ));
            }
            $this->load->view('web/templates/head',array('titulo'=>'Actividad'));
            $this->load->view('web/sections/Actividad/set',array('titulo'=>'Actividad','get'=>$data));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function pro()
    {
        if(!isset($_SESSION['id'])){
            $this->load->view('web/templates/head',array('titulo'=>'Actividad'));
            if($this->input->post('submit')){
                $data = array(
                    'actividades_id'        =>  $this->input->post('actividades_id'),
                    'actividades_nombre'    =>  $this->input->post('actividades_nombre'),
                    'actividades_cupo'      =>  $this->input->post('actividades_cupo'),
                    'actividades_horario'   =>  $this->input->post('actividades_horario'),
                    'estudiante_id'         =>  $this->input->post('estudiante_id'),
                    'maestros_id'           =>  $this->input->post('maestros_id'),
                        );
                if($data['actividades_id'] == 0){
                    $this->Actividad_model->insert($data);
                    $msg = 'Exito al insertar actividad';
                }else{
                    $this->Actividad_model->update($data);
                    $msg = 'Exito al actualizar actividad';
                }
            }else{
                $msg = 'Fracaso al insertar datos';                
            }
            $this->load->view('web/sections/Actividad/pro',array('titulo'=>'Actividad','msg' => $msg));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
}
