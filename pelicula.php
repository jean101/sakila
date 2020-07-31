<?php

$nombrePagina = "pelicula";
require_once "funciones/ayudante.php";
require_once "modelos/modelo_idioma.php";
require_once "modelos/modelo_peliculas.php";


$titulo = $_POST["titulo"] ?? "";
$descripcion = $_POST["Descripcion"] ?? "";
$lanzamiento = $_POST["lanzamiento"] ?? "";
$anoLanzamiento = $_POST["anoLanzamiento"] ?? "";
$idioma1 = $_POST["idioma1"] ?? "";
$idioma2 = $_POST["idioma2"] ?? "";
$duracion = $_POST["duracion"] ?? "";
$arrendamiento = $_POST["arrendamiento"] ?? "";
$tamano = $_POST["tamaño"] ?? "";
$remplazo = $_POST["remplazo"] ?? "";
$rating = $_POST["rating"] ?? "";
$caracteristicas = $_POST["caracteristicas"] ?? "";

$actores = $_POST["actores"] ?? "";

try {
    if (isset($_POST["guardar_descripcion"])) {

        if (empty($titulo)) {
            throw new Exception("El titulo no puede estar vacio");
        }
        if (empty($descripcion)) {
            throw new Exception("La descripcion no puede estar vacia");
        }
        if (empty($lanzamiento)) {
            throw new Exception("El lanzamiento no puede estar vacia");
        }
        if (empty($idioma1)) {
            throw new Exception("El idioma no puede estar vacio");
        }
        if (empty($idioma2)) {
            throw new Exception("El segundo idioma no puede estar vacio");
        }
        if (empty($duracion)) {
            throw new Exception("La duracion no puede estar vacia");
        }
        if (empty($arrendamiento)) {
            throw new Exception("El arrendamiento no puede estar vacio");
        }
        if (empty($tamano)) {
            throw new Exception("El tamano no puede estar vacio");
        }
        if (empty($remplazo)) {
            throw new Exception("El remplazo  no puede estar vacio");
        }
        if (empty($rating)) {
            throw new Exception("El rating  no puede estar vacio");
        }
        if (empty($caracteristicas)) {
            throw new Exception("La caracteristicas no puede estar vacia");
        }
        //preparar el array con los datos
        $datos = compact("titulo", "lanzamiento", "descripcion", "idioma1", "idioma2", "duracion", "arrendamiento", "tamano", "remplazo", "rating", "caracteristicas");
        //insertar datos
        $peliculasInsertadas = insertarPeliculas($conexion, $datos);
        $mensaje = "todo esta insertado correctamente";
        if (!$peliculasInsertadas) {
            throw new Exception("Los datos no se han insertado correctamente");
        }
    }


} catch (Exception $e) {
    $error = $e->getMessage();
}

$infoPeliculas = obtenerInfoPeliculas($conexion);
$idiomas = obtenerIdiomas($conexion);

include_once "vistas/vista_pelicula.php";