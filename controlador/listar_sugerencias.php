<?php

require_once("modelo/Conectar.php");
require_once("modelo/usuario.php");
$user = new sugerencias();
$valido="";


    $matrizSugerencias=$user->get_sugerencias();
    $matrizSugerenciasval=$user->get_sugerenciasvalidas();

if($matrizSugerencias){
    $valido="1";
}else{
     $valido="0";
}
if($matrizSugerenciasval){
    $validoval="1";
}else{
     $validoval="0";
}