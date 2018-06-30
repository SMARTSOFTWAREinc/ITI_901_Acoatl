<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Control_admin extends CI_Controller {
    function __construct(){
        parent:: __construct();
        if($this->session->has_userdata('usuarios')){
            $this->load->model('Usuario_Mdl');
        }else{
            redirect('control/index');
        }

        $this->load->library('grocery_CRUD');
        $this->load->model('Faqs_Mdl');
		$this->load->model('Productos_Mdl');
		$this->load->model('Tours_Mdl');
		$this->load->model('Galeria_Mdl');   
        }
        
        public function index(){
            //INSTANCIAR OBJETO DE GROCERY
            $user = new grocery_CRUD();
            //INDICAR TABLA
            $user->set_theme('bootstrap-v4'); 
            $user->set_table('usuarios');
            $user->required_fields('nombre_usuario', 'apellido', 'email', 'contrasena', 'status', 'privilegios');
            //renderizar la tabla
            $usuario = $user->render();
            $this->load->view('admin/template/header_vw');
            $this->load->view('admin/users/lista_vw', (array)$usuario);
            $this->load->view('admin/template/footer_vw');
            
            
           
        }
        public function faqs(){
            $fak = new grocery_CRUD();
            //INDICAR TABLA
            $fak->set_theme('bootstrap-v4'); 
            $fak->set_table('faqs');
            $fak->set_relation('usuarios_id_usuario','usuarios','nombre_usuario');
            $fak->required_fields('pregunta', 'respuesta', 'status', 'usuarios_id_usuario');
            //renderizar la tabla
            $faq = $fak->render();
            $this->load->view('admin/template/header_vw');
            $this->load->view('admin/faqs/lista_vw', (array)$faq);
            $this->load->view('admin/template/footer_vw');

        }
        public function contacto(){
            $contact = new grocery_CRUD();
            //INDICAR TABLA 
            $contact->set_theme('bootstrap-v4'); 
            $contact->set_table('contacto');
            $contact->set_relation('usuarios_id_usuario','usuarios','nombre_usuario');
            $contact->required_fields('nombre_contacto', 'email' ,'mensaje', 'comentario','status', 'usuarios_id_usuario');
            //renderizar la tabla
            $contacto = $contact->render();
            $this->load->view('admin/template/header_vw');
            $this->load->view('admin/contact/lista_vw', (array)$contacto);
            $this->load->view('admin/template/footer_vw');

        }
        public function galeria(){
            $img = new grocery_CRUD();
            //INDICAR TABLA 
            $img->set_theme('bootstrap-v4'); 
            $img->set_table('galeria');
            $img->set_relation('usuarios_id_usuario','usuarios','nombre_usuario');
            $img->required_fields('imagen', 'status' , 'usuarios_id_usuario');
            $img->set_field_upload('imagen','site/template/images/galeria');
            //renderizar la tabla
            $imagen = $img->render();
            $this->load->view('admin/template/header_vw');
            $this->load->view('admin/images/lista_vw', (array)$imagen);
            $this->load->view('admin/template/footer_vw');

        }

        public function inscripciones(){
            $inscrip = new grocery_CRUD();
            //INDICAR TABLA 
            $inscrip->set_theme('bootstrap-v4'); 
            $inscrip->set_table('inscripciones');
            $inscrip->set_relation('usuarios_id_usuario','usuarios','nombre_usuario');
            $inscrip->set_relation('metodo_pago_id_metodo_pago','metodo_pago','nombre_pago');
            $inscrip->set_relation('tours_id_tour','tours','nombre');
            $inscrip->required_fields('email' , 'nombre', 'apellido', 'direccion','ciudad', 'estado', 'cp','telefono', 'metodo_pago_id_metodo_pago', 'usuarios_id_usuario','tours_id_tour');
            //renderizar la tabla
            $inscripcion = $inscrip->render();
            $this->load->view('admin/template/header_vw');
            $this->load->view('admin/inscripciones/lista_vw', (array)$inscripcion);
            $this->load->view('admin/template/footer_vw');

        }

        public function envio(){
            $sent = new grocery_CRUD();
            //INDICAR TABLA 
            $sent->set_table('metodo_envio');
            $sent->required_fields( 'nombre_envio', 'descripcion','status');
            //renderizar la tabla
            $envio = $sent->render();
            $this->load->view('admin/template/header_vw');
            $this->load->view('admin/envio/lista_vw', (array)$envio);
            $this->load->view('admin/template/footer_vw');

        }
        public function pago(){
            $pay = new grocery_CRUD();
            //INDICAR TABLA 
            $pay->set_theme('bootstrap-v4'); 
            $pay->set_table('metodo_pago');
            $pay->required_fields( 'nombre_pago', 'descripcion','status');
            //renderizar la tabla
            $pago = $pay->render();
            $this->load->view('admin/template/header_vw');
            $this->load->view('admin/pago/lista_vw', (array)$pago);
            $this->load->view('admin/template/footer_vw');

        }
         	 	 	 	 	 	 	 	 	 	 	 	 	 	 

        public function pedidos(){
            $pedi = new grocery_CRUD();
            //INDICAR TABLA 
            $pedi->set_theme('bootstrap-v4'); 
            $pedi->set_table('pedidos');
            $pedi->set_relation('usuarios_id_usuario','usuarios','nombre_usuario');
            $pedi->set_relation('metodo_pago_id_metodo_pago','metodo_pago','nombre_pago');
            $pedi->set_relation('metodo_envio_id_envio','metodo_envio','nombre_envio');
            $pedi->required_fields( 'productos', 'total','email','nombre', 'apellido','direccion','pais', 'estado','ciudad',
            'cp', 'telefono','status', 'metodo_envio_id_envio', 'metodo_pago_id_metodo_pago','usuarios_id_usuario');
            //renderizar la tabla
            $pedidos = $pedi->render();
            $this->load->view('admin/template/header_vw');
            $this->load->view('admin/pedidos/lista_vw', (array)$pedidos);
            $this->load->view('admin/template/footer_vw');

        }
        public function productos(){
            $products = new grocery_CRUD();
            //INDICAR TABLA 
            $products->set_theme('bootstrap-v4'); 
            $products->set_table('productos');
            $products->set_relation('usuarios_id_usuario','usuarios','nombre_usuario');
            $products->required_fields( 'nombre_producto', 'imagen_producto','descricion','precio', 'stock','status','usuarios_id_usuario');
            $products->set_field_upload('imagen_producto','site/template/images/productos');
            //renderizar la tabla
            $productos = $products->render();
            $this->load->view('admin/template/header_vw');
            $this->load->view('admin/products/lista_vw', (array)$productos);
            $this->load->view('admin/template/footer_vw');

        }
        public function tours(){
            $tour = new grocery_CRUD();
            //INDICAR TABLA 
            $tour->set_theme('bootstrap-v4'); 
            $tour->set_table('tours');
            $tour->set_relation('usuarios_id_usuario','usuarios','nombre_usuario');
            $tour->required_fields( 'nombre', 'imagen','descricion','cupo','status','precio','usuarios_id_usuario');
            $tour->set_field_upload('imagen','site/template/images/tours');
            //renderizar la tabla
            $turist = $tour->render();
            $this->load->view('admin/template/header_vw');
            $this->load->view('admin/tours/lista_vw', (array)$turist);
            $this->load->view('admin/template/footer_vw');

        }
        public function salir(){
            session_destroy();
            $data['productos'] = $this->Productos_Mdl->listar();
			$data['tours'] = $this->Tours_Mdl->listar();
			$data['galeria'] = $this->Galeria_Mdl->listar();
            $this->load->view('template/header');
            $this->load->view('front/index_vw',$data);
            $this->load->view('template/footer');
        }
} 
