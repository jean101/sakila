<?php

$nombrePagina = "pais";
require_once "funciones/ayudante.php";

require_once "modelos/modelo_pais.php";
require_once "modelos/modelo_ciudades.php";

$pais = $_POST["pais"] ?? "";

try {
    if (isset($_POST["guardarPais"])) {

        if (empty($pais)) {

            throw new Exception("El pais no puede estar vacio");
        }


        $datos = compact("pais");

        $paisesInsertados = insertarPaises($conexion, $datos);

        $_SESSION["mensaje"] = "Los datos fueron creados correctamente";

        if (!$paisesInsertados) {
            throw new Exception("ocurrio un error al tratar de insertar los datos del actor");
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
    }

} catch (Exception $e) {
    $error = $e->getMessage();

}


$paises = obtenerPaises($conexion);
$infoPaises = obtenerInfoPaises($conexion);


include_once "vistas/vista_pais.php";
