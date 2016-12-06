<?php 
require_once('../modelo/Conectar.php');
require_once('../modelo/usuario.php');

@$oferta = new oferta();
@$email = $_POST['email'];
@$id = $_POST['id'];
@$emailobs = $_POST['emailobs'];
@$idobs = $_POST['idobs'];


if(isset($_POST['publicar'])){
    $oferta->publicar($id);
}

if(isset($_POST['observar'])){
    $oferta->observar($idobs);
}

 header("location:../superadmin.php?pagina=ofertas.php");
?>