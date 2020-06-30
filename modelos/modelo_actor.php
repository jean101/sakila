<?php

require_once "config/conexion.php";


include_once "vistas/vista_principal.php";



function obtenerActores($conexion) {

    $sql = "select * from actor;";

    $datos = $conexion->query($sql)->fetchAll();


    return $datos;
}


