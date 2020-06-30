
<body>

<div class="">
<div class="row">
<div class="col-md-2">
<?php
    include "partes/partes_menu.php";
    include "partes/partes_head.php";

?>
</div>

<div class="col-md-10">
<h3 class="as"><?php echo $nombrePagina; ?></h3>


<hr>

<div class="rom">

<div class="col-md-5">

<form action="" method="get">

<div class="mb-3">
<label for="titulo" class="form-label">Nombre de la pelicula</label>
<input type="text" name="titulo" class="form-control" id="titulo" placeholder="Escribe el nombre de la pelicula">

</div>

<select name="descripcion" id="descripcion" class="form-select">
        <option value="">Aqui va el listado de las descripciones de las peliculas</option>
     </select>


</form>
<br>
<div class="mb-3">
<select name="lanzamiento" id="lanzamiento" class="form-select">
        <option value="">Aqui va la fechas de lanzamiento las peliculas</option>
     </select>
<br>
     <div class="mb-3">
<select name="lenguaje" id="lenguaje" class="form-select">
        <option value="">Aqui va el lenguaje de las peliculas</option>
     </select>
<br>
<div class="mb-3">
<select name="duracion" id="duracion" class="form-select">
        <option value="">Aqui va la duracion de  las peliculas</option>
     </select>
</div> 

<div class="mb-3">
<label for="arrendamiento" class="form-label">tasa de arrendamiento</label>
<input type="text" name="arrendamiento" class="form-control" id="titulo" placeholder="Escribe la tasa de arrendamiento">


</div>

<div class="mb-3">
<label for="longitud" class="form-label">longitud de la pelicula</label>
<input type="text" name="longitud" class="form-control" id="titulo" placeholder="Longitud de la pelicula">


</div>
<div class="mb-3">
<select name="costo" id="costo" class="form-select">
        <option value="">costo de remplazo  de  las peliculas</option>
     </select>
</div> 

<div class="mb-3">
<select name="rating" id="rating" class="form-select">
        <option value="">rating  de las peliculas</option>
     </select>
</div> 

<div class="mb-3">
<select name="caracteristicas" id="caracteristicas" class="form-select">
        <option value="">caracteristicas especiales de las peliculas</option>
     </select>
</div> 

<div class="mb-3">
<button type="submit" name="guardar descripcion" class="btn btn-success">Guardar descripcion</button>


</div>


</div>




</div> 





</body>
</html>