<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

    public function index()
    {
    }
    public function in()
    {
        $this->load->view('login');
    }
    public function out()
    {
        $this->load->view('login');
    }
}
