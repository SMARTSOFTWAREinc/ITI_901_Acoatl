<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {  
function __construct(){
	parent:: __construct();
	$this->load->model('Usuario_Mdl');
}

public function login(){
	$email=$this->input->POST('email');
    $contrasena=$this->input->POST('contraseña');
    $usu = $this->Usuario_Mdl->login($email, $contrasena);
    if ($usu > 0) {
        $this->session->set_userdata('usuarios', $email);
        redirect('Control_admin/index/1');
    } else {
        redirect('control/login'); 
    } 
}


public function registro(){
    //$user = $_POST['user];
    $nombre_usuario = $this->input->POST('nombre_usuario');
    $apellido = $this->input->POST('apellido');
    $email = $this->input->POST('email');
    $contrasena = $this->input->POST('contrasena');
    $status = $this->input->POST('status');
    $privilegios = $this->input->POST('privilegios');
  

$this->form_validation->set_rules('nombre_usuario', 'Nombre', 'required|alpha');
$this->form_validation->set_rules('apellido', 'Apellido', 'trim|required|alpha' );
$this->form_validation->set_rules('email', 'Correo', 'trim|required|valid_email|is_unique[usuarios.email]' );
$this->form_validation->set_rules('contrasena', 'Contraseña', 'trim|required|min_length[8]|max_length[15]' );
$this->form_validation->set_rules('privilegios', 'Privilegios', 'trim|required' );
$this->form_validation->set_rules('status', 'Estatus', 'trim|required' );

$this->form_validation->set_message('trim', 'El campo %s no puede llevar espacios');
$this->form_validation->set_message('valid_email', 'En el campo %s inserte un correo valido');
$this->form_validation->set_message('is_unique', 'En el campo %s el correo ya existe');
$this->form_validation->set_message('required', 'El campo %s es obligatorio');
$this->form_validation->set_message('alpha', 'El campo %s solo acepta letras');
$this->form_validation->set_message('min_length', 'El campo %s debe tener más de 8 caracteres');
$this->form_validation->set_message('max_length', 'El campo %s debe terner menos de 15 caracteres');

if ($this->form_validation->run() === false) {
        $this->load->view('template/header');
        $this->load->view('front/registro_vw');
        $this->load->view('template/footer');
    }  else {
    $this->Usuario_Mdl->registro($nombre_usuario, $apellido,  $email, $contrasena, $status,$privilegios );
    redirect('control/index');
}  
}
}