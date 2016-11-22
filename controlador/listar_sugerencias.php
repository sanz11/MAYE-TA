<?php

require_once("modelo/Conectar.php");
require_once("modelo/usuario.php");
$user = new sugerencias();
$valido="";


    $matrizSugerencias=$user->get_sugerencias();

if($matrizSugerencias){
    $valido="1";
}else{
     $valido="0";
}