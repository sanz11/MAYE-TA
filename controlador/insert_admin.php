<?php
require_once('modelo/Conectar.php');
require_once('modelo/admin.php');

if(@$_POST["registrar"]){
$mensaje="";
@$dni=addslashes($_POST['dni']);
@$nombre=addslashes($_POST['nombre']);
@$apellidos=addslashes($_POST['apellidos']);
@$nick=addslashes($_POST['nick']);
@$correo=addslashes($_POST['correo']);
@$tipo=addslashes($_POST['tipo']);
@$pass=addslashes($_POST['password']);
@$fecha=addslashes($_POST['fecha']);

    $password=md5($pass);

$consulta= new admin();
    
$existe =$consulta->existeAdmin($dni,$correo);
    
if(!$existe){
    $mensaje=$consulta->insertarAdmin($dni,$nombre,$apellidos,$nick,$correo,$tipo,$password,$fecha);
}else{
    $mensaje="NO SE PUDO REGISTRAR, Ya existe un administrador con el mismo DNI o CORREO";
}
	
}
?>