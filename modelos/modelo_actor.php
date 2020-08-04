<?php

require_once "config/conexion.php";


function obtenerActores($conexion)
{

    $sql = "select * from actor;";

    $datos = $conexion->query($sql)->fetchAll();


    return $datos;
}

function insertarActores($conexion, $datos)
{

    $sql = "Insert Into actor (first_name, last_name) values (:nombreActor,:apellidoActor);";
    return $conexion->prepare($sql)->execute($datos);
}

function eliminarActores($conexion, $datos)
{
    $sql = "DELETE FROM film_actor WHERE actor_id =:idActor;
DELETE FROM actor WHERE actor_id= :idActor";
    return $conexion->prepare($sql)->execute($datos);

}


