<?php 
require_once('../modelo/Conectar.php');
require_once('../modelo/usuario.php');

$sugerencia = new sugerencias();



if(isset($_POST['vali'])){
    $id = $_POST['idsu'];
    $sugerencia->validar($id);
}

if(isset($_POST['terminado'])){
    $id = $_POST['idval'];
    $sugerencia->observar($id);
}
if(isset($_POST['descartar'])){
    $id = $_POST['idsue'];
    $sugerencia->observar($id);
}

 header("location:../superadmin.php?pagina=sugerencias.php");
?>