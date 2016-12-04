<?php

require_once("../modelo/Conectar.php");
require_once("../modelo/admin.php");
$user = new admin();

if(isset($_POST['actualizar'])){
    
$dato = $_POST['dniad'];
$tipo = $_POST['tipo'];
    
    echo $hola =$user->Update_adminadmi($dato,$tipo);
    
    header("location:../superadmin.php?pagina=administradores.php");
}