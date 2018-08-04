<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {


	function __construct(){
		parent:: __construct();
		$this->load->model('Faqs_Mdl');
		$this->load->model('Productos_Mdl');
		$this->load->model('Usuario_Mdl');
		$this->load->model('Tours_Mdl');
		$this->load->model('Galeria_Mdl');
		}


	public function index($option = 1){

		$this->load->view('template/header');
		
		Switch($option){
			case 1:
			
			$data['tours'] = $this->Tours_Mdl->listar();
			$data['galeria'] = $this->Galeria_Mdl->listar();
			$data['productos'] = $this->Productos_Mdl->listar_cuatro();
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
			$this->load->model('catalogo_model');
			$data['title'] = 'Catálogo codeIgniter';
			$pages = 2; //Número de registros mostrados por páginas
			$this->load->library('pagination'); //Cargamos la librería de paginación
			$config['base_url'] = base_url() . 'index.php/control/index2/2/pagina/'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
			$config['total_rows'] = $this->catalogo_model->filas();
			$config['per_page'] = $pages;
			$config['num_links'] = 20; //Número de links mostrados en la paginación
			$config['first_link'] = '|<';
        $config['last_link'] = '>|';
        $config['next_link'] = '>';
        $config['prev_link'] = '<';

        $config['full_tag_open'] 	= '<div class="pagging text-center"><nav aria-label="Page navigation example" class="d-flex justify-content-center"><ul class="pagination">';
        $config['full_tag_close'] 	= '</ul></nav></div>';
        $config['num_tag_open'] 	= '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] 	= '</span></li>';
        $config['cur_tag_open'] 	= '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] 	= '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open'] 	= '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close'] 	= '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open'] 	= '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close'] 	= '</span></li>';
        $config['first_tag_open'] 	= '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] 	= '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close'] 	= '</span></li>';
			$this->pagination->initialize($config);
			
			$data["productos"] = $this->catalogo_model->total_productos_paginados($config['per_page'], $this->uri->segment(5));

			//$data['productos'] = $this->Productos_Mdl->listar();
			$this->load->view("front/catalogo_view",$data);
			break;
			case 3: 
			$data['promociones'] = $this->Faqs_Mdl->listar_promos();
			$this->load->view("front/promos_vw",$data);
			break;
			case 4: 
			$data['datos_interesantes'] = $this->Faqs_Mdl->listar_datos();
			$this->load->view("front/datos_vw",$data);
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
	public function cuenta(){
		$usuario= $this->session->userdata('user_id');
		if($usuario){
		$chato = $this->Usuario_Mdl->desencriptar();
		foreach($chato as $item){
				
		
		$data['email'] = $this->session->userdata('user_email');
		$data['id'] = $this->session->userdata('user_id');
		$data['name'] = $this->session->userdata('user_name');
		$data['lastname'] = $this->session->userdata('user_lastname');
		$data['status'] = $this->session->userdata('user_status');
		$data['item'] = $item->pass;
		$data['privileges'] = $this->session->userdata('user_privileges');
		}
		$this->load->view('template/header2');
		$this->load->view('front/cuenta_vw',$data);
		$this->load->view('template/footer');
	}else{
		?>
		<script type="text/javascript" src="<?=base_url();?>sweetalert2/dist/sweetalert2.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>sweetalert2/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>sweetalert2/dist/sweetalert2.css">
	  
		<script>
	  
		$(document).ready(function(){
		  swal({
			title: 'Parece que no hay sesión...',
			text: "Vamos!",
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
	public function contrato_tour(){
		$this->load->view('pdf/contrato_inscripcion');
	}
	public function contrato_pedido(){
		$this->load->view('pdf/contrato_producto');
	}
	public function reporte_inscripciones(){
		$this->load->view('pdf/reporte_inscripciones');
	}

}
