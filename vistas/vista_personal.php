
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
<h3 class="bn"><?php echo $nombrePagina; ?></h3>

<hr class="pq">

<div class="row">

<div class="col-md-5">

<form action=""method="get">


<div class="mb-3">
     <label class="fds" for="nombre">Introduzca su nombre</label>
     <input type="text" name="nombre" id="nombre" class="form-control">
   </div>

   <div class="mb-3">
     <label class="tre" for="nombre2">Introduzca el segundo nombre</label>
     <input type="text" name="nombre2" id="nombre2" class="form-control">
   </div>

   <div class="mb-3">
     <label class="jhl" for="ciudad"> ciudad</label>
     <select name="ciudad" id="ciudad" class="form-select">
        <option value="">ciudad</option>

        <?php

foreach ($personales as $personal) {

    echo "  <option value=\"{$personal["city"]}\">{$personal["city"]}</option>";
}
?>
     </select>
   </div>

   <div class="mb-3">
     <label class="dfg" for="foto"> Introduza una foto</label>
     <select name="foto" id="foto" class="form-select">
        <option value="">Introducir una foto</option>
     </select>
   </div>

   <div class="mb-3">
     <label class="yut" for="email">Introduzca su email</label>
     <input type="text" name="email" id="email" class="form-control">
   </div>

   <div class="mb-3">
     <label class="iou" for="IDtienda"> Direccion  de la  tienda</label>
     <select name="tienda" id="IDtienda" class="form-select">
        <option value="">Direccion de la   tienda</option>

        <?php

foreach ($personales as $personal) {

    echo "  <option value=\"{$personal["address"]}\">{$personal["address"]}</option>";
}
?>
     </select>
   </div>

   <div class="mb-3">
     <label for="activo">Introduzca el activo</label>
     <input type="text" name="activo" id="activo" class="form-control">
   </div>

   <div class="mb-3">
     <label class="red" for="username">Nombre que utiliza el usuario</label>
     <input type="text" name="username" id="username" class="form-control">
   </div>

   <div class="mb-3">
     <label class="wwr" for="password">Introduzca su contraseña</a></label>
     <input type="text" name="password" id="password" class="form-control">
   </div>

   <div class="mb-3">
<button type="submit" name="Enviar informacion" class="btn btn-success">Enviar informacion</button>


</form>

</div>
</div>

</body>
</html>