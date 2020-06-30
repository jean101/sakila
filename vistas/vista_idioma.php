
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
<h3 class="er"><?php echo $nombrePagina; ?></h3>


<hr>

<div class="row">

<div class="mb-5">
<div class="col-md-5">
<form action="" method="get">

<div class="mb-3">
     <label for="idioma"> Identifique su idioma</label>
     <select name="idioma" id="idioma" class="form-select">
        <option value="">Identifique su idioma</option>
     </select>
   </div>

</div>
</div>
<div class="mb-3">
<input type="button" class="btn btn-success" value="guardar idioma">


</div>
</form>
</div>
</div>

</body>
</html>