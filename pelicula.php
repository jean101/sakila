<?php

$nombrePagina = "pelicula";
require_once "modelos/modelo_peliculas.php";

$peliculas = obtenerPeliculas($conexion);
$titulo = $_GET["titulo"] ?? "";
$lanzamiento = $_GET["lanzamiento"] ?? "";
$descripcion = $_GET["Descripcion"] ?? "";
$duracion = $_GET["duracion"] ?? "";
$arrendamiento = $_GET["arrendamiento"] ?? "";
$costo = $_GET["costo"] ?? "";
$rating = $_GET["rating"] ?? "";
$actores = $_GET["actores"] ?? "";

if (isset($_GET["guardar descripcion"])) {
    
    
    
}

include_once "vistas/vista_pelicula.php";