<?php


$nombrePagina = "Direccion";
require_once "modelos/modelo_direccion.php";
require_once "funciones/ayudante.php";
require_once "modelos/modelo_ciudades.php";

$ciudades = obtenerCiudades($conexion);
$infoDirecciones = obtenerInfoDirecciones($conexion);


$direccion = $_GET["direccion"] ?? "";
$direccion2 = $_GET["direccion2"] ?? "";
$distrito = $_GET["distrito"] ?? "";
$ciudad = $_GET["ciudad"] ?? "";
$codigoPostal = $_GET["codigoPostal"] ?? "";
$telefono = $_GET["telefono"] ?? "";
$direccion = $_GET["IDciudad"] ?? "";


if (isset ($_GET["guardar direccion"])) {

}


include_once "vistas/vista_direccion.php";