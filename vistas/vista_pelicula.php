
<body>

<div class="">
<div class="row">
<div class="col-md-2">
<?php
    include "partes/partes_head.php";

    include "partes/partes_menu.php";

?>
</div>

<div class="col-md-10">
<h3 class="as"><?php echo $nombrePagina; ?></h3>


<hr class="zz">

<div class="row">

<div class="col-md-5">

<form action="" method="get">

<div class="mb-3">
<label class="aaa" for="titulo" class="form-label">Titulo</label>
<input type="text" name="titulo" class="form-control" id="titulo" placeholder="Escribe el titulo">

</div>

<div class="mb-3">
<label class="" for="Descripcion" class="form-label">Descripcion</label>
<input type="text" name="Descripcion" class="form-control" id="Descripcion" placeholder="Descripcion">

</div>

<div class="mb-3">
<label class="" for="lanzamiento" class="form-label">Lanzamiento</label>
<input type="text" name="lanzamiento" class="form-control" id="lanzamiento" placeholder="Lanzamiento">

</div>



</form>
<br>

<div class="mb-3">
<select name="idioma" id="idioma" class="form-select">
        <option value="">seleccione un idioma</option>

        <?php

         foreach ($peliculas as $pelicula) {

             echo "  <option value=\"{$pelicula[""]}\">{$pelicula["length"]}</option>";
         }
         ?>
     </select>
</div> 

<div class="mb-3">
<label class="www" for="arrendamiento" class="form-label">tasa de arrendamiento</label>
<input type="text" name="arrendamiento" class="form-control" id="titulo" placeholder="Escribe la tasa de arrendamiento">


</div>

<div class="mb-3">
<select name="costo" id="costo" class="form-select">
        <option value="">costo  de  las peliculas</option>

        <?php

foreach ($peliculas as $pelicula) {

    echo "  <option value=\"{$pelicula["price"]}\">{$pelicula["price"]}</option>";
}
?>
     </select>
</div> 

<div class="mb-3">
<select name="rating" id="rating" class="form-select">
        <option value="">rating  de las peliculas</option>

        <?php

foreach ($peliculas as $pelicula) {

    echo "  <option value=\"{$pelicula["rating"]}\">{$pelicula["rating"]}</option>";
}
?>
     </select>
</div> 

<div class="mb-3">
<select name="actores" id="actores" class="form-select">
        <option value="">actores de las peliculas</option>
        <?php

foreach ($peliculas as $pelicula) {

    echo "  <option value=\"{$pelicula["actors"]}\">{$pelicula["actors"]}</option>";
}
?>
     </select>
</div> 

<div class="mb-3">
<button type="submit" name="guardar descripcion" class="btn btn-success">Guardar descripcion</button>


</div>


</div>




</div> 





</body>
</html>