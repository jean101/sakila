<?php

$nombrePagina = "pais";

require_once "modelos/modelo_pais.php";
require_once "modelos/modelo_ciudades.php";

$pais = $_GET["Pais"] ?? "";

if (isset($_GET["guardar pais"])) {

echo "guardar pais";

}


$datos = compact("pais");

$insertado = insertarPaises($conexion , $datos);

if ($insertado) {
    echo "insertados correctamente";
}


$paises = obtenerPaises($conexion);
$infoPaises = obtenerInfoPaises($conexion);


include_once "vistas/vista_pais.php";
