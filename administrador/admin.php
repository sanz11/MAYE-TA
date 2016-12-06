<?php include "vista/cabecera2.php";?>

<?php
if(isset($_GET['pagina'])){
    if($_GET['pagina']=="bienvenido.php"||$_GET['pagina']=="ofertas.php"||$_GET['pagina']=="usuarios.php"||
       $_GET['pagina']=="sugerencias.php"||$_GET['pagina']=="oficios.php"){
        $url=$_GET['pagina'];
    }else{
         $url='bienvenido.php';
    }
}else{
    $url='bienvenido.php';
}

include "vista/".$url;
?>
<?php include "vista/pie.php";?>