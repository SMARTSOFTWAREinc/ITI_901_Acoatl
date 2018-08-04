<?php
class Faqs_Mdl extends CI_Model
{
    function __construct(){
        parent::__construct();
    }
 
  

    public function listar(){
        //get = "SELECT * FROM [tabla]
        $t = $this->db->get('faqs');
        return $t->result();
    }
    public function listar_promos(){
        //get = "SELECT * FROM [tabla]
        $t = $this->db->get('promociones');
        return $t->result();
    }
    public function listar_datos(){
        //get = "SELECT * FROM [tabla]
        $t = $this->db->get('datos_interesantes');
        return $t->result();
    }

   
    
}