<?php


$nombrePagina = "Direccion";
require_once "modelos/modelo_direccion.php";
require_once "funciones/ayudante.php";
require_once "modelos/modelo_ciudades.php";

$ciudades = obtenerCiudades($conexion);
$infoDirecciones = obtenerInfoDirecciones($conexion);

$direccion = $_POST["direccion"] ?? "";
$direccion2 = $_POST["direccion2"] ?? "";
$distrito = $_POST["distrito"] ?? "";
$ciudad = $_POST["ciudad"] ?? "";
$codigoPostal = $_POST["codigoPostal"] ?? "";
$telefono = $_POST["telefono"] ?? "";
$ubicacion = $_POST["ubicacion"] ?? "";


try {
    if (isset ($_POST["guardar_direccion"])) {

        if (empty($direccion)) {
            throw new Exception("La direccion no puede estar vacia");
        }
        if (empty($direccion2)) {
            throw new Exception("La direccion 2  no puede estar vacia");
        }
        if (empty($distrito)) {
            throw new Exception("El distrito no puede estar vacio");
        }
        if (empty($ciudad)) {
            throw new Exception("La ciudad no puede estar vacia");
        }
        if (empty($codigoPostal)) {
            throw new Exception("El codigo postal no puede estar vacio");
        }
        if (empty($telefono)) {
            throw new Exception("El numero de telefono  no puede estar vacio");
        }
        if (empty($ubicacion)) {
            throw new Exception("La ubicacion no puede estar vacia");
        }
        //preparar el array con los datos
        $datos = compact("direccion");
        //insertar datos
        $direccionesInsertadas = insertarDireccion($conexion, $datos);
        $_SESSION["mensaje"] = "todo esta insertado correctamente";
        if (!$direccionesInsertadas) {
            throw new Exception("Los datos no se han insertado correctamente");
        }
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}


include_once "vistas/vista_direccion.php";