<?php
$nombrePagina = "idioma";

require_once "modelos/modelo_idioma.php";

$idiomas = obtenerIdiomas($conexion);

$lenguaje = $_GET["lenguaje"] ?? "";

if (isset($_GET["guardar lenguaje"])) {
    
    
    
}



include_once "vistas/vista_idioma.php";