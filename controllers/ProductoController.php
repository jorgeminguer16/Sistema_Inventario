<?php
//Llamada al modelo
require_once("models/ProductoModel.php");
$pro = new Inventario();
$datos = $pro->index();
 
//Llamada a la vista
require_once("views/catalogo.php");
?>
