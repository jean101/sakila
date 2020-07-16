<?php

$nombrePagina = "ciudad";


require_once "modelos/modelo_pais.php";
require_once "modelos/modelo_ciudades.php";

$infoPaises = obtenerInfoPaises($conexion);


$ciudad = $_POST["ciudad"] ?? "";
$Pais = $_POST["Pais"] ?? "";

if (isset($_POST["guardar "])) {

    echo "guardar ...";

}


include_once "vistas/vista_ciudad.php";