


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
            <h3 class="hey"><?php echo $nombrePagina; ?></h3>

            <hr class="ww">


            <div class="row">
            
            <div class="col-md-5">
            <form action="" method="get">
            
            <div class="mb-3">
<label class="asa" for="nombre" class="form-label">nombre de la categoria</label>
<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Escribe el nombre de la categoria">


</div>

<div class="mb-3">
<button type="submit" name="Enviar categoria" class="btn btn-success">Enviar categoria</button>


</div>
            
            </form>
            
            </div>
            <hr class="xv">

            <div class="col-md-9">
<div class="row">
<table  class="table">
<thead class="rari">
     <th scope="col">ID</th>
      <th scope="col">Nombre</th>
</thead>
<tbody>


    <?php
foreach ($categorias as $categoria){

    echo "<tr>
            <th scope=\"row\">{$categoria["category_id"]}</th>
            <td>{$categoria["name"]}</td>
         </tr>";

}

    ?>


</tbody>

</table>

</div>


            </div>

</body>
</html>
