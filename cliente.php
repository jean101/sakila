<?php

$nombrePagina = "cliente";

$nombre = $_GET["nombre"] ?? "";
$nombre2 = $_GET["nombre2"] ?? "";
$email = $_GET["email"] ?? "";
$IDdireccion = $_GET["IDdireccion"] ?? "";
$activo = $_GET["activo"] ?? "";



if (isset($_GET["enviar informacion"])) {
    
}
    
include_once "vistas/vista_cliente.php";