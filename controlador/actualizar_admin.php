<?php
require_once('modelo/Conectar.php');
require_once('modelo/admin.php');


if(@$_POST["actualizar"]){
    $consulta= new admin();

$mensaje="";
$resultado=null;
@$fotoac=addslashes($_POST['fotoactu']);
@$telefono=addslashes($_POST['telefono']);
@$correo=addslashes($_POST['email']);
@$dni=addslashes($_POST['dniactu']);

$foto=$_FILES["fotosub"]["name"];
$ruta=$_FILES["fotosub"]["tmp_name"];
$destino="im/admin/".$foto;
if($destino=="im/admin/"){
$mmsactualizar=$consulta->Update_admin($dni,$correo,$telefono,$fotoac);
}else{
copy($ruta,$destino);
$mmsactualizar=$consulta->Update_admin($dni,$correo,$telefono,$destino);
}}

?>