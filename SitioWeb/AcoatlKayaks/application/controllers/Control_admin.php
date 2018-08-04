<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Control_admin extends CI_Controller {
    function __construct(){
        parent:: __construct();
        $this->load->library('session');
       $valida= $this->session->userdata('user_privileges');
        if( $valida==1 ){
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
            $user -> unset_add ( ) ;
            $user->where ('privilegios' , '2' ) ;
            //INDICAR TABLA
            $user->set_theme('bootstrap-v4'); 
            $user->set_table('usuarios');
            $user->required_fields('nombre_usuario', 'apellido', 'email', 'contrasena', 'status', 'privilegios');
            //renderizar la tabla
            $user->unset_delete();
            $user-> columns (  'nombre_usuario','apellido','email','privilegios'  ) ;
            $user -> set_rules ( 'nombre_usuario' , 'Nombre de Usuario' , 'trim|required|alpha' ) ;
            $user -> set_rules ( 'apellido' , 'Apellido' , 'trim|required|alpha' ) ;
            $user -> set_rules ( 'email' , 'Email' , 'required|trim|valid_email|is_unique[usuarios.email]' ) ;
            $user -> set_rules ( 'status' , 'Estatus' , 'required|trim|numeric|max_length[1]' ) ;
            $user -> set_rules ( 'privilegios' , 'Privilegios' , 'required|trim|numeric' ) ;
            $user -> edit_fields ( 'nombre_usuario', 'apellido', 'status', 'privilegios') ;
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
            $fak-> columns (  'pregunta','respuesta','status','usuarios_id_usuario'  ) ;
            $fak -> set_rules ( 'pregunta' , 'Pregunta' , 'trim|required' ) ;
            $fak -> set_rules ( 'respuesta' , 'Respuesta' , 'trim|required' ) ;
            $fak -> set_rules ( 'status' , 'Estatus' , 'trim|required|numeric|max_length[1]' ) ;
            $fak -> set_rules ( 'usuarios_id_usuario' , 'Id del Usuario' , 'required' ) ;
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
            $contact-> columns (  'nombre_contacto', 'email' ,'mensaje', 'comentario','status', 'usuarios_id_usuario') ;
            $contact -> set_rules ( 'nombre_contacto' , 'Nombre de contacto' , 'trim|required|alpha' ) ;
            $contact -> set_rules ( 'email' , 'Email' , 'required|trim|valid_email' ) ;
            $contact -> set_rules ( 'mensaje' , 'Mensaje' , 'trim|required' ) ;
            $contact -> set_rules ( 'comentario' , 'Comentario' , 'trim|required' ) ;
            $contact -> set_rules ( 'status' , 'Estatus' , 'trim|required|numeric|max_length[1]' ) ;
            $contact -> set_rules ( 'usuarios_id_usuario' , 'Id del Usuario' , 'required' ) ;
            $contact -> unset_add ( ) ;
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
            $img-> columns (  'imagen', 'status' , 'usuarios_id_usuario') ;
            $img -> set_rules ( 'imagen' , 'Imagen' , 'required' ) ;
            $img -> set_rules ( 'status' , 'Estatus' , 'trim|required|numeric|max_length[1]' ) ;
            $img -> set_rules ( 'usuarios_id_usuario' , 'Id del Usuario' , 'required' ) ;
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
            $inscrip->required_fields('email' , 'nombre', 'apellido', 'direccion','ciudad', 'estado', 'cp','telefono','precio', 'metodo_pago_id_metodo_pago', 'usuarios_id_usuario','tours_id_tour');
            //renderizar la tabla
            $inscrip-> columns ( 'email' , 'nombre', 'apellido', 'direccion','ciudad', 'estado', 'cp','telefono', 'precio', 'metodo_pago_id_metodo_pago', 'usuarios_id_usuario','tours_id_tour') ;
            $inscrip -> set_rules ( 'email' , 'Email' , 'required|trim|valid_email' ) ;
            $inscrip -> set_rules ( 'nombre' , 'Nombre' , 'trim|required|alpha' ) ;
            $inscrip -> set_rules ( 'apellido' , 'Apellido' , 'trim|required|alpha' ) ;
            $inscrip -> set_rules ( 'direccion' , 'Dirección' , 'trim|required' ) ;
            $inscrip -> set_rules ( 'ciudad' , 'Ciudad' , 'trim|required|alpha' ) ;
            $inscrip -> set_rules ( 'estado' , 'Estado' , 'trim|required|alpha' ) ;
            $inscrip -> set_rules ( 'cp' , 'Código Postal' , 'trim|required|numeric|max_length[5]' ) ;
            $inscrip -> set_rules ( 'telefono' , 'Teléfono' , 'trim|required|numeric|min_length[10]|max_length[10]' ) ;
            $inscrip -> set_rules ( 'precio' , 'Precio' , 'trim|required|numeric' ) ;
            $inscrip -> set_rules ( 'metodo_pago_id_metodo_pago' , 'Método de Pago' , 'required' ) ;
            $inscrip -> set_rules ( 'usuarios_id_usuario' , 'Id del Usuario' , 'required' ) ;
            $inscrip -> unset_add ( ) ;
            $inscripcion = $inscrip->render();
            $this->load->view('admin/template/header_vw');
            $this->load->view('admin/inscripciones/lista_vw', (array)$inscripcion);
            $this->load->view('admin/template/footer_vw');

        }

        public function envio(){
            $sent = new grocery_CRUD();
            //INDICAR TABLA
            $sent->set_theme('bootstrap-v4'); 
            $sent->set_table('metodo_envio');
            $sent->required_fields( 'nombre_envio', 'descripcion','status');
            //renderizar la tabla
            $sent-> columns (  'nombre_envio', 'descripcion','status') ;
            $sent -> set_rules ( 'nombre_envio' , 'Nombre de Envío' , 'required|trim|alpha' ) ;
            $sent -> set_rules ( 'descripcion' , 'Descripción' , 'required|trim' ) ;
            $sent-> set_rules ( 'status' , 'Estatus' , 'trim|required|numeric|max_length[1]' ) ;
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
            $pay-> columns (  'nombre_pago', 'descripcion','status') ;
            $pay -> set_rules ( 'nombre_pago' , 'Nombre de Pago' , 'required|trim|alpha' ) ;
            $pay -> set_rules ( 'descripcion' , 'Descripción' , 'required|trim' ) ;
            $pay-> set_rules ( 'status' , 'Estatus' , 'trim|required|numeric|max_length[1]' ) ;
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
            $pedi-> columns ( 'productos', 'total','email','nombre', 'apellido','direccion','pais', 'estado','ciudad',
            'cp', 'telefono','status', 'metodo_envio_id_envio', 'metodo_pago_id_metodo_pago','usuarios_id_usuario') ;
            $pedi -> set_rules ( 'productos' , 'Productos' , 'required|trim' ) ;
            $pedi -> set_rules ( 'total' , 'Total' , 'trim|required|numeric' ) ;
            $pedi -> set_rules ( 'email' , 'Email' , 'required|trim|valid_email' ) ;
            $pedi -> set_rules ( 'nombre' , 'Nombre' , 'trim|required|alpha' ) ;
            $pedi -> set_rules ( 'apellido' , 'Apellido' , 'trim|required|alpha' ) ;
            $pedi -> set_rules ( 'direccion' , 'Dirección' , 'trim|required' ) ;
            $pedi -> set_rules ( 'pais' , 'Pais' , 'trim|required|alpha' ) ;
            $pedi -> set_rules ( 'estado' , 'Estado' , 'trim|required|alpha' ) ;
            $pedi -> set_rules ( 'ciudad' , 'Ciudad' , 'trim|required|alpha' ) ;
            $pedi -> set_rules ( 'cp' , 'Código Postal' , 'trim|required|numeric|min_length[5]|max_length[5]' ) ;
            $pedi -> set_rules ( 'telefono' , 'Teléfono' , 'trim|required|numeric|min_length[10]|max_length[10]' ) ;
            $pedi -> set_rules ( 'status' , 'Estatus' , 'trim|required|alpha' ) ;
            $pedi -> set_rules ( 'metodo_envio_id_envio' , 'Método de Envío' , 'required' ) ;
            $pedi -> set_rules ( 'metodo_pago_id_metodo_pago' , 'Método de Pago' , 'required' ) ;
            $pedi -> set_rules ( 'usuarios_id_usuario' , 'Id del Usuario' , 'required' ) ;
            $pedi -> unset_add ( ) ;
            $pedi -> unset_delete ( ) ;
            $pedi -> edit_fields ( 'status' ) ; 
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
            $products-> columns (  'nombre_producto', 'imagen_producto','descricion','precio', 'stock','status','usuarios_id_usuario') ;
            $products -> set_rules ( 'nombre_Producto' , 'Nombre de Pago' , 'required|trim' ) ;
            $products -> set_rules ( 'imagen_producto' , 'Imagen' , 'required' ) ;
            $products -> set_rules ( 'descricion' , 'Descripción' , 'required|trim' ) ;
            $products -> set_rules ( 'precio' , 'Precio' , 'trim|required|numeric' ) ;
            $products -> set_rules ( 'stock' , 'Stock' , 'trim|required|numeric' ) ;
            $products-> set_rules ( 'status' , 'Estatus' , 'trim|required|numeric|max_length[1]' ) ;
            $products -> set_rules ( 'usuarios_id_usuario' , 'Id del Usuario' , 'required' ) ;
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
            $tour->required_fields( 'nombre', 'imagen','descripcion','cupo','status','precio','usuarios_id_usuario');
            $tour->set_field_upload('imagen','site/template/images/tours');
            //renderizar la tabla
            $tour-> columns (  'nombre', 'imagen','descripcion','cupo','status','precio','usuarios_id_usuario') ;
            $tour -> set_rules ( 'nombre' , 'Nombre de Pago' , 'required|trim' ) ;
            $tour -> set_rules ( 'imagen' , 'Imagen' , 'required' ) ;
            $tour -> set_rules ( 'descripcion' , 'Descripción' , 'required|trim' ) ;
            $tour -> set_rules ( 'precio' , 'Precio' , 'trim|required|numeric' ) ;
            $tour -> set_rules ( 'cupo' , 'Cupo' , 'trim|required|numeric' ) ;
            $tour-> set_rules ( 'status' , 'Estatus' , 'trim|required|numeric|max_length[1]' ) ;
            $tour -> set_rules ( 'usuarios_id_usuario' , 'Id del Usuario' , 'required' ) ;
            $turist = $tour->render();
            $this->load->view('admin/template/header_vw');
            $this->load->view('admin/tours/lista_vw', (array)$turist);
            $this->load->view('admin/template/footer_vw');

        }
        public function promos(){
            $promos = new grocery_CRUD();
            //INDICAR TABLA 
            $promos->set_theme('bootstrap-v4'); 
            $promos->set_table('promociones');
            $promos->set_relation('promocion_id_usuario','usuarios','nombre_usuario');
            $promos->required_fields( 'nombre_promocion', 'imagen_promocion','descripcion_promocion','promocion_id_usuario');
            $promos->set_field_upload('imagen_promocion','site/template/images/promos');
            //renderizar la tabla
            $promos-> columns ( 'nombre_promocion', 'imagen_promocion','descripcion_promocion','promocion_id_usuario') ;
            $promos -> set_rules ( 'nombre_promocion' , 'Nombre de la Promoción' , 'required|trim' ) ;
            $promos -> set_rules ( 'imagen_promocion' , 'Imagen Promoción' , 'required' ) ;
            $promos -> set_rules ( 'descripcion_promocion' , 'Descripción' , 'required|trim' ) ;
            $promos -> set_rules ( 'promocion_id_usuario' , 'Id del Usuario' , 'required' ) ;
            $promociones = $promos->render();
            $this->load->view('admin/template/header_vw');
            $this->load->view('admin/promos/lista_vw', (array)$promociones);
            $this->load->view('admin/template/footer_vw');

        }
        public function datos(){
            $dato = new grocery_CRUD();
            //INDICAR TABLA 
            $dato->set_theme('bootstrap-v4'); 
            $dato->set_table('datos_interesantes');
            $dato->set_relation('dato_id_usuario','usuarios','nombre_usuario');
            $dato->required_fields( 'nombre_dato', 'imagen_dato','descripcion_dato','dato_id_usuario');
            $dato->set_field_upload('imagen_dato','site/template/images/datos');
            //renderizar la tabla
            $dato-> columns ( 'nombre_dato', 'imagen_dato','descripcion_dato','dato_id_usuario') ;
            $dato -> set_rules ( 'nombre_dato' , 'Nombre del Dato Interesante' , 'required|trim' ) ;
            $dato -> set_rules ( 'imagen_dato' , 'Imagen del Dato Interesante' , 'required' ) ;
            $dato -> set_rules ( 'descripcion_dato' , 'Descripción' , 'required|trim' ) ;
            $dato -> set_rules ( 'dato_id_usuario' , 'Id del Usuario' , 'required' ) ;
            $datos = $dato->render();
            $this->load->view('admin/template/header_vw');
            $this->load->view('admin/datos/lista_vw', (array)$datos);
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
            $this->load->view('admin/template/header_vw');
            $this->load->view('admin/cuenta/cuenta_vw',$data);
            $this->load->view('admin/template/footer_vw');
        }
}
        function bd_usuarios(){
        $this->load->model('Usuario_Mdl');
        $this->load->library('mydompdf'); 

        $data['usuarios'] = $this->Usuario_Mdl->get_usuarios();
        $html= $this->load->view('pdf/reporte_usuarios', $data, true);
        $this->mydompdf->load_html($html);
        $this->mydompdf->render();
            $this->mydompdf->set_base_path('.site/template/css/dompdf.css'); //agregar de nuevo el css
        $this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
        }

        function bd_pedidos(){
            $this->load->model('Pedidos_Mdl');
            $this->load->library('mydompdf');
    
            $data['pedidos'] = $this->Pedidos_Mdl->get_pedidos();
            $html= $this->load->view('pdf/reporte_pedidos', $data, true);
            $this->mydompdf->load_html($html);
            $this->mydompdf->render();
                $this->mydompdf->set_base_path('.site/template/css/dompdf.css'); //agregar de nuevo el css
            $this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
            }

            function bd_productos(){
            $this->load->model('Productos_Mdl');
            $this->load->library('mydompdf');
    
            $data['productos'] = $this->Productos_Mdl->get_productos();
            $html= $this->load->view('pdf/reporte_productos', $data, true);
            $this->mydompdf->load_html($html);
            $this->mydompdf->render();
                $this->mydompdf->set_base_path('.site/template/css/dompdf.css'); //agregar de nuevo el css
            $this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
            }

            function bd_inscripciones(){
            $this->load->model('Inscripciones_Mdl');
            $this->load->library('mydompdf');
    
            $data['inscripciones'] = $this->Inscripciones_Mdl->get_inscripciones();
            $html= $this->load->view('pdf/reporte_inscripciones', $data, true);
            $this->mydompdf->load_html($html);
            $this->mydompdf->render();
            $this->mydompdf->set_base_path('.site/template/css/dompdf.css'); //agregar de nuevo el css
            $this->mydompdf->stream("welcome.pdf", array("Attachment" => false));
            }

        
        
} 
