


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
<h3 class="xc"><?php echo $nombrePagina; ?></h3>

<hr class="rr">



<div class="row">

<div class="col-md-5">
<form action=""method="get">

<div class="mb-3">
     <label class="rf" for="IDmanager"> Direccion de la tienda</label>
     <select name="IDmanager" id="IDmanager" class="form-select">
        <option value="">Direccion de la tienda</option>

        <?php

foreach ($tiendas as $tienda) {

    echo "  <option value=\"{$tienda["store"]}\">{$tienda["store"]}</option>";
}
?>
     </select>
   </div>


   <div class="mb-3">
     <label class="az" for="IDdireccion"> Nombre del manager</label>
     <select name="IDdireccion" id="IDdireccion" class="form-select">
        <option value="">Nombre del manager</option>

        <?php

foreach ($tiendas as $tienda) {

    echo "  <option value=\"{$tienda["manager"]}\">{$tienda["manager"]}</option>";
}
?>
     </select>
   </div>
   <div class="mb-3">
<button type="submit" name="guardar informacion" class="btn btn-success">guardar informacion</button>



</form>

</div>
</div>
