<?php

$nombrePagina = "pelicula";
require_once "funciones/ayudante.php";
require_once "modelos/modelo_idioma.php";
require_once "modelos/modelo_peliculas.php";

$infoPeliculas = obtenerInfoPeliculas($conexion);
$idiomas = obtenerIdiomas($conexion);

$titulo = $_GET["titulo"] ?? "";
$lanzamiento = $_GET["lanzamiento"] ?? "";
$descripcion = $_GET["Descripcion"] ?? "";
$idioma1 = $_GET["idioma1"] ?? "";
$idioma2= $_GET["idioma2"] ?? "";
$duracion = $_GET["duracion"] ?? "";
$arrendamiento = $_GET["arrendamiento"] ?? "";
$tamano = $_GET["tamaño"] ?? "";
$remplazo = $_GET["remplazo"] ?? "";
$rating = $_GET["rating"] ?? "";
$caracteristicas= $_GET["caracteristicas"] ?? "";

$actores = $_GET["actores"] ?? "";

if (isset($_GET["guardar descripcion"])) {


}

include_once "vistas/vista_pelicula.php";