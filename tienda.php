<?php

$nombrePagina = "tienda";

require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_gerente.php";
require_once "funciones/ayudante.php";
$direcciones = obtenerDirecciones($conexion);
$gerentes = obtenerGerentes($conexion);
$infoTiendas = obtenerInformacionTienda($conexion);

$informacionTiendas = obtenerInformacionTienda($conexion);

$manager = $_POST["manager"] ?? "";
$direccion = $_POST["direccion"] ?? "";


    try {
        if (isset ($_POST["guardar_informacion"])) {

            if (empty($direcciones)) {
                throw new Exception("El manager no puede estar vacio");
            }
            if (empty($manager)) {
                throw new Exception("La direccion  no puede estar vacia");
            }

            //preparar el array con los datos
            $datos = compact("direcciones");
            //insertar datos
            $direccionesInsertadas = insertarDireccion($conexion, $datos);
            $mensaje = "todo esta insertado correctamente";
            if (!$direccionesInsertadas) {
                throw new Exception("Los datos no se han insertado correctamente");
            }
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }



include_once "vistas/vista_tienda.php";