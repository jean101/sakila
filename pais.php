<?php

$nombrePagina = "pais";
require_once "funciones/ayudante.php";

require_once "modelos/modelo_pais.php";
require_once "modelos/modelo_ciudades.php";

$pais = $_POST["pais"] ?? "";
imprimirArray($_POST);

    try {
        if (isset($_POST["guardarPais"])) {

            if (empty($pais)) {

                throw new Exception("El pais no puede estar vacio");
            }


            $datos = compact("pais");

            $paisesInsertados = insertarPaises($conexion, $datos);

            if (!$paisesInsertados) {
                throw new Exception("ocurrio un error al tratar de insertar los datos del actor");
            }

        }
    } catch (Exception $e) {
        $error = $e->getMessage();

    }





$paises = obtenerPaises($conexion);
$infoPaises = obtenerInfoPaises($conexion);


include_once "vistas/vista_pais.php";
