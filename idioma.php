<?php
$nombrePagina = "idioma";

require_once "modelos/modelo_idioma.php";
require_once "funciones/ayudante.php";
imprimirArray($_POST);
$lenguaje = $_POST["lenguaje"] ?? "";

    if (isset($_POST["guardar_lenguaje"])) {

        try {
            if (isset ($_POST["guardar_usuario"])) {

                if (empty($lenguaje)) {
                    throw new Exception("El nombre no puede estar vacio");
                }

                //preparar el array con los datos
                $datos = compact("lenguaje");
                //insertar datos
                $idiomaInsertado = insertarCategorias($conexion, $datos);
                $mensaje = "todo esta insertado correctamente";
                if (!$idiomaInsertado) {
                    throw new Exception("Los datos no se han insertado correctamente");
                }
            }
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
    }



$idiomas = obtenerIdiomas($conexion);


include_once "vistas/vista_idioma.php";