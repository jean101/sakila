
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
     <label class="jhl" for="Direciion"> Direccion</label>
     <select name="Direccion" id="Direccion" class="form-select">
        <option value="">Direccion</option>

        <?php

foreach ($direcciones as $direccion) {

    echo "  <option value=\"{$direccion["address_id"]}\">{$direccion["address"]}</option>";
}
?>
     </select>
   </div>

    <div class="form-file">

        <input type="file" class="form-file-input" id="customFile">

        

        <label class="form-file-label" for="customFile">
                <span class="form-file-text">Elegir imagen...</span>
                <span class="form-file-button">imagen</span>

            </label>
    </div>

   <div class="mb-3">
     <label class="yut" for="email">Introduzca su email</label>
     <input type="text" name="email" id="email" class="form-control">
   </div>

   <div class="mb-3">
     <label class="iou" for="tienda">   tienda</label>
     <select name="tienda" id="tienda" class="form-select">
        <option value="">  tienda</option>

        <?php

foreach ($tiendas as $tienda) {

    echo "  <option value=\"{$tienda["store_id"]}\">{$tienda["store_id"]}</option>";
}
?>
     </select>
   </div>

    <div class="qazx" class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            Activo
        </label>
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


    <hr class="ya">
    <div class="col-md-9">
        <div class="row">
            <table  class="table">
                <thead class="real">
                <th scope="col">staff_id</th>
                <th scope="col">first_name</th>
                <th scope="col">last_name</th>
                <th scope="col">address</th>
                <th scope="col">email</th>
                <th scope="col">store_id</th>
                <th scope="col">active</th>
                <th scope="col">username</th>
                <th scope="col">password</th>


                </thead>
                <tbody>

                <?php
                foreach ($infoPersonales as $infoPersonal){

                    echo "<tr>
            <th scope=\"row\">{$infoPersonal["staff_id"]}</th>
            <td>{$infoPersonal["first_name"]}</td>
            <td>{$infoPersonal["last_name"]}</td>
            <td>{$infoPersonal["address"]}</td>
            <td>{$infoPersonal["email"]}</td>
            <td>{$infoPersonal["store_id"]}</td>
            <td>{$infoPersonal["active"]}</td>
            <td>{$infoPersonal["username"]}</td>
            <td>{$infoPersonal["password"]}</td>


         </tr>";

                }

                ?>


                </tbody>

            </table>

        </div>


    </div>

</body>
</html>