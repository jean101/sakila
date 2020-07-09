
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
<h3 class="ht"><?php echo $nombrePagina; ?></h3>

<hr class="qq">

<div class="row">

<div class="col-md-5">

<form action=""method="get">

<div class="mb-3">
<label class="rf" for="ciudad" class="form-label">Digite la ciudad</label>
<input type="text" name="ciudad" class="form-control" id="ciudad" placeholder="Escribe la ciudad">


</div>
   <div class="mb-3">
     <label class="ws" for="pais"> pais</label>
     <select name="pais" id="pais" class="form-select">
        <option value=""> Elija el pais</option>

        <?php

         foreach ($paises as $pais) {

             echo "  <option value=\"{$pais["country"]}\">{$pais["country"]}</option>";
         }
         ?>

     </select>
   </div>

   <div class="mb-3">

   <button type="submit" name="guardar " class="btn btn-success">guardar datos</button>

   </div>


</form>

</div>

</div>




</div>

</div>

</body>
</html>