<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Catalogo extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('catalogo_model');
    }
    
    function index()
    {
    }
  
    function agregarProducto()
    {
        $privilegios= $this->session->userdata('user_privileges');
        $id= $this->session->userdata('user_id');
    if($privilegios != 1){

    
        if($id){
            $id = $this->input->post('id');
            $producto = $this->catalogo_model->porId($id);
            foreach ($producto as $product) {
                $data[] = $product;
            }
            $cantidad = 1;
            //obtenemos el contenido del carrito
            $carrito = $this->cart->contents();
     
            foreach ($carrito as $item) {
                //si el id del producto es igual que uno que ya tengamos
                //en la cesta le sumamos uno a la cantidad
    //            if ($item['id'] == $id) {
    //                $cantidad = $item['qty'] + 1;
    //            }
            }
            //cogemos los productos en un array para insertarlos en el carrito
            $insert = array(
                'id' => $id,
                'qty' => $cantidad,
                'price' => $product->precio,
                'name' => $product->nombre_producto,
                'imagen' => $product->imagen_producto
            );
            //si hay opciones creamos un array con las opciones y lo metemos
            //en el carrito
           
            //insertamos al carrito
            $this->cart->insert($insert);
            //cogemos la url para redirigir a la página en la que estabamos
            $uri = $this->input->post('uri');
            
            //redirigimos mostrando un mensaje con las sesiones flashdata
            //de codeigniter confirmando que hemos agregado el producto
            $this->session->set_flashdata('agregado', 'El producto fue agregado correctamente');
            redirect('../index.php/control/index2/2/pagina/'.$uri, 'refresh');
        }else{
            ?>
            <script type="text/javascript" src="<?=base_url();?>sweetalert2/dist/sweetalert2.min.js"></script>
            <script type="text/javascript" src="<?=base_url();?>sweetalert2/jquery.js"></script>
            <link rel="stylesheet" type="text/css" href="<?=base_url();?>sweetalert2/dist/sweetalert2.css">
          
            <script>
          
            $(document).ready(function(){
              swal({
                title: 'Inicia Sesión...',
                text: "Necesita iniciar sesión primero!",
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

        }else{
            ?>
            <script type="text/javascript" src="<?=base_url();?>sweetalert2/dist/sweetalert2.min.js"></script>
            <script type="text/javascript" src="<?=base_url();?>sweetalert2/jquery.js"></script>
            <link rel="stylesheet" type="text/css" href="<?=base_url();?>sweetalert2/dist/sweetalert2.css">
          
            <script>
          
            $(document).ready(function(){
              swal({
                title: 'Eres un Administrador...',
                text: "No puede realizar compras!",
                type: 'success',
                showCancelButton: false,
                confirmButtonColor: '#f7952c',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar!'
              }).then(function(){
                window.location.href = '<?=base_url();?>index.php/Control/index';
          
              });
            });
          </script>
          <?php
        }
    }
      
     
    function eliminarProducto($rowid) 
    {
        //para eliminar un producto en especifico lo que hacemos es conseguir su id
        //y actualizarlo poniendo qty que es la cantidad a 0
        $producto = array(
            'rowid' => $rowid,
            'qty' => 0
        );
        //después simplemente utilizamos la función update de la librería cart
        //para actualizar el carrito pasando el array a actualizar
        $this->cart->update($producto);
        
        $this->session->set_flashdata('productoEliminado', 'El producto fue eliminado correctamente');
        redirect('../index.php/control/index2/2', 'refresh');
    }
    
    function eliminarCarrito() {
        $this->cart->destroy();
        $this->session->set_flashdata('destruido', 'El carrito fue eliminado correctamente');
        redirect('../index.php/control/index2/2', 'refresh');
    }
    function eliminarCarrito2() {
        $this->cart->destroy();
        $this->session->set_flashdata('destruido', 'El carrito fue eliminado correctamente');
        redirect('../index.php/Pedidos/header_footer', 'refresh');
    }
    function carrito(){

        $id= $this->session->userdata('user_id');   
        if($id){ 
            $this->load->view('template/header2');
            $this->load->view('front/carrito_vw');
            $this->load->view('template/footer');
            
        }else{
            redirect('control/login');
        } 
    
       
    }
}
