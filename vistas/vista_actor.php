<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php $nombrePagina; ?> </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

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
<h3><?php echo $nombrePagina ?></h3>

<hr>

<div class="row">
 <div class="col-md-5">
 <form action="" method="get">
 <div class="mb-3">
 <label for="nombreActor">Nombre actor</label>
 <input type="text" name="nombreActor" id="nombreActor" class=""form-control">

</div>

<div class="mb-3">
  <label for="apellidoActor">Apellido del actor</label>

  <input type="text" name="apellido"  id="apellidoActor" class="form-control">

</div>

<div class="mb-3">
  <button type="submit" name="Guardar_actor" class="btn btn-primary">Guardar  mensaje</button>

</div>


</form>

</div>
</div>
</div>




</body>
</html>