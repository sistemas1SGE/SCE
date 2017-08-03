<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Maestro extends CI_Controller {
    public function __construct()
    {
	parent::__construct();
	$this->load->model('web/Maestro_model');
	session_start();
    }
    public function index()
    {
    }
    public function get()
    {
        if(!isset($_SESSION['id'])){
            $get=$this->Maestro_model->select();
            $data=array();
            foreach ($get as $key) {
                array_push($data,array(
                    'maestros_id'                   =>  $key['maestros_id'],
                    'maestros_nombres'              =>  $key['maestros_nombres'],
                    'maestros_apellidos'            =>  $key['maestros_apellidos'],
                    'maestros_ineFolio'             =>  $key['maestros_ineFolio'],
                    'maestros_especialidad'         =>  $key['maestros_especialidad'],
                    'rol_id'                        =>  $key['rol_id'],
                    'contacto_id'                   =>  $key['contacto_id'],
                    'contacto_telefono'             =>  $key['contacto_telefono'],
                    'contacto_celular'              =>  $key['contacto_celular'],
                    'contacto_redesSociales'        =>  $key['contacto_redesSociales'],
                    'contacto_correo'               =>  $key['contacto_correo'],
                    'direccion_id'                  =>  $key['direccion_id'],
                    'direccion_calle'               =>  $key['direccion_calle'],
                    'direccion_entreCalles1'        =>  $key['direccion_entreCalles1'],
                    'direccion_entreCalles2'        =>  $key['direccion_entreCalles2'],
                    'direccion_numero'              =>  $key['direccion_numero'],
                    'direccion_manzana'             =>  $key['direccion_manzana'],
                    'direccion_lote'                =>  $key['direccion_lote'],
                    'direccion_numeroInterior'      =>  $key['direccion_numeroInterior'],
                    'direccion_departamento'        =>  $key['direccion_departamento'],
                    'direccion_referencia'          =>  $key['direccion_referencia'],
                    'direccion_cp'                  =>  $key['direccion_cp'],
                    'direccion_colonia'             =>  $key['direccion_colonia'],
                    'direccion_entidadFederativa'   =>  $key['direccion_entidadFederativa'],
                    'direccion_municipio'           =>  $key['direccion_municipio'],
                    'direccion_localidad'           =>  $key['direccion_localidad']
                        ));
            }
            $this->load->view('web/templates/head',array('titulo'=>'Maestro'));
            $this->load->view('web/sections/Maestro/get',array('titulo'=>'Maestro','get'=>$data));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function set($i)
    {
        if(!isset($_SESSION['id'])){
            $get=$this->Maestro_model->search($i);
            $data=array();
            foreach ($get as $key) {
                array_push($data,array(
                    'maestros_id'                   =>  $key['maestros_id'],
                    'maestros_nombres'              =>  $key['maestros_nombres'],
                    'maestros_apellidos'            =>  $key['maestros_apellidos'],
                    'maestros_ineFolio'             =>  $key['maestros_ineFolio'],
                    'maestros_especialidad'         =>  $key['maestros_especialidad'],
                    'rol_id'                        =>  $key['rol_id'],
                    'contacto_id'                   =>  $key['contacto_id'],
                    'contacto_telefono'             =>  $key['contacto_telefono'],
                    'contacto_celular'              =>  $key['contacto_celular'],
                    'contacto_redesSociales'        =>  $key['contacto_redesSociales'],
                    'contacto_correo'               =>  $key['contacto_correo'],
                    'direccion_id'                  =>  $key['direccion_id'],
                    'direccion_calle'               =>  $key['direccion_calle'],
                    'direccion_entreCalles1'        =>  $key['direccion_entreCalles1'],
                    'direccion_entreCalles2'        =>  $key['direccion_entreCalles2'],
                    'direccion_numero'              =>  $key['direccion_numero'],
                    'direccion_manzana'             =>  $key['direccion_manzana'],
                    'direccion_lote'                =>  $key['direccion_lote'],
                    'direccion_numeroInterior'      =>  $key['direccion_numeroInterior'],
                    'direccion_departamento'        =>  $key['direccion_departamento'],
                    'direccion_referencia'          =>  $key['direccion_referencia'],
                    'direccion_cp'                  =>  $key['direccion_cp'],
                    'direccion_colonia'             =>  $key['direccion_colonia'],
                    'direccion_entidadFederativa'   =>  $key['direccion_entidadFederativa'],
                    'direccion_municipio'           =>  $key['direccion_municipio'],
                    'direccion_localidad'           =>  $key['direccion_localidad']
                        ));
            }
            $this->load->view('web/templates/head',array('titulo'=>'Maestro'));
            $this->load->view('web/sections/Maestro/set',array('titulo'=>'Maestro','get'=>$data));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function pro()
    {
        if(!isset($_SESSION['id'])){
            $this->load->view('web/templates/head',array('titulo'=>'Maestro'));
            if($this->input->post('submit')){
                $data = array(
                    'maestros_id'                   =>  $this->input->post('maestros_id'),
                    'maestros_nombres'              =>  $this->input->post('maestros_nombres'),
                    'maestros_apellidos'            =>  $this->input->post('maestros_apellidos'),
                    'maestros_ineFolio'             =>  $this->input->post('maestros_ineFolio'),
                    'maestros_especialidad'         =>  $this->input->post('maestros_especialidad'),
                    'rol_id'                        =>  $this->input->post('rol_id'),
                    'contacto_id'                   =>  $this->input->post('contacto_id'),
                    'direccion_id'                  =>  $this->input->post('direccion_id')
                    
                        );
                if($data['maestros_id'] == 0){
                    $this->Maestro_model->insert($data);
                    $msg = 'Exito al insertar Maestros';
                }else{
                    $this->Maestro_model->update($data);
                    $msg = 'Exito al actualizar Maestro';
                }
            }else{
                $msg = 'Fracaso al insertar maestro';                
            }
            $this->load->view('web/sections/Maestro/pro',array('titulo'=>'Maestro','msg' => $msg));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
}
