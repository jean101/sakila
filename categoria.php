<?php

$nombrePagina = "categoria";
require_once "funciones/ayudante.php";
require_once "modelos/modelo_categoria.php";

$nombre = $_POST["nombre"] ?? "";
imprimirArray($_POST);
if (isset($_POST["enviar_categoria"])) {

    try {
        if (isset ($_POST["guardar_usuario"])) {

            if (empty($nombre)) {
                throw new Exception("El nombre no puede estar vacio");
            }

            //preparar el array con los datos
            $datos = compact("nombre");
            //insertar datos
            $categoriasInsertadas = insertarCategorias($conexion, $datos);
            $mensaje = "todo esta insertado correctamente";
            if (!$categoriasInsertadas) {
                throw new Exception("Los datos no se han insertado correctamente");
            }
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}


$categorias = obtenerCategorias($conexion);

include_once "vistas/vista_categoria.php";
