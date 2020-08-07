<?php
$nombrePagina = "idioma";

require_once "modelos/modelo_idioma.php";
require_once "funciones/ayudante.php";
$lenguaje = $_POST["lenguaje"] ?? "";
$idIdioma = $_POST["idIdioma"] ?? "";


try {
    if (isset($_POST["guardar_lenguaje"])) {

        if (empty($lenguaje)) {
            throw new Exception("El idioma no puede estar vacio");
        }

        //preparar el array con los datos
        $datos = compact("lenguaje");
        //insertar datos
        if (empty($idIdioma)) {
            $idiomaInsertado = insertarIdioma($conexion, $datos);

            $_SESSION["mensaje"] = "todo esta insertado correctamente";
            if (!$idiomaInsertado) {
                throw new Exception("Los datos no se han insertado correctamente");
            }
        } else {
            //agregar el id en array datos
            $datos["idIdioma"]= $idIdioma;
            //actualizar datos
            $idiomaEditado= editarIdioma($conexion,$datos);
            $_SESSION["mensaje"] = " Datos modificados  correctamente";
            if (!$idiomaEditado){
                throw new Exception("ocurrio un error al modificar los datos");
            }

        }
//redireccionar la pagina
        redireccionar('idioma.php');
    }

    if (isset($_POST["eliminarIdiomas"])) {

        $idIdioma = $_POST["eliminarIdiomas"] ?? "";

//validar datos
        if (empty($idIdioma)) {
            throw new Exception("El valor del id esta vacio");
        }
        $datos = compact("idIdioma");

//eliminar
        $eliminadoIdioma = eliminarIdiomas($conexion, $datos);
        $_SESSION["mensaje"] = "Los datos fueron eliminados correctamente";

//Lanzar error

        if (!$eliminadoIdioma) {
            throw new Exception("Los datos no se eliminaron correctamente");
        }
        //redireccionar la pagina
        redireccionar('idioma.php');
    }

    //editar idioma
    if (isset($_POST["editarIdioma"])){

        $idIdioma = $_POST["editarIdioma"] ?? "";
        if (empty($idIdioma)){
            throw new Exception("El valor del id esta vacio");

        }
        $datos = compact("idIdioma");
            $resultado= obtenerIdiomaPorId($conexion, $datos);
            $lenguaje = $resultado["name"];
    }
} catch (Exception $e) {
    $error = $e->getMessage();
}


$idiomas = obtenerIdiomas($conexion);


include_once "vistas/vista_idioma.php";