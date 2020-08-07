<?php

$nombrePagina = "categoria";
require_once "funciones/ayudante.php";
require_once "modelos/modelo_categoria.php";

$nombre = $_POST["nombre"] ?? "";
$idCategoria = $_POST["idCategoria"] ?? "";


try {
    if (isset($_POST["enviar_categoria"])) {

        if (empty($nombre)) {
            throw new Exception("La categoria no puede estar vacio");
        }

        //preparar el array con los datos
        $datos = compact("nombre");
        //insertar datos
        if (empty($idCategoria)) {
            $categoriasInsertadas = insertarCategorias($conexion, $datos);
            $_SESSION["mensaje"] = "todo esta insertado correctamente";
            if (!$categoriasInsertadas) {
                throw new Exception("Los datos no se han insertado correctamente");
            }
        } else {
            $datos["idCategoria"]= $idCategoria;
            //actualizar datos
            $categoriaEditada= editarCategoria($conexion,$datos);
            $_SESSION["mensaje"] = " Datos modificados  correctamente";
            if (!$categoriaEditada){
                throw new Exception("ocurrio un error al modificar los datos");
            }
        }
        //redireccionar la pagina
        redireccionar('categoria.php');

    }
    if (isset($_POST["eliminarCategoria"])) {

        $idCategoria = $_POST["eliminarCategoria"] ?? "";

//validar datos
        if (empty($idCategoria)) {
            throw new Exception("El valor de la categoria esta vacio");
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

        if (isset($_POST["editarCategoria"])){

            $idCategoria = $_POST["editarCategoria"] ?? "";
            if (empty($idCategoria)){
                throw new Exception("El valor del id esta vacio");

            }
            $datos = compact("idCategoria");
            $resultado= obtenerCategoriaPorId($conexion, $datos);
            $nombre = $resultado["name"];
        }



} catch (Exception $e) {
    $error = $e->getMessage();
}


$categorias = obtenerCategorias($conexion);

include_once "vistas/vista_categoria.php";
