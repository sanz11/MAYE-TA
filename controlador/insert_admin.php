<?php
require_once('modelo/Conectar.php');
require_once('modelo/admin.php');

if(@$_POST["registrar"]){
$mensaje="";
@$dni=$_POST['dni'];
@$nombre=$_POST['nombre'];
@$apellidos=$_POST['apellidos'];
@$nick=$_POST['nick'];
@$correo=$_POST['correo'];
@$tipo=$_POST['tipo'];
@$password=$_POST['password'];
@$fecha=$_POST['fecha'];

$consulta= new admin();
    
$existe =$consulta->existeAdmin($dni);
    
if(!$existe){
    $mensaje=$consulta->insertarAdmin($dni,$nombre,$apellidos,$nick,$correo,$tipo,$password,$fecha);
}else{
    $mensaje="NO SE PUDO REGISTRAR, Ya existe un administrador con el mismo DNI";
}
	
}
?>