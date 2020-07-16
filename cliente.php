<?php

$nombrePagina = "cliente";
require_once "funciones/ayudante.php";
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_cliente.php";

$direcciones = obtenerDirecciones($conexion);
$tiendas = obtenerTiendas($conexion);

$infoClientes = obtenerInfoClientes($conexion);


$nombre = $_POST["nombre"] ?? "";
$nombre2 = $_POST["nombre2"] ?? "";
$email = $_POST["email"] ?? "";
$IDdireccion = $_POST["IDdireccion"] ?? "";
$activo = $_POST["activo"] ?? "";


if (isset($_POST["enviar informacion"])) {

}

include_once "vistas/vista_cliente.php";