<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Rol extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
	$this->load->model('web/Rol_model');
	session_start();
    }
    public function index()
    {
    }
    public function get()
    {
        if(!isset($_SESSION['id'])){
            $get=$this->Rol_model->select();
            $data=array();
            foreach ($get as $key) {
                array_push($data,array(
                    'rol_id'        =>  $key['rol_id'],
                    'rol_nombre'    =>  $key['rol_nombre']
                        ));
            }
            $this->load->view('web/templates/head',array('titulo'=>'Rol'));
            $this->load->view('web/sections/Rol/get',array('titulo'=>'Rol','get'=>$data));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function set($i)
    {
        if(!isset($_SESSION['id'])){
            $get=$this->Rol_model->search($i);
            $data=array();
            foreach ($get as $key) {
                array_push($data,array(
                    'rol_id'        =>  $key['rol_id'],
                    'rol_nombre'    =>  $key['rol_nombre']
                        ));
            }
            $this->load->view('web/templates/head',array('titulo'=>'Rol'));
            $this->load->view('web/sections/Rol/set',array('titulo'=>'Rol','get'=>$data));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function pro()
    {
        if(!isset($_SESSION['id'])){
            $this->load->view('web/templates/head',array('titulo'=>'Rol'));
            if($this->input->post('submit')){
                $data = array(
                    'rol_id'       =>  $this->input->post('rol_id'),
                    'rol_nombre'   =>  $this->input->post('rol_nombre')
                        );
                if($data['rol_id'] == '0'){
                    $query = $this->Rol_model->insert($data);
                }else{
                    $query = $this->Rol_model->update($data);
                }
            }
            if(isset($query) && $query){
                $valid=true;
                $msg="";
            }else{
                $valid=false;
                $msg="";                
            }
            $this->load->view('web/sections/Rol/pro',array('titulo'=>'Rol','valid'=>$valid,'msg'=>$msg));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
}
