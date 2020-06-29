<?php

$nombrePagina = "Bienvenidos a la pagina principal";


$monto = $_GET ["monto"] ?? "";
$nombre = $_GET ["nombre"] ?? "";
$edad = $_GET ["edad"] ?? "";
$ciudad = $_GET ["ciudad"] ?? "";
$q = $_GET ["q"] ?? "";



include_once "vistas/vista_principal.php";