<?php

$nombrePagina = "pelicula";
require_once "funciones/ayudante.php";
require_once "modelos/modelo_idioma.php";
require_once "modelos/modelo_peliculas.php";

$infoPeliculas = obtenerInfoPeliculas($conexion);
$idiomas = obtenerIdiomas($conexion);

$titulo = $_POST["titulo"] ?? "";
$lanzamiento = $_POST["lanzamiento"] ?? "";
$descripcion = $_POST["Descripcion"] ?? "";
$idioma1 = $_POST["idioma1"] ?? "";
$idioma2= $_POST["idioma2"] ?? "";
$duracion = $_POST["duracion"] ?? "";
$arrendamiento = $_POST["arrendamiento"] ?? "";
$tamano = $_POST["tamaño"] ?? "";
$remplazo = $_POST["remplazo"] ?? "";
$rating = $_POST["rating"] ?? "";
$caracteristicas= $_POST["caracteristicas"] ?? "";

$actores = $_POST["actores"] ?? "";

if (isset($_POST["guardar descripcion"])) {


}

include_once "vistas/vista_pelicula.php";