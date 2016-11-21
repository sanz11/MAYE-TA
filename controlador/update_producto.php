<?php
require_once('../modelo/Conectar.php');
require_once('../modelo/productos_modelo.php');

$mensaje="";
$resultado=null;
@$id=$_POST['id'];
@$articulo=$_POST['articulo'];

if(@$_POST["actualizar"]){
	$consulta= new productos_modelo();
	
	$resultado=$consulta->existeproducto($id);
	if ($resultado){
			$mensaje=$consulta->Update_productos($id,$articulo);
	}else {
			$mensaje="no existe un producto con dicho id";
		}
}

require_once('../vista/actualizar.php');

?>