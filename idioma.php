<?php
$nombrePagina = "idioma";

require_once "modelos/modelo_idioma.php";

$idiomas = obtenerIdiomas($conexion);

$lenguaje = $_POST["lenguaje"] ?? "";

if (isset($_POST["guardar lenguaje"])) {


}

$idiomas = obtenerIdiomas($conexion);


include_once "vistas/vista_idioma.php";