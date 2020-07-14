
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
<label class="jjj" for="Descripcion" class="form-label">Descripcion</label>
<input type="text" name="Descripcion" class="form-control" id="Descripcion" placeholder="Descripcion">

</div>

<div class="mb-3">
<label class="qdfg" for="lanzamiento" class="form-label">Lanzamiento</label>
<input type="text" name="lanzamiento" class="form-control" id="lanzamiento" placeholder="Lanzamiento">

</div>



</form>
<br>

    <div class="mb-3">
        <label class="jjkkl" for="idioma1">   selecciona el idioma principal</label>
        <select name="idioma1" id="idioma" class="form-select">
            <option value="">  selecciona el idioma principal</option>
            <?php

            foreach ($idiomas as $idioma) {

                echo "  <option value=\"{$idioma["language_id"]}\">{$idioma["name"]}</option>";
            }
            ?>

        </select>
    </div>

    <div class="mb-3">
        <label class="jjkkl" for="idioma1">   selecciona el idioma secundario</label>
        <select name="idioma1" id="idioma" class="form-select">
            <option value="">  selecciona el idioma secundario</option>
            <?php

            foreach ($idiomas as $idioma) {

                echo "  <option value=\"{$idioma["language_id"]}\">{$idioma["name"]}</option>";
            }
            ?>

        </select>
    </div>
    <div class="mb-3">
        <label class="gttt" for="duracion" class="form-label">duracion de renta</label>
        <input type="text" name="duracion" class="form-control" id="duracion" placeholder="duracion">

    </div>

    <div class="mb-3">
        <label class="grrr" for="arrendamiento" class="form-label">tasa de arrendamiento</label>
        <input type="text" name="arrendamiento" class="form-control" id="arrendamiento" placeholder="arrendamiento">

    </div>

    <div class="mb-3">
        <label class="binn" for="tamaño" class="form-label">tamaño</label>
        <input type="text" name="tamaño" class="form-control" id="tamaño" placeholder="tamaño">

    </div>

    <div class="mb-3">
        <label class="bang" for="remplazo" class="form-label">costo de reemplazo</label>
        <input type="text" name="remplazo" class="form-control" id="remplazo" placeholder="remplazo">

    </div>

    <div class="mb-3">
        <label class="trap" for="clasificacion" class="form-label">clasificacion</label>
        <input type="text" name="clasificacion" class="form-control" id="clasificacion" placeholder="clasificacion">

    </div>

    <div class="mb-3">
        <label class="traper" for="caracteristicas" class="form-label">caracteristicas especiales</label>
        <input type="text" name="caracteristicas" class="form-control" id="caracteristicas" placeholder="caracteristicas">

    </div>






</div>





<div class="mb-3">
<button type="submit" name="guardar descripcion" class="btn btn-success">Guardar descripcion</button>


</div>


</div>




</div> 





</body>
</html>