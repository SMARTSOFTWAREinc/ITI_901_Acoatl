<?php
class MetodoPago_Mdl extends CI_Model
{
    function __construct(){
        parent::__construct();
    }
 
    public function listar(){
        //get = "SELECT * FROM [tabla]
        $t = $this->db->get('metodo_pago');
        return $t->result();
    }

      
} 