<?php
$nombrePagina = "pais";

require_once "modelos/modelo_pais.php";
require_once "modelos/modelo_ciudades.php";


$infoPaises = obtenerInfoPaises($conexion);

$pais = $_GET["Pais"] ?? "";

if (isset($_GET["guardar datos"])) {
    
   
}


$paises = obtenerPaises($conexion);



include_once "vistas/vista_pais.php";
