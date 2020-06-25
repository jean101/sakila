<?php
$nombrePagina = "Actor";


$nombreActor = $_GET["$nombreActor"] ?? "";
$apellidoActor = $_GET["$apellidoActor"] ?? "";

if (isset($_GET["guardar actor"])) {
    
    
    
}

include_once "vistas/vista_actor.php";