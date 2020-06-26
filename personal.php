<?php

$nombrePagina = "personal";


$nombre = $_GET["nombre"] ?? "";
$nombre2 = $_GET["nombre2"] ?? "";
$IDdireccion = $_GET["IDdireccion"] ?? "";
$foto = $_GET["foto"] ?? "";
$email = $_GET["IDtienda"] ?? "";
$activo = $_GET["activo"] ?? "";
$username = $_GET["username"] ?? "";
$password = $_GET["password"] ?? "";


if (isset ($_GET["Enviar informacion"])) {

}



include_once "vistas/vista_personal.php";