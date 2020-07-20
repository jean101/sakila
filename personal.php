<?php

$nombrePagina = "personal";
require_once "modelos/modelo_direccion.php";
require_once "modelos/modelo_tienda.php";
require_once "modelos/modelo_personal.php";
require_once "funciones/ayudante.php";

imprimirArray($_POST);

$nombre = $_POST["nombre"] ?? "";
$apellido = $_POST["apellido"] ?? "";
$idDireccion = $_POST["direccion"] ?? "";
$imagen = $_POST["imagen"] ?? "";
$email = $_POST["email"] ?? "";
$idTienda = $_POST["tienda"] ?? "";
if (isset($_POST["activo"])) {
    $activo = 1;

} else {
    $activo = 0;

}
$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";


try {
    if (isset ($_POST["guardar_usuario"])) {

        if (empty($nombre)) {
            throw new Exception("El nombre no puede estar vacio");
        }
        if (empty($apellido)) {
            throw new Exception("El apellido no puede estar vacio");
        }
        if (empty($idDireccion)) {
            throw new Exception("La direccion no puede estar vacia");
        }
        if (empty($imagen)) {
            // throw new Exception("La imagen no puede estar vacio");

        }
        if (empty($idTienda)) {
            throw new Exception("La tienda no puede estar vacio");
        }
        if (empty($activo)) {
            //throw new Exception("El activo no puede estar vacio");
        }
        if (empty($username)) {
            throw new Exception("el usuario no puede estar vacio");
        }
        if (empty($password)) {
            throw new Exception("La contrasena no puede estar vacia");
        }
        //preparar el array con los datos
        $datos = compact("nombre", "apellido", "idDireccion", "imagen", "email", "idTienda", "activo", "username", "password");
        //insertar datos
        $personalInsertado = insertarPersonal($conexion, $datos);
        $mensaje = "todo esta insertado correctamente";
        if (!$personalInsertado) {
            throw new Exception("Los datos no se han insertado correctamente");
        }
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}


$infoPersonales = obtenerInfoPersonales($conexion);
$direcciones = obtenerDirecciones($conexion);
$tiendas = obtenerTiendas($conexion);


include_once "vistas/vista_personal.php";