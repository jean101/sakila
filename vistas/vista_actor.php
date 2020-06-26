<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php $nombrePagina; ?> </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
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

<hr>

<div class="row">

<div class="col-md-3">
<form action="" method="get">

<div class="mb-3">
<label for="nombreActor" class="form-label">Nombre del actor</label>
<input type="text" name="nombreActor" class="form-control" id="nombre" placeholder="Escribe el nombre del actor ">

</div>


<div class="mb-3">
<label for="apellidoActor" class="form-label">Apellido del actor</label>
<input type="text" name="apellidoActor" class="form-control" id="apellidoActor" placeholder="Escribe el apellido del actor ">

</div>

<div class="mb-3">
<button type="submit" name="guardar Actor" class="btn btn-primary">Guardar actor</button>


   </div>

</form>

</div>

</div>
</body>
</html>