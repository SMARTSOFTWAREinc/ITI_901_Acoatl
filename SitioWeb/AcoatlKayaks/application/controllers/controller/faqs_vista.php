<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faqs extends CI_Controller {

function __construct(){
    parent:: __construct();
    $this->load->model('Faqs_Mdl');
}
 
    public function listar(){
        $data['faqs'] = $this->Faqs_Mdl->listar();
        $this->load->view('template/header'); 
        $this->load->view('front/faqs_vw',$data);
        $this->load->view('template/footer'); 
    }

    

    

}
