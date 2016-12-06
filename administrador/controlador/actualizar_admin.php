<?php
require_once('modelo/Conectar.php');
require_once('modelo/admin.php');


if(@$_POST["actualizar"]){
    $consulta= new admin();

$mensaje="";
$resultado=null;
@$fotoac=$_POST['fotoactu'];
@$telefono=$_POST['telefono'];
@$correo=$_POST['email'];
@$dni=$_POST['dniactu'];

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