<?php
$nombrePagina = "Actor";

require_once "modelos/modelo_actor.php";

$nombreActor = $_GET["nombreActor"] ?? "";
$apellidoActor = $_GET["apellidoActor"] ?? "";

if (isset($_GET["guardar actor"])) {

}

$datos = compact( "nombreActor", "apellidoActor");

$insertado = insertarActores($conexion , $datos);

if ($insertado) {
    echo "insertados correctamente";
}

$actores = obtenerActores($conexion);

include_once "vistas/vista_actor.php";