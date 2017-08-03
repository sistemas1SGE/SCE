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
            $get=$this->Inscripcion_model->select();
            $data=array();
            foreach ($get as $key) {
                array_push($data,array(
                    'estudiante_observaciones'          =>  $key['estudiante_observaciones'],
                    'estudiante_necesidadEducativa'     =>  $key['estudiante_necesidadEducativa'],
                    'estudiante_id'                     =>  $key['estudiante_id'],
                    'estudiante_nombre'                 =>  $key['estudiante_nombre'],
                    'tutor_nombre'                      =>  $key['tutor_nombre'],
                    'contacto_id'                       =>  $key['contacto_id'],
                    'contacto_telefono'                 =>  $key['contacto_telefono'],
                    'contacto_celular'                  =>  $key['contacto_celular'],
                    'contacto_correo'                   =>  $key['contacto_correo']
                        ));
            }
            $this->load->view('web/templates/head',array('titulo'=>'Inscripcion'));
            $this->load->view('web/sections/Inscripcion/get',array('titulo'=>'Inscripcion','get'=>$data));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function set($i)
    {
        if(!isset($_SESSION['id'])){
            $get=$this->Inscripcion_model->search($i);
            $data=array();
            foreach ($get as $key) {
                array_push($data,array(
                    'inscripcion_id'                    =>  $key['inscripcion_id'],
                    'inscripcion_folio'                 =>  $key['inscripcion_folio'],
                    'inscripcion_fecha'                 =>  $key['inscripcion_fecha'],
                    'inscripcion_tiket'                 =>  $key['inscripcion_tiket'],
                    'inscripcion_status'                =>  $key['inscripcion_status'],
                    'estudiante_id'                     =>  $key['estudiante_id'],
                    'tutor_id'                          =>  $key['tutor_id'],
                    'institucion_id'                    =>  $key['institucion_id'],
                    'estudiante_nombre'                 =>  $key['estudiante_nombre'],
                    'estudiante_apellidos'              =>  $key['estudiante_apellidos'],
                    'estudiante_curp'                   =>  $key['estudiante_curp'],
                    'estudiante_genero'                 =>  $key['estudiante_genero'],
                    'estudiante_estadoCivil'            =>  $key['estudiante_estadoCivil'],
                    'estudiante_nacionalidad'           =>  $key['estudiante_nacionalidad'],
                    'estudiante_estado_nacimiento'      =>  $key['estudiante_estado_nacimiento'],
                    'estudiante_lenguaMaterna'          =>  $key['estudiante_lenguaMaterna'],
                    'estudiante_tipoDocumento'          =>  $key['estudiante_tipoDocumento'],
                    'estudiante_folioDocumento'         =>  $key['estudiante_folioDocumento'],
                    'estudiante_necesidadEducativa'     =>  $key['estudiante_necesidadEducativa'],
                    'estudiante_observaciones'          =>  $key['estudiante_observaciones'],
                    'tutor_nombre'                      =>  $key['tutor_nombre'],
                    'tutor_apellidos'                   =>  $key['tutor_apellidos'],
                    'tutor_curp'                        =>  $key['institucion_id'],
                    'tutor_estadoCivil'                 =>  $key['tutor_estadoCivil'],
                    'tutor_gradoEstudios'               =>  $key['tutor_gradoEstudios'],
                    'tutor_nacionalidad'                =>  $key['tutor_nacionalidad'],
                    'tutor_EstadoNacimiento'            =>  $key['tutor_EstadoNacimiento'],
                    'tutor_genero'                      =>  $key['tutor_genero'],
                    'tutor_parentescoAlumno'            =>  $key['tutor_parentescoAlumno'],
                    'tutor_lenguaMaterna'               =>  $key['tutor_lenguaMaterna'],
                    'tutor_tipoDocumento'               =>  $key['tutor_tipoDocumento'],
                    'tutor_folioDocumento'              =>  $key['tutor_folioDocumento'],
                    'institucion_nonmbre'               =>  $key['institucion_nonmbre'],
                    'institucion_zona'                  =>  $key['institucion_zona'],
                    'institucion_sector'                =>  $key['institucion_sector'],
                    'institucion_director'              =>  $key['institucion_director'],
                    'institucion_turno'                 =>  $key['institucion_turno'],
                    'institucion_telefono'              =>  $key['institucion_telefono'],
                    'institucion_correo'                =>  $key['institucion_correo'],
                    'contacto_id'                   =>  $key['contacto_id'],
                    'contacto_telefono'             =>  $key['contacto_telefono'],
                    'contacto_celular'              =>  $key['contacto_celular'],
                    'contacto_redesSociales'        =>  $key['contacto_redesSociales'],
                    'contacto_correo'               =>  $key['contacto_correo']
                        ));
            }
            $this->load->view('web/templates/head',array('titulo'=>'Inscripcion'));
            $this->load->view('web/sections/Inscripcion/set',array('titulo'=>'Inscripcion','get'=>$data));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
    public function pro()
    {
        if(!isset($_SESSION['id'])){
            $this->load->view('web/templates/head',array('titulo'=>'Administrativo'));
            if($this->input->post('submit')){
                $data = array(
                    'inscripcion_id'                    =>  $this->input->post('inscripcion_id'),
                    'inscripcion_folio'                 =>  $this->input->post('inscripcion_folio'),
                    'inscripcion_fecha'                 =>  $this->input->post('inscripcion_fecha'),
                    'inscripcion_tiket'                 =>  $this->input->post('inscripcion_tiket'),
                    'inscripcion_status'                =>  $this->input->post('inscripcion_status'),
                    'estudiante_id'                     =>  $this->input->post('estudiante_id'),
                    'tutor_id'                          =>  $this->input->post('tutor_id'),
                    'institucion_id'                    =>  $this->input->post('institucion_id'),
                    'estudiante_nombre'                 =>  $this->input->post('estudiante_nombre'),
                    'estudiante_apellidos'              =>  $this->input->post('estudiante_apellidos'),
                    'estudiante_curp'                   =>  $this->input->post('estudiante_curp'),
                    'estudiante_genero'                 =>  $this->input->post('estudiante_genero'),
                    'contacto_correo'                   =>  $this->input->post('contacto_correo'),
                    'estudiante_estadoCivil'            =>  $this->input->post('estudiante_estadoCivil'),
                    'estudiante_nacionalidad'           =>  $this->input->post('estudiante_nacionalidad'),
                    'estudiante_estado_nacimiento'      =>  $this->input->post('estudiante_estado_nacimiento'),
                    'estudiante_lenguaMaterna'          =>  $this->input->post('estudiante_lenguaMaterna'),
                    'estudiante_tipoDocumento'          =>  $this->input->post('estudiante_tipoDocumento'),
                    'estudiante_folioDocumento'         =>  $this->input->post('estudiante_folioDocumento'),
                    'estudiante_necesidadEducativa'     =>  $this->input->post('estudiante_necesidadEducativa'),
                    'estudiante_observaciones'          =>  $this->input->post('estudiante_observaciones'),
                    'tutor_nombre'                      =>  $this->input->post('tutor_nombre'),
                    'tutor_apellidos'                   =>  $this->input->post('tutor_apellidos'),
                    'tutor_curp'                        =>  $this->input->post('tutor_curp'),
                    'tutor_estadoCivil'                 =>  $this->input->post('tutor_estadoCivil'),
                    'tutor_gradoEstudios'               =>  $this->input->post('tutor_gradoEstudios'),
                    'tutor_nacionalidad'                =>  $this->input->post('tutor_nacionalidad'),
                    'tutor_EstadoNacimiento'            =>  $this->input->post('tutor_EstadoNacimiento'),
                    'tutor_genero'                      =>  $this->input->post('tutor_genero'),
                    'tutor_parentescoAlumno'            =>  $this->input->post('tutor_parentescoAlumno'),
                    'tutor_lenguaMaterna'               =>  $this->input->post('tutor_lenguaMaterna'),
                    'tutor_tipoDocumento'               =>  $this->input->post('tutor_tipoDocumento'),
                    'institucion_nonmbre'               =>  $this->input->post('institucion_nonmbre'),
                    'institucion_sector'                =>  $this->input->post('institucion_sector'),
                    'institucion_zona'                  =>  $this->input->post('institucion_zona'),
                    'institucion_director'              =>  $this->input->post('institucion_director'),
                    'institucion_turno'                 =>  $this->input->post('institucion_turno'),
                    'institucion_telefono'              =>  $this->input->post('institucion_telefono'),
                    'institucion_correo'                =>  $this->input->post('institucion_correo')
                        );
                if($data['inscripcion_id'] == 0){
                    $this->Incripcion_model->insert($data);
                    $msg = 'Exito al insertar inscripcion';
                }else{
                    $this->Incripcion_model->update($data);
                    $msg = 'Exito al actualizar incripcion';
                }
            }else{
                $msg = 'Fracaso al insertar datos';                
            }
            $this->load->view('web/sections/Inscripcion/pro',array('titulo'=>'Inscripcion','msg' => $msg));
            $this->load->view('web/templates/foot');
        }else{
            redirect(base_url().'index.php/'.'Sign-in');
        }
    }
}
