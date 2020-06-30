


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
            <h3 class="hey"><?php echo $nombrePagina; ?></h3>

            <hr>


            <div class="row">
            
            <div class="col-md-5">
            <form action="" method="get">
            
            <div class="mb-3">
<select name="nombre" id="nombre" class="form-select">
        <option value="">Nombre de las categorias</option>
     </select>
</div> 

<div class="mb-3">
<button type="submit" name="Enviar categoria" class="btn btn-success">Enviar categoria</button>


</div>
            
            </form>
            
            </div>
            </div>

</body>
</html>
