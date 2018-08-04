<?php

class Contacto_Mdl extends CI_Model
{
    function __construct(){
        parent::__construct();
    } 
 
    
    public function registro($nombre_contacto,  $email, $mensaje, $comentario, $status, $usuarios_id_usuario){
        $data= array(
            'nombre_contacto' => $nombre_contacto,
            'email' => $email,
            'mensaje' => $mensaje,
            'comentario' => $comentario,
            'status' => $status,
            'usuarios_id_usuario' => $usuarios_id_usuario
        );
       $ins=$this->db->insert('contacto', $data);

        if ($ins==true) {

            ?>
            <script type="text/javascript" src="<?=base_url();?>sweetalert2/dist/sweetalert2.min.js"></script>
            <script type="text/javascript" src="<?=base_url();?>sweetalert2/jquery.js"></script>
            <link rel="stylesheet" type="text/css" href="<?=base_url();?>sweetalert2/dist/sweetalert2.css">
          
            <script>
          
            $(document).ready(function(){
              swal({
                title: 'Guardando...',
                text: "Se ha Guardado correctamente, atenderemos tu duda lo mas pronto posible!",
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
      
}