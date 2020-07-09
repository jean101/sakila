


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
<h3 class="xc"><?php echo $nombrePagina; ?></h3>

<hr class="rr">


<div class="row">

<div class="col-md-3">

<form action=""method="get">

<div class="mb-3">
     <label class="ssss" for="direccion"> Direccion de la tienda</label>
     <select name="direccion" id="direccion" class="form-select">
        <option value="">Direccion de la tienda</option>

        
     </select>
   </div>

   <div class="mb-3">
     <label class="sss" for="manager"> manager de la tienda</label>
     <select name="manager" id="manager" class="form-select">
        <option value="">manager de la tienda</option>


        <?php

foreach ($gerentes as gerente) {

  echo "<option value=\"{$gerente["first_name"]}\">{$gerente["last_name"]}</option>";

}

?>
     </select>
   </div>


   <div class="col-md-12">
<div class="row">
<table  class="table">
<thead>
     <th scope="col">country_id</th>
      <th scope="col">Country</th>
</thead>
<tbody>


    <?php
foreach ($direcciones as $direccion){

    echo "<tr>
            <th scope=\"row\">{$direccion["address_id"]}</th>
            <td>{$direccion["address_id"]}</td>
         </tr>";

}

    ?>


</tbody>

</table>

</div>



</form>
</div>


</div>
