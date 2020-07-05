<?php

$nombrePagina = "ciudad";


require_once "modelos/modelo_pais.php";

$paises = obtenerPaises($conexion);

$ciudad = $_GET["ciudad"] ?? "";
$Pais = $_GET["Pais"] ?? "";

if (isset($_GET["guardar "])) {
    
    echo "guardar ...";
    
}




include_once "vistas/vista_ciudad.php";