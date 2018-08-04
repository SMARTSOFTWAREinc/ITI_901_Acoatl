<?php
class Inscripciones_Mdl extends CI_Model
{
    function __construct(){
        parent::__construct();
    }
 
    public function listar_inscripciones(){
        //get = "SELECT * FROM [tabla]
        $this->db->join('metodo_pago', 'inscripciones.metodo_pago_id_metodo_pago=metodo_pago.id_metodo_pago');
        $this->db->join('usuarios', 'inscripciones.usuarios_id_usuario=usuarios.id_usuario');
        $this->db->join('tours', 'inscripciones.tours_id_tour=tours.id_tour');
        $t = $this->db->get('inscripciones');
        return $t->result();
    }
    public function registro($email,$nombre,$apellido,$direccion,$ciudad,$estado,$cp,$telefono,$precio,$metodo_pago_id_metodo_pago,$usuarios_id_usuario,$tours_id_tour){
        $data= array(
            'email' => $email,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'direccion' => $direccion,
            'ciudad' => $ciudad,
            'estado' => $estado,
            'cp' => $cp,
            'telefono' => $telefono,
            'precio' => $precio,
            'metodo_pago_id_metodo_pago' => $metodo_pago_id_metodo_pago,
            'usuarios_id_usuario' => $usuarios_id_usuario,
            'tours_id_tour' => $tours_id_tour
            
        );
        $ins=$this->db->insert('inscripciones', $data); 
        if ($ins==true) {

            ?>
            <script type="text/javascript" src="<?=base_url();?>sweetalert2/dist/sweetalert2.min.js"></script>
            <script type="text/javascript" src="<?=base_url();?>sweetalert2/jquery.js"></script>
            <link rel="stylesheet" type="text/css" href="<?=base_url();?>sweetalert2/dist/sweetalert2.css">
          
            <script>
          
            $(document).ready(function(){
              swal({
                title: 'Se ha Registrado la Inscripción, gracias',
                text: "Ahora te mostraremos información imortante recuerda Guardarla!",
                type: 'success',
                showCancelButton: false,
                confirmButtonColor: '#f7952c',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar!'
              }).then(function(){
                window.location.href = '<?=base_url();?>index.php/Tour_vista/header_footer';
          
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
        function get_inscripciones(){
            $this->db->from('inscripciones');
            $this->db->order_by("nombre");
            $query = $this->db->get();
            return $query->result();  
      }
}