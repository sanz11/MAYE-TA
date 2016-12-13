<?php 
require_once('../modelo/Conectar.php');
require_once('../modelo/usuario.php');

$sugerencia = new sugerencias();


if(isset($_POST['vali'])){
    $id = addslashes($_POST['idsu']);
    $tipo = addslashes($_POST['tipo']);
    $sugerencia->validar($id);
}

if(isset($_POST['terminado'])){
    $id = addslashes($_POST['idval']);
    $tipo = addslashes($_POST['tipo']);
    $sugerencia->observar($id);
}
if(isset($_POST['descartar'])){
    $id = addslashes($_POST['idsue']);
    $tipo = addslashes($_POST['tipo']);
    $sugerencia->observar($id);
}
if($tipo==="superadmin"){
       header("location:../superadmin.php?pagina=sugerencias.php");
    }else{
        header("location:../admin.php?pagina=sugerencias.php");
    }

?>