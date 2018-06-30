<?php

class Usuario_Mdl extends CI_Model
{
    function __construct(){
        parent::__construct();
    } 
 
    public function login($email, $contrasena) {
        $data= array(
            'email' => $email,
            'contrasena' => md5($contrasena),
            'status' => 1
        );
        
        $this->db->where($data);
        $user = $this->db->get('usuarios');
        return $user->num_rows();
 
    
    }
    public function registro($nombre_usuario, $apellido,  $email, $contrasena, $status,$privilegios){
        $data= array(
            'nombre_usuario' => $nombre_usuario,
            'apellido' => $apellido,
            'email' => $email,
            'contrasena' => md5($contrasena),
            'status' => $status,
            'privilegios' => $privilegios
        );
        $this->db->insert('usuarios', $data);
    }
      
}