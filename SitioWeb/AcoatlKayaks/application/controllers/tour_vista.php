<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tours extends CI_Controller {

function __construct(){
    parent:: __construct();
    $this->load->model('Tours_Mdl');
}
 
    public function listar(){
        $data['tours'] = $this->Tours_Mdl->listar();
        $this->load->view('template/header'); 
        $this->load->view('front/index_vw',$data);
        $this->load->view('template/footer'); 
    }
}