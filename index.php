<?php
require_once "funciones/ayudante.php";


require_once "modelos/modelo_actor.php";


$actores =  $obtenerActores($conexion);
 
$nombrePagina = "Bienvenidos a la pagina principal";

$monto = $_GET ["monto"] ?? "";
$nombre = $_GET ["nombre"] ?? "";
$edad = $_GET ["edad"] ?? "";
$ciudad = $_GET ["ciudad"] ?? "";
$q = $_GET ["q"] ?? "";
