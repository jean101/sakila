<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php $nombrePagina; ?> </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>
<body>

<h1>Bienvenidos a mi pagina principal <?php $nombrePagina; ?> </h1>

<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="#">Inicio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="actor.php">Actor</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="direccion.php">Direccion</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="ciudad.php">ciudad</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="pais.php">pais</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="cliente.php">cliente</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="pelicula.php">pelicula</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="idioma.php">idioma</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="personal.php">personal</a>
    </li>

    <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul>

</body>
</html>