<?php
include_once "partes/partes_head.php";
?>
<body>



<div class="">
<div class="row">
<div class="col-md-2">
<?php
    include "partes/partes_menu.php";


?>
</div>

<div class="col-md-10">
<h3 class="uy"><?php echo $nombrePagina; ?></h3>

<hr class="jj">

<div class="row">

<div class="col-md-5">
<form action="" method="get">

<div class="mb-3">
     <label for="pais" class="qw">pais</label>
     <select name="pais" id="pais" class="form-select">
        <option value="">Aqui va el listado de los paises</option>

        <?php

foreach ($paises as $pais) {

    echo "  <option value=\"{$pais["country"]}\">{$pais["country"]}</option>";
}
?>
</form>

</div>

<br>
<div class="mb-5">
<input type="button" class="btn btn-success" value="Guardar pais">


</div>

</div>
</body>
</html>