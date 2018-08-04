<?php
class Productos_Mdl extends CI_Model
{
    function __construct(){
        parent::__construct();
    }
 
  

    public function listar(){
        //get = "SELECT * FROM [tabla]
        $t = $this->db->get('productos');
        return $t->result();
    }

    public function listar_cuatro(){
        $this->db->order_by('id_productos','desc');
        $t = $this->db->query("SELECT * FROM productos LIMIT 4");
        
        return $t->result();
    }
    function get_productos(){
        $this->db->from('productos');
        $this->db->order_by("nombre_producto");
        $query = $this->db->get();
        return $query->result();  
  }


   
    
}