<?php

$nombrePagina = "tienda";
 
require_once "modelos/modelo_tienda.php";

$tiendas = obtenerTiendas($conexion);

$IDmanager = "IDmanager";
$IDdireccion = $_GET["IDdireccion"] ?? "";

if (isset ($_GET["guardar informacion"])) {

}



include_once "vistas/vista_tienda.php";