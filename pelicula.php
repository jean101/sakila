<?php

$nombrePagina = "pelicula";

$titulo = $_GET["titulo"] ?? "";
$descripcion = $_GET["descripcion"] ?? "";
$lanzamiento = $_GET["lanzamiento"] ?? "";
$lenguaje = $_GET["lenguaje"] ?? "";
$duracion = $_GET["duracion"] ?? "";
$arrendamiento = $_GET["arrendamiento"] ?? "";
$longitud = $_GET["longitud"] ?? "";
$costo = $_GET["costo"] ?? "";
$rating = $_GET["rating"] ?? "";
$caracteristicas = $_GET["caracteristicas"] ?? "";

if (isset($_GET["guardar descripcion"])) {
    
    
    
}

include_once "vistas/vista_pelicula.php";