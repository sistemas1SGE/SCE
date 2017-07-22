<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Inscripcion extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
	$this->load->model('web/Inscripcion_model');
	session_start();
    }
    public function index()
    {
    }
    public function get()
    {
        if(!isset($_SESSION['id'])){
            $data['titulo'] = 'Inscripcion';
            $this->load->view('web/templates/head',$data);
            $this->load->view('web/sections/Inscripcion/get',$data);
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function set($i)
    {
        if(!isset($_SESSION['id'])){
            $data['titulo'] = 'Inscripcion';
            $this->load->view('web/templates/head',$data);
            $this->load->view('web/sections/Inscripcion/set',$data);
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function pro()
    {
        if(!isset($_SESSION['id'])){
            $data['titulo'] = 'Inscripcion';
            $this->load->view('web/templates/head',$data);
            $this->load->view('web/sections/Inscripcion/pro',$data);
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
}
