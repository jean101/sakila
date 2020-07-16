<?php

$nombrePagina = "personal";
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_personal.php";


$nombre = $_POST["nombre"] ?? "";
$nombre2 = $_POST["nombre2"] ?? "";
$direccion = $_POST["direccion"] ?? "";
$foto = $_POST["foto"] ?? "";
$email = $_POST["email"] ?? "";
$tienda = $_POST["tienda"] ?? "";
$activo = $_POST["activo"] ?? "";
$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";
$infoPersonales = obtenerInfoPersonales($conexion);
$direcciones = obtenerDirecciones($conexion);
$tiendas = obtenerTiendas($conexion);
if (isset ($_POST["Enviar informacion"])) {

}


include_once "vistas/vista_personal.php";