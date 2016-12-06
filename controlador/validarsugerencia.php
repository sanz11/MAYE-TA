<?php 
require_once('../modelo/Conectar.php');
require_once('../modelo/usuario.php');

$sugerencia = new sugerencia();
$id = $_POST['id'];


if(isset($_POST['vali'])){
    $sugerencia->validar($id);
}

if(isset($_POST['descartar'])|| isset($_POST['terminado'])){
    $sugerencia->observar($id);
}

 header("location:../superadmin.php?pagina=sugerencias.php");
?>