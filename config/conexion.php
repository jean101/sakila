<?php

//declarar las constantes
$usuario = "root";
$contrasena = "carlos0313";


$ajustes = [19=>2];
try {
    $conexion = new PDO('mysql:host=localhost;dbname=sakila', $usuario, $contrasena,$ajustes);

} catch (PDOException $exception) {

    throw new Exception("Ha ocurrido un error al conectarnos a la base de datos {$exception->getMessage()}");
}






