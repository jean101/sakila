<?php
$nombrePagina = "Actor";
require_once "funciones/ayudante.php";
require_once "modelos/modelo_actor.php";

$nombreActor = $_POST["nombreActor"] ?? "";
$apellidoActor = $_POST["apellidoActor"] ?? "";

imprimirArray($_POST);
try {
    if (isset($_POST["Guardar_actor"])) {
        if (empty($nombreActor)) {

            throw new Exception("El nombre no puede estar vacio");
        }


        if (empty($apellidoActor)) {

            throw new Exception("El apellido no puede estar vacio");
        }

        $datos = compact("nombreActor", "apellidoActor");

        $actoresInsertados = insertarActores($conexion, $datos);

        if (!$actoresInsertados) {
            throw new Exception("ocurrio un error al tratar de insertar los datos del actor");
        }

    }
} catch (Exception $e) {
    $error = $e->getMessage();

}





$actores = obtenerActores($conexion);

include_once "vistas/vista_actor.php";