
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
<h3 class="ht"><?php echo $nombrePagina; ?></h3>

<hr>

<div class="row">

<div class="col-md-5">

<form action=""method="get">

<div class="mb-3">
     <label for="ciudad"> ciudad</label>
     <select name="ciudad" id="ciudad" class="form-select">
        <option value="">Nombre de la ciudad</option>
     </select>
   </div>

   <div class="mb-3">
     <label for="IDciudad"> ciudad</label>
     <select name="idciudad" id="IDciudad" class="form-select">
        <option value="">Aqui va el id de la ciudad</option>
     </select>
   </div>

   <div class="mb-3">

   <button type="submit" name="guardar ciudad" class="btn btn-success">guardar datos</button>

   </div>


</form>

</div>

</div>




</div>

</div>

</body>
</html>