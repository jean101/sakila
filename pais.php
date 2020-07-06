<?php
$nombrePagina = "pais";

require_once "modelos/modelo_pais.php";

$pais = $_GET["Pais"] ?? "";

if (isset($_GET["guardar datos"])) {
    
   
}


$paises = obtenerPaises($conexion);



include_once "vistas/vista_pais.php";
