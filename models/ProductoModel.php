<?php
class Inventario {
    private $db;
    private $productos;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->productos=array();
    }

    public function index(){
        $consulta=$this->db->query("select * from cat_productos;");
        while($filas=$consulta->fetch_assoc()){
            $this->productos[]=$filas;
        }
        return $this->productos;
    }

    
}
?>