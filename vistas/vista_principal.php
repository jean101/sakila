<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php $nombrePagina; ?> </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>
<body>


<nav class="navbar navbar-light bg-light">
<a class="navbar-brand" href="#">

<img src="" alt="">
</a>

</nav>



<div class="container-fluid">
<div class="row">
<div class="col-md-2">
<?php
    include "partes/partes_menu.php";
    ?>
</div>

<div class="col-md-10">
<h3><?php echo $nombrePagina; ?></h3>

<div class="row">
<div class="col-md-5">
<form action="" method="get">
<div class="mb-3">
  <label for="inputNombre" class="form-label">nombre</label>
  <input type="text" name="nombre" class="form-control" id="inputNombre" placeholder="Escribe tu nombre">
</div>

<div class="mb-3">
<label for="inputCiudad" class="form-label">ciudad</label>
<input type="text" name="ciudad" class="form-control" id="inputCiudad" placeholder="Escribe el nombre de la ciudad ">

</div>

<div class="mb-3">
<label for="inputEdad" class="form-label">Edad</label>
<input type="text" name="Edad" class="form-control" id="inputEdad" placeholder="Escribe tu edad ">


</div>

<div class="mb-3">
<label for="inputBusqueda" class="form-label">Busqueda</label>
<input type="text" name="Busqueda" class="form-control" id="inputBusqueda" placeholder="Escribe la busqueda ">


</div>

<div class="mb-3">
<label for="inputMonto" class="form-label">Monto</label>
<input type="text" name="monto" class="form-control" id="inputMonto" placeholder="Escribe el monto ">


</div>

<div class="mb-3">
<input type="button" class="btn btn-primary" value="Enviar datos">


</div>
</form>
</div>

</div>

<hr>




<p>nombre: <?php echo $nombre; ?></p>
<p>ciudad: <?php echo $ciudad; ?></p>
<p>Edad: <?php echo $edad; ?></p>
<p>Busqueda: <?php echo $q; ?></p>
<p>Monto: <?php echo $monto; ?></p>

</div>
</div>

</div>







</body>
</html>