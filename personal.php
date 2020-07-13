<?php

$nombrePagina = "personal";
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_personal.php";


$nombre = $_GET["nombre"] ?? "";
$nombre2 = $_GET["nombre2"] ?? "";
$direccion = $_GET["direccion"] ?? "";
$foto = $_GET["foto"] ?? "";
$email = $_GET["email"] ?? "";
$tienda = $_GET["tienda"] ?? "";
$activo = $_GET["activo"] ?? "";
$username = $_GET["username"] ?? "";
$password = $_GET["password"] ?? "";
$infoPersonales = obtenerInfoPersonales($conexion);
$direcciones = obtenerDirecciones($conexion);
$tiendas = obtenerTiendas($conexion);
if (isset ($_GET["Enviar informacion"])) {

}



include_once "vistas/vista_personal.php";