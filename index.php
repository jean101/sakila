<?php
require_once "funciones/ayudante.php";
require_once "modelos/modelo_actor.php";
$nombrePagina = "Bienvenidos a la pagina principal";


$actores = obtenerActores($conexion);

$monto = $_GET ["monto"] ?? "";
$nombre = $_GET ["nombre"] ?? "";
$edad = $_GET ["edad"] ?? "";
$ciudad = $_GET ["ciudad"] ?? "";
$q = $_GET ["q"] ?? "";

if (isset($_GET["enviar datos"])) {

}
include_once "vistas/vista_principal.php";
