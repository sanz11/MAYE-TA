<?php

require_once("../modelo/Conectar.php");
require_once("../modelo/admin.php");
$user = new admin();

if(isset($_POST['eliminar'])){
    
$dato = $_POST['dni'];
    
    echo $hola =$user->eliminar_admin($dato);
    
    header("location:../superadmin.php?pagina=administradores.php");
}