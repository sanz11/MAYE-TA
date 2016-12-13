<?php

require_once("../modelo/Conectar.php");
require_once("../modelo/usuario.php");
$user = new usuario();

if(isset($_POST['eliminar'])){
    
$dato = addslashes($_POST['dni']);
$tipo = addslashes($_POST['tipo']);
    
    echo $hola =$user->delete_usuario($dato);
    
    if($tipo==="superadmin"){
        header("location:../superadmin.php?pagina=usuarios.php");
    }else{
        header("location:../admin.php?pagina=usuarios.php");
    }
    
}
