<?php

$nombrePagina = "ciudad";



$ciudad = $_GET["ciudad"] ?? "";
$idPais = $_GET["idPais"] ?? "";

if (isset($_GET["guardar datos"])) {
    
    echo "guardar ciudad...";
    
}




include_once "vistas/vista_ciudad.php";