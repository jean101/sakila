<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php $nombrePagina; ?> </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

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

<div class="col-md-5">

<form action=""method="get">


<div class="mb-3">
     <label for="nombre">Introduzca su nombre</label>
     <input type="text" name="nombre" id="nombre" class="form-control">
   </div>

   <div class="mb-3">
     <label for="nombre2">Introduzca el segundo nombre</label>
     <input type="text" name="nombre2" id="nombre2" class="form-control">
   </div>

   <div class="mb-3">
     <label for="IDdireccion"> Id direccion</label>
     <select name="direccion" id="IDdireccion" class="form-select">
        <option value="">Introducir el id direccion</option>
     </select>
   </div>

   <div class="mb-3">
     <label for="foto"> Introduza una foto</label>
     <select name="foto" id="foto" class="form-select">
        <option value="">Introducir una foto</option>
     </select>
   </div>

   <div class="mb-3">
     <label for="email">Introduzca su email</label>
     <input type="text" name="email" id="email" class="form-control">
   </div>

   <div class="mb-3">
     <label for="IDtienda"> Introduza el id de tienda</label>
     <select name="tienda" id="IDtienda" class="form-select">
        <option value="">Introducir el id de tienda</option>
     </select>
   </div>

   <div class="mb-3">
     <label for="activo">Introduzca el activo</label>
     <input type="text" name="activo" id="activo" class="form-control">
   </div>

   <div class="mb-3">
     <label for="username">Nombre que utiliza el usuario</label>
     <input type="text" name="username" id="username" class="form-control">
   </div>

   <div class="mb-3">
     <label for="password">Introduzca su contraseña</a></label>
     <input type="text" name="password" id="password" class="form-control">
   </div>

   <div class="mb-3">
<button type="submit" name="Enviar informacion" class="btn btn-primary">Enviar informacion</button>


</form>

</div>
</div>

</body>
</html>