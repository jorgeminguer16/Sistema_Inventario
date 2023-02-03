<?php
//Llamada al modelo
require_once("models/VirtualModel.php");
$vr = new Virtual();
$existencias = $vr->index();
 
//Llamada a la vista
require_once("views/modalvirtual.php");
?>