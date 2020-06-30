


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
<button type="submit" name="guardar informacion" class="btn btn-success">guardar informacion</button>



</form>

</div>
</div>
