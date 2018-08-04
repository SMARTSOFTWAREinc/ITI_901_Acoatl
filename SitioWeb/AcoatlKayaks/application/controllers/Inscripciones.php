<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscripciones extends CI_Controller {

function __construct(){
    parent:: __construct();
    $this->load->model('Inscripciones_Mdl');
    $this->load->model('Tours_Mdl');
    $this->load->model('Usuario_Mdl');
    $this->load->model('MetodoPago_Mdl');

}
 
    public function insertar(){
        
    //$user = $_POST['user];
    $email = $this->input->POST('email');
    $nombre = $this->input->POST('nombre');
    $apellido = $this->input->POST('apellido');
    $direccion = $this->input->POST('direccion');
    $ciudad = $this->input->POST('ciudad');
    $estado = $this->input->POST('estado');
    $cp = $this->input->POST('cp');
    $telefono = $this->input->POST('telefono');
    $precio = $this->input->POST('precio');
    $metodo_pago_id_metodo_pago = $this->input->POST('metodo_pago_id_metodo_pago');
    $usuarios_id_usuario = $this->input->POST('usuarios_id_usuario');
    $tours_id_tour = $this->input->POST('tours_id_tour');
   
$this->form_validation->set_rules('email', 'Correo', 'trim|required|valid_email');
$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha');
$this->form_validation->set_rules('apellido', 'Apellido', 'trim|required|alpha');
$this->form_validation->set_rules('direccion', 'Dirección', 'trim|required');
$this->form_validation->set_rules('ciudad', 'Ciudad', 'trim|required|alpha');
$this->form_validation->set_rules('estado', 'Estado', 'trim|required|alpha');
$this->form_validation->set_rules('cp', 'Codigo Postal', 'trim|required|numeric|min_length[5]|max_length[5]');
$this->form_validation->set_rules('telefono', 'Teléfono', 'trim|required|min_length[10]|max_length[10]|numeric');
$this->form_validation->set_rules('metodo_pago_id_metodo_pago', 'Método de Pago', 'required');



if ($this->form_validation->run() === false) {
        $data['email'] = $this->session->userdata('user_email');
            $data['id'] = $this->session->userdata('user_id');
            $data['name'] = $this->session->userdata('user_name');
            $data['lastname'] = $this->session->userdata('user_lastname');
            $data['id_tour'] = $this->input->post('tours_id_tour');
            $data['tour_name'] = $this->input->post('tour_name');
            $data['precio'] = $this->input->post('precio');
            $data['tours'] = $this->Tours_Mdl->listar();
            $data['usuarios'] = $this->Usuario_Mdl->listar();
            $data['metodo_pago'] = $this->MetodoPago_Mdl->listar();
        $this->load->view('template/header2');
        $this->load->view('front/inscripciones_vw',$data);
        $this->load->view('template/footer');
    }  else {
    $this->Inscripciones_Mdl->registro($email,$nombre,$apellido,$direccion,$ciudad,$estado,$cp,$telefono,$precio,$metodo_pago_id_metodo_pago,$usuarios_id_usuario,$tours_id_tour);
    
    }
}
} 