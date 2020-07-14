<?php

$nombrePagina = "categoria";

require_once "modelos/modelo_categoria.php";

$nombre = $_GET["nombre"] ?? "";

if (isset($_GET["Enviar categoria"])) {


}
$categorias = obtenerCategorias($conexion);


include_once "vistas/vista_categoria.php";
