<?php

//declarar las constantes
$usuario = "root";
$contrasena = "carlos0313";


$errores = [];
try {
    $conexion = new PDO('mysql:host=localhost;dbname=sakila', $usuario, $contrasena);

} catch (PDOException $exception) {
array_push($errores, $exception->getMessage());
}






