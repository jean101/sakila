
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
<h3 class="uy"><?php echo $nombrePagina; ?></h3>

<hr>

<div class="row">

<div class="col-md-5">
<form action="" method="get">

<div class="mb-3">
<label for="Pais" class="form-label">pais</label>
<input type="text" name="pais" class="form-control" id="Pais" placeholder="Escribe el pais ">

</form>

</div>

<div class="mb-3">
<input type="button" class="btn btn-success" value="Guardar pais">


</div>

</div>
</body>
</html>