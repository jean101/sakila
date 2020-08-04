<?php

$nombrePagina = "ciudad";


require_once "modelos/modelo_pais.php";
require_once "modelos/modelo_ciudades.php";

$ciudad = $_POST["ciudad"] ?? "";
$Paises = $_POST["Pais"] ?? "";

try {
    if (isset($_POST["guardar_informacion"])) {

        if (empty($ciudad)) {
            throw new Exception("La ciudad no puede estar vacia");
        }
        if (empty($pais)) {
            throw new Exception("El pais no puede estar vacio");
        }

        //preparar el array con los datos
        $datos = compact("ciudad");
        //insertar datos
        $ciudadesInsertadas = insertarPaises($conexion, $datos);
        $_SESSION["mensaje"] = "todo esta insertado correctamente";
        if (!$ciudadesInsertadas) {
            throw new Exception("Los datos no se han insertado correctamente");
        }
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}


$infoPaises = obtenerInfoPaises($conexion);

include_once "vistas/vista_ciudad.php";