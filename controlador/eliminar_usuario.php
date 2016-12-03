<?php

require_once("modelo/Conectar.php");
require_once("modelo/usuario.php");
$user = new usuario();

if(isset($_POST['eliminar'])){
    
$dato = $_POST['dni'];
    
    $user->delete_usuario($dato);
}
