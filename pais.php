<?php

$nombrePagina = "pais";
require_once "funciones/ayudante.php";

require_once "modelos/modelo_pais.php";
require_once "modelos/modelo_ciudades.php";

$idPais = $_POST["idPais"] ?? "";
$pais = $_POST["pais"] ?? "";



try {
    if (isset($_POST["guardarPais"])) {

        if (empty($pais)) {

            throw new Exception("El pais no puede estar vacio");
        }


        $datos = compact("pais");

        if (empty($idPais)) {
            $paisesInsertados = insertarPaises($conexion, $datos);
            $_SESSION["mensaje"] = "Los datos fueron creados correctamente";
            if (!$paisesInsertados) {
                throw new Exception("ocurrio un error al tratar de insertar los datos del actor");
            }
        } else {
            $datos["idPais"]= $idPais;
            //actualizar datos
            $paisEditado= editarPais($conexion,$datos);
            $_SESSION["mensaje"] = " Datos modificados  correctamente";
            if (!$paisEditado){
                throw new Exception("ocurrio un error al modificar los datos");
            }
        }
        //redireccionar la pagina
        redireccionar('pais.php');

    }
    if (isset($_POST["eliminarPais"])) {

        $idPais = $_POST["eliminarPais"] ?? "";

//validar datos
        if (empty($idPais)) {
            throw new Exception("El valor del id esta vacio");
        }
        $datos = compact("idPais");

//eliminar
        $eliminadoPaises = eliminarPaises($conexion, $datos);
        $_SESSION["mensaje"] = "Los datos fueron eliminados correctamente";

//Lanzar error

        if (!$eliminadoPaises) {
            throw new Exception("Los datos no se eliminaron correctamente");
        }
//redireccionar la pagina
        redireccionar('pais.php');

    }
        if (isset($_POST["editarPais"])){

            $idPais = $_POST["editarPais"] ?? "";
            if (empty($idPais)){
                throw new Exception("El valor del id esta vacio");

            }
            $datos = compact("idPais");
            $resultado= obtenerPaisPorId($conexion, $datos);
            $pais = $resultado["country"];

        }


} catch (Exception $e) {
    $error = $e->getMessage();

}


$paises = obtenerPaises($conexion);


include_once "vistas/vista_pais.php";
