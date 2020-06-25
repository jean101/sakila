<?php
$nombrePagina = "Direccion";

$direccion = $_GET["direccion"] ?? "";
$direccion2 = $_GET["direccion2"] ?? "";
$distrito = $_GET["distrito"] ?? "";
$ciudad = $_GET["ciudad"] ?? "";
$codigoPostal = $_GET["codigoPostal"] ?? "";
$telefono = $_GET["telefono"] ?? "";

if (isset ($_GET["guardar direccion"])) {

}


include_once "vistas/vista_direccion.php";