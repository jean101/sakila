<?php
require_once "funciones/ayudante.php";
require_once "modelos/modelo_actor.php";
$nombrePagina = "Bienvenidos a la pagina principal";


$actores = obtenerActores($conexion);

$monto = $_POST ["monto"] ?? "";
$nombre = $_POST ["nombre"] ?? "";
$edad = $_POST ["edad"] ?? "";
$ciudad = $_POST ["ciudad"] ?? "";
$q = $_POST ["q"] ?? "";

if (isset($_POST["enviar datos"])) {

}
include_once "vistas/vista_principal.php";
