<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Objeto extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
	$this->load->model('web/Objeto_model');
	session_start();
    }
    public function index()
    {
    }
    public function get()
    {
        if(!isset($_SESSION['id'])){
            $get=$this->Objeto_model->select();
            $data=array();
            foreach ($get as $key) {
                array_push($data,array(
                    'objeto_id'=>$key['objeto_id'],
                    'materias_nombre'=>$key['materias_nombre'],
                    'objeto_html'=>$key['objeto_html']
                        ));
            }
            $this->load->view('web/templates/head',array('titulo'=>'Objeto'));
            $this->load->view('web/sections/Objeto/get',array('titulo'=>'Objeto','get'=>$data));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function set($i)
    {
        if(!isset($_SESSION['id'])){
            $get=$this->Objeto_model->search($i);
            $data=array();
            foreach ($get as $key) {
                array_push($data,array(
                    'objeto_id'=>$key['objeto_id'],
                    'materias_nombre'=>$key['materias_nombre'],
                    'objeto_html'=>$key['objeto_html']
                        ));
            }
            $this->load->view('web/templates/head',array('titulo'=>'Objeto'));
            $this->load->view('web/sections/Objeto/set',array('titulo'=>'Objeto','get'=>$data));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function pro()
    {
        if(!isset($_SESSION['id'])){
            $this->load->view('web/templates/head',array('titulo'=>'Objeto'));
            if($this->input->post('submit')){
                $data = array(
                    'objeto_id'       =>  $this->input->post('objeto_id'),
                    'objeto_nombre'   =>  $this->input->post('objeto_nombre'),
                    'objeto_html'          =>  $this->input->post('objeto_html')
                        );
                if($data['objeto_id'] == '0'){
                    $query = $this->Objeto_model->insert($data);
                }else{
                    $query = $this->Objeto_model->update($data);
                }
            }
            if(isset($query) && $query){
                $valid=true;
                $msg="";
            }else{
                $valid=false;
                $msg="";                
            }
            $this->load->view('web/sections/Objeto/pro',array('titulo'=>'Objeto','valid'=>$valid,'msg'=>$msg));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
}
