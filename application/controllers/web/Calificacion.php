<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Calificacion extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
	$this->load->model('web/Calificacion_model');
	session_start();
    }
    public function index()
    {
    }
    public function get()
    {
        if(!isset($_SESSION['id'])){
            $get=$this->Calificacion_model->select();
            $data=array();
            foreach ($get as $key) {
                array_push($data,array(
                    'calificaciones_id'         =>  $key['calificaciones_id'],
                    'calificaciones_primerMes'  =>  $key['calificaciones_primerMes'],
                    'calificaciones_segundoMes' =>  $key['calificaciones_segundoMes'],
                    'calificaciones_tercerMes'  =>  $key['calificaciones_tercerMes'],
                    'calificaciones_cuartoMes'  =>  $key['calificaciones_cuartoMes'],
                    'calificaciones_quintoMes'  =>  $key['calificaciones_quintoMes'],
                    'calificaciones_sextoMes'   =>  $key['calificaciones_sextoMes'],
                    'calificaciones_total'      =>  $key['calificaciones_total'],
                    'grupo_id'                  =>  $key['grupo_id'],
                    'grupo_grado'               =>  $key['grupo_grado'],
                    'materias_id'               =>  $key['materias_id'],
                    'materias_nombre'           =>  $key['materias_nombre'],
                    'estudiante_id'             =>  $key['estudiante_id'],
                    'estudiante_nombre'         =>  $key['estudiante_nombre']
                        ));
            }
            $this->load->view('web/templates/head',array('titulo'=>'Calificacion'));
            $this->load->view('web/sections/Calificacion/get',array('titulo'=>'Calificacion','get'=>$data));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function set($i)
    {
        if(!isset($_SESSION['id'])){
            $get=$this->Calificacion_model->search($i);
            $data=array();
            foreach ($get as $key) {
                array_push($data,array(
                    'calificaciones_id'         =>  $key['calificaciones_id'],
                    'calificaciones_primerMes'  =>  $key['calificaciones_primerMes'],
                    'calificaciones_segundoMes' =>  $key['calificaciones_segundoMes'],
                    'calificaciones_tercerMes'  =>  $key['calificaciones_tercerMes'],
                    'calificaciones_cuartoMes'  =>  $key['calificaciones_cuartoMes'],
                    'calificaciones_quintoMes'  =>  $key['calificaciones_quintoMes'],
                    'calificaciones_sextoMes'   =>  $key['calificaciones_sextoMes'],
                    'calificaciones_total'      =>  $key['calificaciones_total'],
                    'grupo_id'                  =>  $key['grupo_id'],
                    'grupo_grado'               =>  $key['grupo_grado'],
                    'materias_id'               =>  $key['materias_id'],
                    'materias_nombre'           =>  $key['materias_nombre'],
                    'estudiante_id'             =>  $key['estudiante_id'],
                    'estudiante_nombre'         =>  $key['estudiante_nombre']
                        ));
            }
            $this->load->view('web/templates/head',array('titulo'=>'Calificacion'));
            $this->load->view('web/sections/Calificacion/set',array('titulo'=>'Calificacion','get'=>$data));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function pro()
    {
        if(!isset($_SESSION['id'])){
            $this->load->view('web/templates/head',array('titulo'=>'Calificacion'));
            if($this->input->post('submit')){
                $data = array(
                    'calificaciones_id'             =>  $this->input->post('calificaciones_id'),
                    'calificaciones_primerMes'      =>  $this->input->post('calificaciones_primerMes'),
                    'calificaciones_segundoMes'     =>  $this->input->post('calificaciones_segundoMes'),
                    'calificaciones_tercerMes'      =>  $this->input->post('calificaciones_tercerMes'),
                    'calificaciones_cuartoMes'      =>  $this->input->post('calificaciones_cuartoMes'),
                    'calificaciones_quintoMes'      =>  $this->input->post('calificaciones_quintoMes'),
                    'calificaciones_sextoMes'       =>  $this->input->post('calificaciones_sextoMes'),
                    'calificaciones_total'          =>  $this->input->post('calificaciones_total'),
                    'grupo_id'                      =>  $this->input->post('grupo_id'),
                    'grupo_grado'                   =>  $this->input->post('grupo_grado'),
                    'materias_id'                   =>  $this->input->post('materias_id'),
                    'materias_nombre'               =>  $this->input->post('materias_nombre'),
                    'estudiante_id'                 =>  $this->input->post('estudiante_id'),
                    'estudiante_nombre'             =>  $this->input->post('estudiante_nombre')
                        );
                if($data['calificacion_id'] == '0'){
                    $query = $this->Calificacion_model->insert($data);
                }else{
                    $query = $this->Calificacion_model->update($data);
                }
            }
            if(isset($query) && $query){
                $valid=true;
                $msg="";
            }else{
                $valid=false;
                $msg="";                
            }
            $this->load->view('web/sections/Calificacion/pro',array('titulo'=>'Calificacion','valid'=>$valid,'msg'=>$msg));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
}
