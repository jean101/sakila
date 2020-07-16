<?php

$nombrePagina = "tienda";

require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_gerente.php";
require_once "funciones/ayudante.php";
$direcciones = obtenerDirecciones($conexion);
$gerentes = obtenerGerentes($conexion);
$infoTiendas = obtenerInformacionTienda($conexion);

$informacionTiendas = obtenerInformacionTienda($conexion);

$manager = $_POST["manager"] ?? "";
$direccion = $_POST["direccion"] ?? "";


if (isset ($_POST["guardar informacion"])) {

}


include_once "vistas/vista_tienda.php";