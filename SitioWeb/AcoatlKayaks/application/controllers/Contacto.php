<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {  
function __construct(){
    parent:: __construct();
    $this->load->model('Faqs_Mdl');
    $this->load->model('Productos_Mdl');
    $this->load->model('Tours_Mdl');
    $this->load->model('Galeria_Mdl');
	$this->load->model('Contacto_Mdl');
}

public function registroContacto(){
    //$user = $_POST['user];
    $nombre_contacto = $this->input->POST('nombre_contacto');
    $email = $this->input->POST('email');
    $mensaje = $this->input->POST('mensaje');
    $comentario = $this->input->POST('comentario');
    $status = $this->input->POST('status');
    $usuarios_id_usuario = $this->input->POST('usuarios_id_usuario');
  

$this->form_validation->set_rules('nombre_contacto', 'Nombre', 'trim|required|alpha');
$this->form_validation->set_rules('email', 'Correo', 'trim|required|valid_email');
$this->form_validation->set_rules('mensaje', 'Mensaje', 'required');
$this->form_validation->set_rules('comentario', 'Comentario', 'required');


if ($this->form_validation->run() === false) {
            $data['productos'] = $this->Productos_Mdl->listar();
			$data['tours'] = $this->Tours_Mdl->listar();
			$data['galeria'] = $this->Galeria_Mdl->listar();
            $this->load->view('template/header');
            $this->load->view('front/index_vw',$data);
            $this->load->view('template/footer');
    }  else {
    $this->Contacto_Mdl->registro($nombre_contacto,  $email, $mensaje, $comentario, $status, $usuarios_id_usuario );
    /*echo '<script>

    alert("Se ha registrado correctamente")
    window.location.href="control/index";

    </script>';*/
   //redirect('control/index');
}  
}
}