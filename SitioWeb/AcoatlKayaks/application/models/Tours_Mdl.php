<?php
class Tours_Mdl extends CI_Model
{
    function __construct(){
        parent::__construct();
    }
 
    public function listar(){
        //get = "SELECT * FROM [tabla]
        $t=$this->db->get('tours');
        return $t->result();
    }

      
} 