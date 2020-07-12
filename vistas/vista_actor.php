


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
<h3 class="jean"><?php echo $nombrePagina; ?></h3>

<hr class="dd">

<div class="row">


<div class="col-md-3">
<form action="" method="get">

<div class="mb-3">
<label class="fdd" for="nombreActor" class="form-label">Nombre del actor</label>
<input type="text" name="nombreActor" class="form-control" id="nombreActor" placeholder="Escribe el nombre del actor">

</div>


<div class="mb-3">
<label class="zzz" for="apellidoActor" class="form-label">Apellido del actor</label>
<input type="text" name="apellidoActor" class="form-control" id="apellidoActor" placeholder="Escribe el apellido del actor">

</div>

<div class="mb-3">
<button type="submit" name="guardar Actor" class="btn btn-success">Guardar actor</button>


   </div>

</form>

</div>


<div class="container-fluid">
    <hr class="ya">
    <div class="col-md-12">
        <div class="row">
            <table  class="table">
                <thead>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">apellido</th>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>jose</td>
                </tr>

                <?php
                foreach ($actores as $actor){

                    echo "<tr>
            <th scope=\"row\">{$actor["actor_id"]}</th>
            <td>{$actor["first_name"]}</td>
            <td>{$actor["last_name"]}</td>
         </tr>";

                }

                ?>


                </tbody>

            </table>

        </div>



    </div>
</div>


</div>
</body>
</html>