<?php

require_once("../modelo/Conectar.php");
require_once("../modelo/usuario.php");
$user = new usuario();

if(isset($_POST['eliminar'])){
    
$dato = $_POST['dni'];
    
    echo $hola =$user->delete_usuario($dato);
    
    header("location:../superadmin.php?pagina=usuarios.php");
}
