addslashes(<?php

require_once("modelo/Conectar.php");
require_once("modelo/usuario.php");
$user = new usuario();
$valido="";
$msbusqueda="";

if(isset($_POST['buscar'])){
    
$dato = addslashes($_POST['dato']);
$fecha = addslashes($_POST['fecha']);
    
    $matrizUsuario=$user->search_usuario($dato,$fecha);
    $msbusqueda="Resultados de busqueda por:". $dato . $fecha.".";
}
else if(isset($_POST['todo'])){
    $matrizUsuario=$user->get_usuario();
    $msbusqueda="Se está mostrando toda la lista";
}
else {
    $matrizUsuario=$user->get_usuario();
    $msbusqueda="Se está mostrando toda la lista";
}
if($matrizUsuario){
    $valido="1";
}else{
     $valido="0";
    $msbusqueda="";
}