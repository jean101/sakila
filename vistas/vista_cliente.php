
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
<h3 class="we"><?php echo $nombrePagina; ?></h3>

<hr class="aa">

<div class="row">

<div class="col-md-5">

<form action="" method="get">
<div class="mb-3">
     <label class="cx" for="IDtienda"> ciudad</label>
     <select name="tienda" id="IDtienda" class="form-select">
        <option value="">Introducir el id tienda</option>

        <?php

         foreach ($clientes as $cliente) {

             echo "  <option value=\"{$cliente["store_id"]}\">{$cliente["store_id"]}</option>";
         }
         ?>

        
        
     </select>
   </div>

   <div class="mb-3">
     <label class="bvc" for="nombre">primer nombre</label>
     <input type="text" name="nombre" id="nombre" class="form-control">
   </div>


   <div class="mb-3">
     <label class="mnb" for="nombre2">segundo nombre</label>
     <input type="text" name="nombre2" id="nombre2" class="form-control">
   </div>

   <div class="mb-3">
     <label class="rew" for="email">Introduzca el email</label>
     <input type="text" name="email" id="email" class="form-control">
   </div>

   <div class="mb-3">
     <label class="qwe" for="IDdireccion"> Id direccion</label>
     <select name="direccion" id="IDdireccion" class="form-select">
        <option value="">Introducir el id direccion</option>

        <?php

         foreach ($clientes as $cliente) {

             echo "  <option value=\"{$cliente["address_id"]}\">{$cliente["address_id"]}</option>";
         }
         ?>
     </select>
   </div>

   <div class="mb-3">
     <label class="hgf" for="activo">Introduzca el activo</label>
     <input type="text" name="activo" id="activo" class="form-control">
   </div>

   </div>

<div class="mb-3">
<input type="button" class="btn btn-success" value="Enviar informacion">


</div>


</form>
</div>
</div>

</body>
</html>