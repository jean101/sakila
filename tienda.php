<?php

$nombrePagina = "tienda";

require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_gerente.php";
require_once "funciones/ayudante.php";


$manager = $_POST["manager"] ?? "";
$direccion = $_POST["direccion"] ?? "";


try {
    if (isset ($_POST["guardar_informacion"])) {

        if (empty($direccion)) {
            throw new Exception("La direccion no puede estar vacia");
        }
        if (empty($manager)) {
            throw new Exception("El manager  no puede estar vacio");
        }

        //preparar el array con los datos
        $datos = compact("direccion", "manager");
        //insertar datos
        $tiendasInsertadas = insertarTiendas($conexion, $datos);
        $_SESSION["mensaje"] = "todo esta insertado correctamente";
        if (!$tiendasInsertadas) {
            throw new Exception("Los datos no se han insertado correctamente");
        }
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}


$direcciones = obtenerDirecciones($conexion);
$gerentes = obtenerGerentes($conexion);
$infoTiendas = obtenerInformacionTienda($conexion);

$informacionTiendas = obtenerInformacionTienda($conexion);
include_once "vistas/vista_tienda.php";