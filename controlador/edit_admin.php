<?php

require_once("../modelo/Conectar.php");
require_once("../modelo/admin.php");
$user = new admin();

if(isset($_POST['actualizar'])){
    
$dato = addslashes($_POST['dniad']);
$tipo = addslashes($_POST['tipo']);
    
$user->Update_adminadmi($dato,$tipo);
    
    header("location:../superadmin.php?pagina=administradores.php");
}