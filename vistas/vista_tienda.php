

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
     <label for="IDmanager"> id del manager</label>
     <select name="IDmanager" id="IDmanager" class="form-select">
        <option value="">Id del manager</option>
     </select>
   </div>


   <div class="mb-3">
     <label for="IDdireccion"> Introduza el id direccion</label>
     <select name="IDdireccion" id="IDdireccion" class="form-select">
        <option value="">Introducir es el id direccion</option>
     </select>
   </div>
   <div class="mb-3">
<button type="submit" name="guardar informacion" class="btn btn-primary">guardar informacion</button>



</form>

</div>
</div>
