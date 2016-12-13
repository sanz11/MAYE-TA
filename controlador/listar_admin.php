addslashes(<?php
require_once("modelo/Conectar.php");
require_once("modelo/admin.php");

$admin= new admin();
$msbusqueda="";

@$dato=addslashes($_POST['dato']);
@$defecha=addslashes($_POST['defecha']);
@$hastafecha=addslashes($_POST['hastafecha']);

if(@$_POST["buscar"]){

$matrizAdmin=$admin->buscarAdmin($dato,$defecha,$hastafecha);
$msbusqueda="RESULTADOS DE: ".$dato.", fecha: desde ".$defecha." hasta ".$hastafecha."";
}else if(@$_POST["todo"]){
    $matrizAdmin=$admin->listarAdmin();
    $msbusqueda="SE ESTA MOSTRANDO LA LISTA COMPLETA";
}else{
    $matrizAdmin=$admin->listarAdmin();
    $msbusqueda="SE ESTA MOSTRANDO LA LISTA COMPLETA";
}

if($matrizAdmin){
    $msmlista="valido";
}else{
    $msmlista="novalido";
    $msbusqueda="";
}

?>