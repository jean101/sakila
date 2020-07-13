<?php

$nombrePagina = "ciudad";


require_once "modelos/modelo_pais.php";
require_once "modelos/modelo_ciudades.php";

$infoPaises = obtenerInfoPaises($conexion);


$ciudad = $_GET["ciudad"] ?? "";
$Pais = $_GET["Pais"] ?? "";

if (isset($_GET["guardar "])) {
    
    echo "guardar ...";
    
}




include_once "vistas/vista_ciudad.php";