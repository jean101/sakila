<?php

$nombrePagina = "cliente";

require_once "modelos/modelo_cliente.php";

$clientes = obtenerClientes($conexion);

$nombre = $_GET["nombre"] ?? "";
$nombre2 = $_GET["nombre2"] ?? "";
$email = $_GET["email"] ?? "";
$IDdireccion = $_GET["IDdireccion"] ?? "";
$activo = $_GET["activo"] ?? "";



if (isset($_GET["enviar informacion"])) {
    
}
    
include_once "vistas/vista_cliente.php";