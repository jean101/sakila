<?php

require_once "config/conexion.php";


function obtenerActores($conexion)
{

    $sql = "select * from actor;";

    $datos = $conexion->query($sql)->fetchAll();


    return $datos;
}


