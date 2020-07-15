<?php

require_once "config/conexion.php";


function obtenerActores($conexion)
{

    $sql = "select * from actor;";

    $datos = $conexion->query($sql)->fetchAll();


    return $datos;
}

function insertarActores($conexion , $datos){

    $sql = "Insert Into actor (first_name, last_name) values (:nombreActor,:apellidoActor);";
    return $conexion ->prepare($sql)->execute($datos);
}


