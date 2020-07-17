<?php

$nombrePagina = "pais";
require_once "funciones/ayudante.php";

require_once "modelos/modelo_pais.php";
require_once "modelos/modelo_ciudades.php";

$pais = $_POST["pais"] ?? "";
imprimirArray($_POST);
if (isset($_POST["guardarPais"])) {

echo "guardarPais";

    $datos = compact("pais");

    $insertado = insertarPaises($conexion , $datos);

    if ($insertado) {
        echo "insertados correctamente";
    }
}





$paises = obtenerPaises($conexion);
$infoPaises = obtenerInfoPaises($conexion);


include_once "vistas/vista_pais.php";
