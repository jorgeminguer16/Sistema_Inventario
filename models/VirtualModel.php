<?php
class Virtual {
    private $db;
    private $vr;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->vr=array();
    }

    public function index(){
        $consulta=$this->db->query("SELECT existencias FROM existencias E INNER JOIN cat_almacenes R ON E.id_almacen = R.id_almacen INNER JOIN cat_productos C ON E.id_producto = C.id_producto WHERE R.tipo = 'Virtual' AND E.id_producto = 1;");
        while($filas=$consulta->fetch_assoc()){
            $this->vr[]=$filas;
        }
        return $this->vr;
    }

    
}
?>