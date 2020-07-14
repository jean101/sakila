<?php

$nombrePagina = "cliente";
require_once "funciones/ayudante.php";
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_cliente.php";

$direcciones = obtenerDirecciones($conexion);
$tiendas = obtenerTiendas($conexion);

$infoClientes = obtenerInfoClientes($conexion);


$nombre = $_GET["nombre"] ?? "";
$nombre2 = $_GET["nombre2"] ?? "";
$email = $_GET["email"] ?? "";
$IDdireccion = $_GET["IDdireccion"] ?? "";
$activo = $_GET["activo"] ?? "";


if (isset($_GET["enviar informacion"])) {

}

include_once "vistas/vista_cliente.php";