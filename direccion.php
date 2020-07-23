<?php


$nombrePagina = "Direccion";
require_once "modelos/modelo_direccion.php";
require_once "funciones/ayudante.php";
require_once "modelos/modelo_ciudades.php";

$ciudades = obtenerCiudades($conexion);
$infoDirecciones = obtenerInfoDirecciones($conexion);

$direccion = $_POST["direccion"] ?? "";
$direccion2 = $_POST["direccion2"] ?? "";
$distrito = $_POST["distrito"] ?? "";
$ciudad = $_POST["ciudad"] ?? "";
$codigoPostal = $_POST["codigoPostal"] ?? "";
$telefono = $_POST["telefono"] ?? "";
$ubicacion = $_POST["ubicacion"] ?? "";


if (isset ($_POST["guardar direccion"])) {

}


include_once "vistas/vista_direccion.php";