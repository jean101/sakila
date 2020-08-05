<?php

if (session_status()== 1){
    session_start();
}

function reportarErrores($numero, $mensaje, $archivo, $linea)
{
    $codigos = [
        1 => "Error fatal",
        2 => "Advertencia",
        8 => "Aviso",
    ];

    echo "<div class=\"alert alert-warning\" role=\"alert\">
          <h4 class=\"alert-heading\">{$codigos[$numero]}</h4>
          <p>{$mensaje}</p>
          <hr>
          <span>En la línea <b>{$linea}</b> del archivo <b>{$archivo}</b></span>
        </div>";
}

set_error_handler('reportarErrores');

function reportarExcepciones($exception)
{
    echo "<link rel=\"stylesheet\" href=\"static/css/bootstrap.min.css\">";

    echo "<div class=\"alert alert-danger\" role=\"alert\">
          <h4 class=\"alert-heading\">Ha ocurrido una excepción</h4>
          <p>{$exception->getMessage()}</p>
          <hr>
          <span>En la línea <b>{$exception->getLine()}</b> del archivo <b>{$exception->getFile()}</b></span>
        </div>";
}

set_exception_handler('reportarExcepciones');

function redireccionar($ruta)
{
    header("Location: {$ruta}", true, 303);
}

function incluir_vista($nombre)
{
    include_once "vistas/vista_{$nombre}.php";
}

function imprimirArray($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

if (session_status() == 2) {
    $mensaje = $_SESSION["mensaje"] ?? "";

    if (isset($_SESSION["mensaje"])) {
        unset($_SESSION["mensaje"]);
    }
}
