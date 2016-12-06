<?php
require_once("modelo/Conectar.php");
require_once("modelo/usuario.php");

$oferta = new oferta();
$msbusqueda="";
$valido='0';
@$rubro =$_POST['rubro'];
@$defecha=$_POST['defecha'];
@$hastafecha=$_POST['hastafecha'];

if(isset($_POST['buscar'])){
    $matrizOferta = $oferta->search_oferta($rubro,$defecha,$hastafecha);
    $msbusqueda="Resultado de la busqueda de ". $rubro.", fecha: desde ".$defecha." hasta ".$hastafecha."";
    
}else if(isset($_POST['todo'])){
    $matrizOferta = $oferta->get_oferta();
    $msbusqueda="Se está mostrando TODA la lista";
}else{
    $matrizOferta = $oferta->get_oferta();
    $msbusqueda="Se está mostrando TODA la lista";
}

if($matrizOferta){
    $valido="1";
}else{
     $valido="0";
    $msbusqueda="";
}

?>