<?php

$nombrePagina = "categoria";

require_once "modelos/modelo_categoria.php";

$nombre = $_POST["nombre"] ?? "";

if (isset($_POST["Enviar categoria"])) {


}
$categorias = obtenerCategorias($conexion);


include_once "vistas/vista_categoria.php";
