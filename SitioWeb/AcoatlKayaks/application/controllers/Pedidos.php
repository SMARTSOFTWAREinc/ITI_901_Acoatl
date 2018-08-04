<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {

function __construct(){
    parent:: __construct();
    $this->load->model('Pedidos_Mdl');
    $this->load->model('MetodoEnvio_Mdl');
    $this->load->model('MetodoPago_Mdl');
}
  
    public function listar(){
        $id= $this->session->userdata('user_id');
        if($id){
            $data['email'] = $this->session->userdata('user_email');
            $data['id'] = $this->session->userdata('user_id');
            $data['name'] = $this->session->userdata('user_name');
            $data['lastname'] = $this->session->userdata('user_lastname');
            $data['metodo_pago'] = $this->MetodoPago_Mdl->listar();
            $data['metodo_envio'] = $this->MetodoEnvio_Mdl->listar();
            $data['total'] = $this->input->post('total');
            $data['products'] = $this->input->post('productos');
            $this->load->view('template/header2'); 
            $this->load->view('front/pedidos_vw',$data);
            $this->load->view('template/footer');
        }else{
        /*echo '<script>
 		alert("Parece que no has iniciado sesión, Recuerda si no tienes cuenta puedes crearla")
 		window.location.href="front/iniciarSession";
        </script>';*/
        redirect('control/login');
        }
         
    }
    public function insertar(){
        
        //$user = $_POST['user];
        $productos = $this->input->POST('productos');
        $total = $this->input->POST('total');
        $email = $this->input->POST('email');
        $nombre = $this->input->POST('nombre');
        $apellido = $this->input->POST('apellido');
        $direccion = $this->input->POST('direccion');
        $pais = $this->input->POST('pais');
        $estado = $this->input->POST('estado');
        $ciudad = $this->input->POST('ciudad');
        $cp = $this->input->POST('cp');
        $telefono = $this->input->POST('telefono');
        $status = $this->input->POST('status');
        $id_envio = $this->input->POST('id_envio');
        $metodo_pago_id_metodo_pago = $this->input->POST('metodo_pago_id_metodo_pago');
        $usuarios_id_usuario = $this->input->POST('usuarios_id_usuario');
        

       
    $this->form_validation->set_rules('email', 'Correo', 'trim|required|valid_email');
    $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha');
    $this->form_validation->set_rules('apellido', 'Apellido', 'trim|required|alpha');
    $this->form_validation->set_rules('direccion', 'Dirección', 'trim|required');
    $this->form_validation->set_rules('pais', 'País', 'trim|required|alpha');
    $this->form_validation->set_rules('ciudad', 'Ciudad', 'trim|required|alpha');
    $this->form_validation->set_rules('estado', 'Estado', 'trim|required|alpha');
    $this->form_validation->set_rules('cp', 'Codigo Postal', 'trim|required|numeric|min_length[5]|max_length[5]');
    $this->form_validation->set_rules('telefono', 'Teléfono', 'trim|required|min_length[10]|max_length[10]|numeric');
    $this->form_validation->set_rules('metodo_pago_id_metodo_pago', 'Método de Pago', 'required');
    $this->form_validation->set_rules('id_envio', 'Método de Envío', 'required');

    
    if ($this->form_validation->run() === false) {
        $data['email'] = $this->session->userdata('user_email');
        $data['id'] = $this->session->userdata('user_id');
        $data['name'] = $this->session->userdata('user_name');
        $data['lastname'] = $this->session->userdata('user_lastname');
        $data['metodo_pago'] = $this->MetodoPago_Mdl->listar();
        $data['metodo_envio'] = $this->MetodoEnvio_Mdl->listar();
        $data['id'] = $this->input->post('usuarios_id_usuario');
        $data['total'] = $this->input->post('total');
        $data['products'] = $this->input->post('productos');
            $this->load->view('template/header2');
            $this->load->view('front/pedidos_vw',$data);
            $this->load->view('template/footer');
        }  else {
        $this->Pedidos_Mdl->registro($productos,$total,$email,$nombre,$apellido,$direccion,$pais,$estado,$ciudad,$cp,$telefono,$status,$id_envio,$metodo_pago_id_metodo_pago,$usuarios_id_usuario);
        
    }  
    
    }
    function header_footer(){  
        $this->load->library('mydompdf');
          $data["numero"] = 250;
          $html= $this->load->view('pdf/contrato_producto', $data, true);
        $this->mydompdf->load_html($html);
        $this->mydompdf->render();
          $this->mydompdf->set_base_path('./site/template/css/dompdf.css'); //agregar de nuevo el css
        $this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
        redirect('control/index');
   }
}
 