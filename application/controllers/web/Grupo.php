<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Grupo extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
	$this->load->model('web/Grupo_model');
	session_start();
    }
    public function index()
    {
    }
    public function get()
    {
        if(!isset($_SESSION['id'])){
            $get=$this->Grupo_model->select();
            $data=array();
            foreach ($get as $key) {
                array_push($data,array(
                    'grupo_id'      =>  $key['grupo_id'],
                    'grupo_grado'   =>  $key['grupo_grado'],
                    'grupo_grupo'   =>  $key['grupo_grupo']
                        ));
            }
            $this->load->view('web/templates/head',array('titulo'=>'Grupo'));
            $this->load->view('web/sections/Grupo/get',array('titulo'=>'Grupo','get'=>$data));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function set($i)
    {
        if(!isset($_SESSION['id'])){
            $get=$this->Grupo_model->search($i);
            $data=array();
            foreach ($get as $key) {
                array_push($data,array(
                    'grupo_id'      =>  $key['grupo_id'],
                    'grupo_grado'   =>  $key['grupo_grado'],
                    'grupo_grupo'   =>  $key['grupo_grupo']
                        ));
            }
            $this->load->view('web/templates/head',array('titulo'=>'Grupo'));
            $this->load->view('web/sections/Grupo/set',array('titulo'=>'Grupo','get'=>$data));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function pro()
    {
        if(!isset($_SESSION['id'])){
            $this->load->view('web/templates/head',array('titulo'=>'Grupo'));
            if($this->input->post('submit')){
                $data = array(
                    'grupo_id'      =>  $this->input->post('grupo_id'),
                    'grupo_grado'   =>  $this->input->post('grupo_grado'),
                    'grupo_grupo'   =>  $this->input->post('grupo_grupo')
                        );
                if($data['grupo_id'] == '0'){
                    $query = $this->Grupo_model->insert($data);
                }else{
                    $query = $this->Grupo_model->update($data);
                }
            }
            if(isset($query) && $query){
                $valid=true;
                $msg="";
            }else{
                $valid=false;
                $msg="";                
            }
            $this->load->view('web/sections/Grupo/pro',array('titulo'=>'Grupo','valid'=>$valid,'msg'=>$msg));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
}
