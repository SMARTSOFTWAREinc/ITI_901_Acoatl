<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class control extends CI_Controller {


	function __construct(){
		parent:: __construct();
		$this->load->model('Faqs_Mdl');
		$this->load->model('Productos_Mdl');
		$this->load->model('Tours_Mdl');
		$this->load->model('Galeria_Mdl');
		}


	public function index($option = 1){

		$this->load->view('template/header');
		
		Switch($option){
			case 1:
			$data['productos'] = $this->Productos_Mdl->listar();
			$data['tours'] = $this->Tours_Mdl->listar();
			$data['galeria'] = $this->Galeria_Mdl->listar();
			$this->load->view('front/index_vw',$data);
			break;
			case 2:
			$this->load->view('admin/faqs/lista_vw');
			break;
		}
		
		$this->load->view('template/footer');
	}

	public function index2($option = 1){

		$this->load->view('template/header2');

		Switch($option){
			
			case 1:
			$data['faqs'] = $this->Faqs_Mdl->listar();
			$this->load->view('front/faqs_vw',$data);
			break;
			case 2: 
			$data['productos'] = $this->Productos_Mdl->listar();
			$this->load->view("front/catalogoProductos_vw",$data);
			break;
		}
		
		
		$this->load->view('template/footer');
	}


	public function login(){
		$this->load->view('front/iniciarSesion_vw');
	}
	public function Reg(){
		$this->load->view('front/registro_vw');
	}

}
