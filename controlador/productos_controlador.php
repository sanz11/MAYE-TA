<?php
require_once("modelo/Conectar.php");
require_once("modelo/productos_modelo.php");

$producto= new productos_modelo();
$matrizProductos=$producto->get_productos();
$msn="hola";

require_once("vista/productos_view.php");
?>