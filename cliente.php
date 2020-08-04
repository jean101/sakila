<?php

$nombrePagina = "cliente";
require_once "funciones/ayudante.php";
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_cliente.php";

$direcciones = obtenerDirecciones($conexion);
$tiendas = obtenerTiendas($conexion);

$infoClientes = obtenerInfoClientes($conexion);

$tienda = $_POST["tienda"] ?? "";
$nombre = $_POST["nombre"] ?? "";
$nombre2 = $_POST["nombre2"] ?? "";
$email = $_POST["email"] ?? "";
$IDdireccion = $_POST["IDdireccion"] ?? "";
$activo = $_POST["activo"] ?? "";


try {
    if (isset($_POST["guardar_datos"])) {

        if (empty($tienda)) {
            throw new Exception("El id tienda no puede estar vacio");
        }
        if (empty($nombre)) {
            throw new Exception("El nombre  no puede estar vacio");
        }
        if (empty($nombre2)) {
            throw new Exception("El segundo nombre no puede estar vacio");
        }
        if (empty($email)) {
            throw new Exception("El email no puede estar vacio");
        }
        if (empty($IDdireccion)) {
            throw new Exception("La direccion id  no puede estar vacia");
        }
        if (empty($activo)) {
            throw new Exception("El activo no puede estar vacio");
        }

        //preparar el array con los datos
        $datos = compact("tienda", "nombre", "nombre2", "email", "IDdireccion", "activo");
        //insertar datos
        $clientesInsertados = insertarClientes($conexion, $datos);
        $_SESSION["mensaje"] = "todo esta insertado correctamente";
        if (!$clientesInsertados) {
            throw new Exception("Los datos no se han insertado correctamente");
        }
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}


include_once "vistas/vista_cliente.php";