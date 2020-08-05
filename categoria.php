<?php

$nombrePagina = "categoria";
require_once "funciones/ayudante.php";
require_once "modelos/modelo_categoria.php";

$nombre = $_POST["nombre"] ?? "";

try {
    if (isset($_POST["enviar_categoria"])) {

        if (empty($nombre)) {
            throw new Exception("La categoria no puede estar vacio");
        }

        //preparar el array con los datos
        $datos = compact("nombre");
        //insertar datos
        $categoriasInsertadas = insertarCategorias($conexion, $datos);
        $_SESSION["mensaje"] = "todo esta insertado correctamente";
        if (!$categoriasInsertadas) {
            throw new Exception("Los datos no se han insertado correctamente");
        }
        //redireccionar la pagina
        redireccionar('categoria.php');

    }
    if (isset($_POST["eliminarCategoria"])) {

        $idCategoria = $_POST["eliminarCategoria"] ?? "";

//validar datos
        if (empty($idCategoria)) {
            throw new Exception("El valor del id esta vacio");
        }
        $datos = compact("idCategoria");

//eliminar
        $eliminadoCategoria = eliminarCategorias($conexion, $datos);
        $_SESSION["mensaje"] = "Los datos fueron eliminados correctamente";

//Lanzar error

        if (!$eliminadoCategoria) {
            throw new Exception("Los datos no se eliminaron correctamente");
        }
        //redireccionar la pagina
        redireccionar('categoria.php');
    }

} catch (Exception $e) {
    $error = $e->getMessage();
}


$categorias = obtenerCategorias($conexion);

include_once "vistas/vista_categoria.php";
