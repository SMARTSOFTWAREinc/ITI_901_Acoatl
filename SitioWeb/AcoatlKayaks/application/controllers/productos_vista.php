<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

function __construct(){
    parent:: __construct();
    $this->load->model('Productos_Mdl');
}
 
    public function listar(){
        $data['productos'] = $this->Productos_Mdl->listar();
        $this->load->view('template/header'); 
        $this->load->view('front/catalogoProductos_vw',$data);
        $this->load->view('template/footer'); 
    }
}
