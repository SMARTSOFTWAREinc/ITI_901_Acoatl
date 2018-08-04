<?php
class Pedidos_Mdl extends CI_Model
{
    function __construct(){
        parent::__construct();
    }
 
    public function listar(){
        //get = "SELECT * FROM [tabla]
        $t = $this->db->get('pedidos');
        return $t->result();
    }
    public function listar_pedidos(){
        //get = "SELECT * FROM [tabla]
        $this->db->join('metodo_pago', 'pedidos.metodo_pago_id_metodo_pago=metodo_pago.id_metodo_pago');
        $this->db->join('metodo_envio', 'pedidos.metodo_envio_id_envio =metodo_envio.id_metodo_envio');
        $t = $this->db->get('pedidos');
        return $t->result(); 
    }
    public function registro($productos,$total,$email,$nombre,$apellido,$direccion,$pais,$estado,$ciudad,$cp,$telefono,$status,$id_envio,$metodo_pago_id_metodo_pago,$usuarios_id_usuario){
        $data= array(
            'productos' => $productos,
            'total' => $total,
            'email' => $email,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'direccion' => $direccion,
            'pais' => $pais,
            'estado' => $estado,
            'ciudad' => $ciudad,
            'cp' => $cp,
            'telefono' => $telefono,
            'status' => $status,
            'metodo_envio_id_envio' => $id_envio,
            'metodo_pago_id_metodo_pago' => $metodo_pago_id_metodo_pago,
            'usuarios_id_usuario' => $usuarios_id_usuario
            
        );
        $ins=$this->db->insert('pedidos', $data);
        if ($ins==true) {

            ?>
            <script type="text/javascript" src="<?=base_url();?>sweetalert2/dist/sweetalert2.min.js"></script>
            <script type="text/javascript" src="<?=base_url();?>sweetalert2/jquery.js"></script>
            <link rel="stylesheet" type="text/css" href="<?=base_url();?>sweetalert2/dist/sweetalert2.css">
          
            <script>
          
            $(document).ready(function(){
              swal({
                title: 'Se ha Registrado la compra, gracias',
                text: "Ahora te mostraremos el contrato recuerda Guardarlo",
                type: 'success',
                showCancelButton: false,
                confirmButtonColor: '#f7952c',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar!'
              }).then(function(){
                window.location.href = '<?=base_url();?>index.php/catalogo/eliminarCarrito';
          
              });
            });
          </script>
          
          <?php
          }else{
          ?>
          <script>
          $(document).ready(function(){
                   swal({
                       title: 'Wow parece que algo va mal!',
                       text: 'Lo sentimos mucho!',
                       type: 'success'
                   }).then(function() {
                       window.location.href = '<?=base_url();?>index.php/Control/index';
                   });
               });
          </script> 
          <?php
          }
    }
    function get_pedidos(){
        $this->db->from('pedidos');
        $this->db->order_by("id_pedido");
        $query = $this->db->get();
        return $query->result();  
  }

      
} 