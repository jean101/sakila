<?php
require_once "modelos/modelo_pais.php";
$nombrePagina = "pais";

$paises = obtenerPaises($conexion);

$pais = $_GET["Pais"] ?? "";

if (isset($_GET["guardar pais"])) {
    
   
}





include_once "vistas/vista_pais.php";
