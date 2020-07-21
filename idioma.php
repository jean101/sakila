<?php
$nombrePagina = "idioma";

require_once "modelos/modelo_idioma.php";
require_once "funciones/ayudante.php";
$lenguaje = $_POST["lenguaje"] ?? "";


        try {
            if (isset($_POST["guardar_lenguaje"])) {

                if (empty($lenguaje)) {
                    throw new Exception("El idioma no puede estar vacio");
                }

                //preparar el array con los datos
                $datos = compact("lenguaje");
                //insertar datos
                $idiomaInsertado = insertarIdioma($conexion, $datos);
                $mensaje = "todo esta insertado correctamente";
                if (!$idiomaInsertado) {
                    throw new Exception("Los datos no se han insertado correctamente");
                }
            }
        } catch (Exception $e) {
            $error = $e->getMessage();
        }




$idiomas = obtenerIdiomas($conexion);


include_once "vistas/vista_idioma.php";