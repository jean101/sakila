<?php
$nombrePagina = "Actor";

require_once "modelos/modelo_actor.php";

$nombreActor = $_GET["nombreActor"] ?? "";
$apellidoActor = $_GET["apellidoActor"] ?? "";

if (isset($_GET["guardar actor"])) {
    
    
    
}

$actores = obtenerActores($conexion);

include_once "vistas/vista_actor.php";