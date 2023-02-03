<?php
//Llamada al modelo
require_once("models/FisicoModel.php");
$fis = new Fisico();
$existencias = $fis->index();
 
//Llamada a la vista
require_once("views/modal.php");
?>