<?php
require_once "funciones/ayudante.php";
$nombrePagina = "Bienvenidos a la pagina principal";
require_once "config/conexion.php";




$monto = $_GET ["monto"] ?? "";
$nombre = $_GET ["nombre"] ?? "";
$edad = $_GET ["edad"] ?? "";
$ciudad = $_GET ["ciudad"] ?? "";
$q = $_GET ["q"] ?? "";

include_once "vistas/vista_principal.php";

$datos = $conexion->query("select *from actor;")->fetchAll();

imprimirArray($datos);
