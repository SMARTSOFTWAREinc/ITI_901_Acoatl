<?php

class Usuario_Mdl extends CI_Model
{
    private $id_usuario;
    private $nombre_usuario;
    private $apellido;
    private $email;
    private $contrasena;
    private $status;
    private $privilegios;

    function __construct(){
        parent::__construct();
    }  

    public function get_id_usuario()
  {
    return $this->id_usuario;
  }

  public function set_id_usuario($user_id)
  {
    $this->id_usuario = $user_id;
  }
  public function get_nombre_usuario()
  {
    return $this->nombre_usuario;
  }

  public function set_nombre_usuario($user_name)
  {
    $this->nombre_usuario = $user_name;
  }
  public function get_apellido()
  {
    return $this->apellido;
  }

  public function set_apellido($apellido)
  {
    $this->apellido = $apellido;
  }
  public function get_email()
  {
    return $this->email;
  }

  public function set_email($email)
  {
    $this->email = $email;
  }
  public function get_contrasena()
  {
    return $this->contrasena;
  }

  public function set_contrasena($contrasena)
  {
    $this->contrasena = $contrasena;
  }
  public function get_status()
  {
    return $this->status;
  }

  public function set_status($status)
  {
    $this->status = $status;
  }
  public function get_privilegios()
  {
    return $this->privilegios;
  }

  public function set_privilegios($privilegios)
  {
    $this->privilegios = $privilegios;
  }
  public function listar(){
    //get = "SELECT * FROM [tabla]
    $t = $this->db->get('usuarios');
    return $t->result();
}
  public function registrar_usuario() 
  {
    $this->db->set('id_usuario', 0)
             ->set('nombre_usuario',$this->nombre_usuario)
             ->set('apellido',$this->apellido)
             ->set('email',$this->email)
             ->set('contrasena', "AES_ENCRYPT('{$this->contrasena}',
                    '{$this->email}')", FALSE)
             ->set('status',$this->status)
             ->set('privilegios',$this->privilegios);

$ins=$this->db->insert('usuarios');
if ($ins==true) {

  ?>
  <script type="text/javascript" src="<?=base_url();?>sweetalert2/dist/sweetalert2.min.js"></script>
  <script type="text/javascript" src="<?=base_url();?>sweetalert2/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>sweetalert2/dist/sweetalert2.css">

  <script> 

  $(document).ready(function(){
    swal({
      title: 'Registrando...',
      text: "Se ha registrado correctamente!",
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
}else{
?>
<script>
$(document).ready(function(){
         swal({
             title: 'Wow parece que algo va mal!',
             text: 'Lo sentimos mucho!',
             type: 'success'
         }).then(function() {
             window.location.href = '<?=base_url();?>index.php/Control/Reg';
         });
     });
</script>
<?php
}

}







  public function modificar()
  {
    $this->db->set('nombre_usuario',$this->nombre_usuario)
                ->set('apellido',$this->apellido)
                ->set('email',$this->email)
                ->set('contrasena', "AES_ENCRYPT('{$this->contrasena}','{$this->email}')", FALSE)
                ->set('status',$this->status)
                ->set('privilegios',$this->privilegios);
                    
                $this->db->where('id_usuario', $this->id_usuario);
                $this->db->update('usuarios');
    }

  public function listarUno(){
    $data = array('id_usuario'=> $this->id_usuario);
    $this->db->select("id_usuario,email,AES_DECRYPT(contrasena,email) as pass,nombre_usuario,apellido,status,privilegios");
    $this->db->where($data);
    $usu = $this->db->get('usuarios');

    return $usu->result();
  }



  public function login_user($email,$contrasena){

    $llave = $this->db->select("AES_ENCRYPT('$contrasena','$email') as pass")
                      ->get('usuarios');

    $miLlave = $llave->result();

    foreach($miLlave as $reg):
      $pass2 = $reg->pass;
    endforeach;

    $data = array(
        'email'     => $email,
        'contrasena' => $pass2
    );

    $this->db->where($data);  
    
    
    if($query=$this->db->get('usuarios'))
    {
    return $query->row_array();
      
    }
    else{
      return false;
    }
  }
  public function email_check($email)
  {

    $this->db->select('*');
    $this->db->from('usuarios');
    $this->db->where('email',$email);
    $query=$this->db->get();

    if($query->num_rows()>0){
      return false;
    }else{
      return true;
    }

  }

  public function desencriptar(){
    $password=$this->session->userdata('user_id');
    $this->db->select("AES_DECRYPT(contrasena,email) as pass");
    $this->db->where('id_usuario', $password);
    $usu = $this->db->get('usuarios');

    return $usu->result();
  }

  function get_usuarios(){
    $this->db->from('usuarios');
    $this->db->order_by("nombre_usuario");
    $query = $this->db->get();
    return $query->result();  
  }
    
      
}