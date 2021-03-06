<?php

$nombrePagina = "Actor";
require_once "funciones/ayudante.php";
require_once "modelos/modelo_actor.php";


$nombreActor = $_POST["nombreActor"] ?? "";
$apellidoActor = $_POST["apellidoActor"] ?? "";
$idActor = $_POST["idActor"] ?? "";


try {
    if (isset($_POST["Guardar_actor"])) {
        if (empty($nombreActor)) {

            throw new Exception("El nombre no puede estar vacio");
        }


        if (empty($apellidoActor)) {

            throw new Exception("El apellido no puede estar vacio");
        }

        $datos = compact("nombreActor", "apellidoActor");

        if (empty($idActor)) {
            $actoresInsertados = insertarActores($conexion, $datos);
            $_SESSION["mensaje"] = "Los datos fueron creados correctamente";
            if (!$actoresInsertados) {
                throw new Exception("ocurrio un error al tratar de insertar los datos del actor");
            }
        } else {
            $datos["idActor"]= $idActor;
            //actualizar datos
            $actorEditado= editarActor($conexion,$datos);
            $_SESSION["mensaje"] = " Datos modificados  correctamente";
            if (!$actorEditado){
                throw new Exception("ocurrio un error al modificar los datos");
            }
        }
        //redireccionar la pagina
        redireccionar('actor.php');


    }
    if (isset($_POST["eliminarActor"])) {

        $idActor = $_POST["eliminarActor"] ?? "";

//validar datos
        if (empty($idActor)) {
            throw new Exception("El valor del id esta vacio");
        }
        $datos = compact("idActor");

//eliminar
        $eliminado = eliminarActores($conexion, $datos);
        $_SESSION["mensaje"] = "Los datos fueron eliminados correctamente";

//Lanzar error

        if (!$eliminado) {
            throw new Exception("Los datos no se eliminaron correctamente");
        }
        //redireccionar la pagina
        redireccionar('actor.php');

    }
    if (isset($_POST["editarActor"])){

        $idActor = $_POST["editarActor"] ?? "";
        if (empty($idActor)){
            throw new Exception("El valor del id esta vacio");

        }

        $datos = compact("idActor");
        $resultado= obtenerActorPorId($conexion, $datos);
        $nombreActor = $resultado["first_name"];
        $apellidoActor =$resultado["last_name"];

        imprimirArray($resultado);

    }


} catch (Exception $e) {
    $error = $e->getMessage();

}


$actores = obtenerActores($conexion);

include_once "vistas/vista_actor.php";