<?php

$nombrePagina = "ciudad";

require_once "funciones/ayudante.php";
require_once "modelos/modelo_pais.php";
require_once "modelos/modelo_ciudades.php";

$ciudad = $_POST["ciudad"] ?? "";
$idCiudad = $_POST["idCiudad"] ?? "";
$Paises = $_POST["paises"] ?? "";



try {
    if (isset($_POST["guardar_informacion"])) {

        if (empty($ciudad)) {
            throw new Exception("La ciudad no puede estar vacia");
        }
        if (empty($paises)) {
            throw new Exception("El pais no puede estar vacio");
        }

        //preparar el array con los datos
        $datos = compact("ciudad");
        //insertar datos
        if (empty($idCiudad)) {
            $ciudadesInsertadas = insertarPaises($conexion, $datos);
            $_SESSION["mensaje"] = "todo esta insertado correctamente";
            if (!$ciudadesInsertadas) {
                throw new Exception("Los datos no se han insertado correctamente");
            }
        } else {
            $datos["idCiudad"]= $idCiudad;
            //actualizar datos
            $ciudadEditada= editarCiudad($conexion,$datos);
            $_SESSION["mensaje"] = " Datos modificados  correctamente";
            if (!$ciudadEditada){
                throw new Exception("ocurrio un error al modificar los datos");
            }
        }
//redireccionar la pagina
        redireccionar('ciudad.php');
    }

    if (isset($_POST["eliminarCiudad"])) {

        $idCiudad = $_POST["eliminarCiudad"] ?? "";

//validar datos
        if (empty($idCiudad)) {
            throw new Exception("El valor del id esta vacio");
        }
        $datos = compact("idCiudad");
//eliminar
        $eliminadoCiudades = eliminarCiudades($conexion, $datos);
        $_SESSION["mensaje"] = "Los datos fueron eliminados correctamente";

//Lanzar error

        if (!$eliminadoCiudades) {
            throw new Exception("Los datos no se eliminaron correctamente");
        }
//redireccionar la pagina
        redireccionar('ciudad.php');

    }
    if (isset($_POST["editarCiudad"])){

        $idCiudad = $_POST["editarCiudad"] ?? "";
        if (empty($idCiudad)){
            throw new Exception("El valor del id esta vacio");

        }
        $datos = compact("idCiudad");
        $resultado= obtenerCiudadPorId($conexion, $datos);
        $ciudad = $resultado["city"];
        $paises = $resultado["country_id"];


    }


} catch (Exception $e) {
    $error = $e->getMessage();
}


$infoPaises = obtenerInfoPaises($conexion);

include_once "vistas/vista_ciudad.php";