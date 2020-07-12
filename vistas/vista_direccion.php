
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

<h3 class="ty"><?php echo $nombrePagina; ?></h3>

<hr class="ll">

<div class="row">

<div class="col-md-5">
<form action="" method="get">

 <div class="mb-3">

  <label class="jk" for="direccion">Direccion</label>
  <input type="text" name="direccion" id="direccion" class="form-control">
 </div>

  <div class="mb-3">

    <label class="yh" for="direccion2">Direccion 2</label>
    <input type="text" name="direccion2" id="direccion2" class="form-control">

   </div>

  <div class="mb-3">
    <label class="ty" for="district">District</label>
    <input type="text" name="district" id="district" class="form-control">
  </div>

   <div class="mb-3">
     <label class="ui" for="IDciudad">ID de la ciudad</label>
     <input type="text" name="IDciudad" id="IDciudad" class="form-control">
   </div>

   <div class="mb-3">
     <label class="hn" for="ciudad"> ciudad</label>
     <select name="ciudad" id="ciudad" class="form-select">
        <option value="">Aqui va el listado de la ciudad, desde sql</option>
         <?php

         foreach ($ciudades as $ciudad) {

             echo "  <option value=\"{$ciudad["city_id"]}\">{$ciudad["city"]}</option>";
         }
         ?>
     </select>
   </div>

   <div class="mb-3">
     <label class="nm" for="codigoPostal">codigo postal</label>
     <input type="text" name="codigoPostal" id="codigoPostal" class="form-control">
   </div>

   <div class="mb-3">
     <label class="kl " for="telefono">numero de telefono</label>
     <input type="tel" name="telefono" id="telefono" class="form-control">
   </div>

   <div class="mb-3">
     <label class="vb" for="locacion">ubicacion</label>
     <input type="text" name="locacion" id="telefono" class="form-control">
   </div>

   <div class="mb-3">

   <button type="submit" name="guardarDireccion" class="btn btn-success">guardar Direccion</button>

   </div>


</form>
</div>

    <hr class="ya">
    <div class="col-md-12">
        <div class="row">
            <table  class="table">
                <thead>
                <th scope="col">address_id</th>
                <th scope="col">address</th>
                <th scope="col">address2</th>
                <th scope="col">district</th>
                <th scope="col">city_id</th>
                <th scope="col">postal_code</th>
                <th scope="col">phone</th>
                <th scope="col">location</th>

                </thead>
                <tbody>
                <tr>
                    <th scope="row">2</th>
                    <td>28 Mysql Boulevard</td>
                    <td>jose</td>
                </tr>

                <?php
                foreach ($direcciones as $direccion){

                    echo "<tr>
            <th scope=\"row\">{$direccion["address_id"]}</th>
            <td>{$direccion["address"]}</td>
            <td>{$direccion["address2"]}</td>
            <td>{$direccion["district"]}</td>
            <td>{$direccion["city_id"]}</td>
            <td>{$direccion["postal_code"]}</td>
            <td>{$direccion["phone"]}</td>
            <td>{$direccion["location"]}</td>

         </tr>";

                }

                ?>


                </tbody>

            </table>

        </div>


</body>
</html>

