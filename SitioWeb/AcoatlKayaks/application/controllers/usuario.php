<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {  
function __construct(){
    parent:: __construct();
    $this->load->helper('url');
    $this->load->model('Usuario_Mdl');
    $this->load->library('session');
}

public function login(){
	$user_login=array(
 
        'email'=>$this->input->post('email'),
        'contrasena'=>$this->input->post('contrasena')
    
          );
        
          $data=$this->Usuario_Mdl->login_user($user_login['email'],$user_login['contrasena']);
            if($data)
            {
              $this->session->set_userdata('user_id',$data['id_usuario']);
              $this->session->set_userdata('user_name',$data['nombre_usuario']);
              $this->session->set_userdata('user_lastname',$data['apellido']);
              $this->session->set_userdata('user_email',$data['email']);
              $this->session->set_userdata('user_password',$data['contrasena']);
              $this->session->set_userdata('user_status',$data['status']);
              $this->session->set_userdata('user_privileges',$data['privilegios']);
              ?>
              <script type="text/javascript" src="<?=base_url();?>sweetalert2/dist/sweetalert2.min.js"></script>
              <script type="text/javascript" src="<?=base_url();?>sweetalert2/jquery.js"></script>
              <link rel="stylesheet" type="text/css" href="<?=base_url();?>sweetalert2/dist/sweetalert2.css">
            
              <script>
            
              $(document).ready(function(){
                swal({
                  title: 'Has Iniciado Sesión...',
                  text: "Ahora tienes acceso a todos los servicios!",
                  type: 'success',
                  showCancelButton: false,
                  confirmButtonColor: '#f7952c',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Aceptar!'
                }).then(function(){
                  window.location.href = '<?=base_url();?>index.php/Control_admin/index';
            
                });
              });
            </script>
            <?php
     
            }
            else{
              $this->session->set_flashdata('error_msg', 'Ocurrio un error. Prueba de nuevo.');
              ?>
              <script type="text/javascript" src="<?=base_url();?>sweetalert2/dist/sweetalert2.min.js"></script>
              <script type="text/javascript" src="<?=base_url();?>sweetalert2/jquery.js"></script>
              <link rel="stylesheet" type="text/css" href="<?=base_url();?>sweetalert2/dist/sweetalert2.css">
            
              <script>
            
              $(document).ready(function(){
                swal({
                  title: 'Los datos no existen...',
                  text: "Asegurate de incertar los datos correctamente, ni no tienes registrate primero!",
                  type: 'success',
                  showCancelButton: false,
                  confirmButtonColor: '#f7952c',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Aceptar!'
                }).then(function(){
                  window.location.href = '<?=base_url();?>index.php/Control/login';
            
                });
              });
            </script>
            <?php
    
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


if ($this->form_validation->run() === false) {
        $this->load->view('template/header');
        $this->load->view('front/registro_vw');
        $this->load->view('template/footer');
    }  else {
        $this->Usuario_Mdl->set_nombre_usuario($nombre_usuario);
        $this->Usuario_Mdl->set_apellido($apellido);
        $this->Usuario_Mdl->set_email($email);
        $this->Usuario_Mdl->set_contrasena($contrasena);
        $this->Usuario_Mdl->set_status($status);
        $this->Usuario_Mdl->set_privilegios($privilegios);

    $email_check=$this->Usuario_Mdl->email_check($this->Usuario_Mdl->get_email());

    if($email_check){
      $this->Usuario_Mdl->registrar_usuario();
      $this->session->set_flashdata('success_msg', 'Registro satisfactorio. Autentificate para ingresar.');
      /*echo '<script>

 		alert("Se ha registrado correctamente")
 		window.location.href="<?=base_url().'index.php/control/login";

      </script>';*/
      //redirect('control/login');

    }
    else{

      $this->session->set_flashdata('error_msg', 'Ocurrio un error. Intenta de nuevo.');
      redirect('front/registro_vw');
    }
}  
}
public function user_logout(){

  $this->session->sess_destroy();
  redirect('Control/login');
}

public function modificar(){
  //$user = $_POST['user];
  $id_usuario = $this->input->POST('id');
  $nombre_usuario = $this->input->POST('nombre_usuario');
  $apellido = $this->input->POST('apellido');
  $email = $this->input->POST('email');
  $contrasena = $this->input->POST('contrasena');
  $status = $this->input->POST('status');
  $privilegios = $this->input->POST('privilegios');
  
$this->form_validation->set_rules('nombre_usuario', 'Nombre', 'required|alpha');
$this->form_validation->set_rules('apellido', 'Apellido', 'trim|required|alpha' );
$this->form_validation->set_rules('email', 'Correo', 'trim|required|valid_email' );
$this->form_validation->set_rules('contrasena', 'Contraseña', 'trim|required|min_length[8]|max_length[15]' );
$this->form_validation->set_rules('privilegios', 'Privilegios', 'trim|required' );
$this->form_validation->set_rules('status', 'Estatus', 'trim|required' );


if ($this->form_validation->run() === false) {
  $data['email'] = $this->session->userdata('user_email');
		$data['id'] = $this->session->userdata('user_id');
		$data['name'] = $this->session->userdata('user_name');
		$data['lastname'] = $this->session->userdata('user_lastname');
		$data['status'] = $this->session->userdata('user_status');
		$data['password'] = $this->session->userdata('user_password');
		$data['privileges'] = $this->session->userdata('user_privileges');
      $this->load->view('template/header');
      $this->load->view('front/cuenta_vw',$data);
      $this->load->view('template/footer');
  }  else {
      $this->Usuario_Mdl->set_id_usuario($id_usuario);
      $this->Usuario_Mdl->set_nombre_usuario($nombre_usuario);
      $this->Usuario_Mdl->set_apellido($apellido);
      $this->Usuario_Mdl->set_email($email);
      $this->Usuario_Mdl->set_contrasena($contrasena);
      $this->Usuario_Mdl->set_status($status);
      $this->Usuario_Mdl->set_privilegios($privilegios);

    $this->Usuario_Mdl->modificar();
    
    ?>
              <script type="text/javascript" src="<?=base_url();?>sweetalert2/dist/sweetalert2.min.js"></script>
              <script type="text/javascript" src="<?=base_url();?>sweetalert2/jquery.js"></script>
              <link rel="stylesheet" type="text/css" href="<?=base_url();?>sweetalert2/dist/sweetalert2.css">
            
              <script>
            
              $(document).ready(function(){
                swal({
                  title: 'Por seguridad se cerrará la sesión...',
                  text: "Ahora puedes acceder con tus nuevos datos!",
                  type: 'success',
                  showCancelButton: false,
                  confirmButtonColor: '#f7952c',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Aceptar!'
                }).then(function(){
                  window.location.href = '<?=base_url();?>index.php/Usuario/user_logout';
            
                });
              });
            </script>
            <?php

  }
  
} 



public function modificar_admin(){
  //$user = $_POST['user];
  $id_usuario = $this->input->POST('id');
  $nombre_usuario = $this->input->POST('nombre_usuario');
  $apellido = $this->input->POST('apellido');
  $email = $this->input->POST('email');
  $contrasena = $this->input->POST('contrasena');
  $status = $this->input->POST('status');
  $privilegios = $this->input->POST('privilegios');
  
$this->form_validation->set_rules('nombre_usuario', 'Nombre', 'required|alpha');
$this->form_validation->set_rules('apellido', 'Apellido', 'trim|required|alpha' );
$this->form_validation->set_rules('email', 'Correo', 'trim|required|valid_email' );
$this->form_validation->set_rules('contrasena', 'Contraseña', 'trim|required|min_length[8]|max_length[15]' );
$this->form_validation->set_rules('privilegios', 'Privilegios', 'trim|required' );
$this->form_validation->set_rules('status', 'Estatus', 'trim|required' );



if ($this->form_validation->run() === false) {
  $data['email'] = $this->session->userdata('user_email');
		$data['id'] = $this->session->userdata('user_id');
		$data['name'] = $this->session->userdata('user_name');
		$data['lastname'] = $this->session->userdata('user_lastname');
		$data['status'] = $this->session->userdata('user_status');
		$data['password'] = $this->session->userdata('user_password');
		$data['privileges'] = $this->session->userdata('user_privileges');
      $this->load->view('admin/template/header_vw');
      $this->load->view('front/cuenta_vw',$data);
      $this->load->view('admin/template/footer_vw');
  }  else {
      $this->Usuario_Mdl->set_id_usuario($id_usuario);
      $this->Usuario_Mdl->set_nombre_usuario($nombre_usuario);
      $this->Usuario_Mdl->set_apellido($apellido);
      $this->Usuario_Mdl->set_email($email);
      $this->Usuario_Mdl->set_contrasena($contrasena);
      $this->Usuario_Mdl->set_status($status);
      $this->Usuario_Mdl->set_privilegios($privilegios);

    $this->Usuario_Mdl->modificar();
    
    ?>
              <script type="text/javascript" src="<?=base_url();?>sweetalert2/dist/sweetalert2.min.js"></script>
              <script type="text/javascript" src="<?=base_url();?>sweetalert2/jquery.js"></script>
              <link rel="stylesheet" type="text/css" href="<?=base_url();?>sweetalert2/dist/sweetalert2.css">
            
              <script>
            
              $(document).ready(function(){
                swal({
                  title: 'Por seguridad se cerrará la sesión...',
                  text: "Ahora puedes acceder con tus nuevos datos!",
                  type: 'success',
                  showCancelButton: false,
                  confirmButtonColor: '#f7952c',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Aceptar!'
                }).then(function(){
                  window.location.href = '<?=base_url();?>index.php/Usuario/user_logout';
            
                });
              });
            </script>
            <?php

  }
  
}  
}