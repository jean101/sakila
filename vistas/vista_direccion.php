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
<form action="" method="get">

 <div class="mb-3">

  <label for="direccion">direccion</label>
  <input type="text" name="direccion" id="direccion" class="form-control">
 </div>

  <div class="mb-3">

    <label for="direccion2">direccion 2</label>
    <input type="text" name="direccion2" id="direccion2" class="form-control">

   </div>

  <div class="mb-3">
    <label for="district">district</label>
    <input type="text" name="district" id="district" class="form-control">
  </div>

   <div class="mb-3">
     <label for="district">district</label>
     <input type="text" name="district" id="district" class="form-control">
   </div>

   <div class="mb-3">
     <label for="ciudad"> ciudad</label>
     <select name="ciudad" id="ciudad" class="form-select">
        <option value="">Aqui va el listado de la ciudad, desde sql</option>
     </select>
   </div>

   <div class="mb-3">
     <label for="codigoPostal">codigo postal</label>
     <input type="text" name="codigoPostal" id="codigoPostal" class="form-control">
   </div>

   <div class="mb-3">
     <label for="telefono">numero de telefono</label>
     <input type="tel" name="telefono" id="telefono" class="form-control">
   </div>

   <div class="mb-3">
     <label for="locacion">ubicacion</label>
     <input type="text" name="locacion" id="telefono" class="form-control">
   </div>

   <div class="mb-3">

   <button type="submit" name="guardarDireccion" class="btn btn-primary">guardar Direccion</button>

   </div>


</form>
</div>

</div>



</body>
</html>

