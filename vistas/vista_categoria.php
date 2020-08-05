<?php
include "partes/partes_head.php";
?>


<body>


<div class="">
    <div class="row">
        <div class="col-md-2">
            <?php

            include "partes/partes_menu.php";

            ?>
        </div>

        <div class="col-md-10">
            <h3 class="hey"><?php echo $nombrePagina; ?></h3>

            <hr class="ww">


            <div class="row">

                <div class="col-md-5">
                    <form action="" method="post">

                        <div class="mb-3">
                            <label class="asa" for="nombre" class="form-label">nombre de la categoria</label>
                            <input type="text" name="nombre" class="form-control" id="nombre"
                                   placeholder="Escribe el nombre de la categoria">


                        </div>

                        <div class="mb-3">
                            <button type="submit" name="enviar_categoria" class="btn btn-success">Enviar categoria
                            </button>


                        </div>

                        <?php

                        include_once "partes/partes_alerta.php";
                        ?>


                </div>


                <hr class="xv">
                <?php
                ?>
                <?php if (empty($categorias)){ ?>
                    <div class="alert alert-info" role="alert">
                        no hay registros
                    </div>
                <?php }else{ ?>
                <div class="col-md-12">
                    <div class="row">
                        <table class="table">
                            <thead class="rari">
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Acciones</th>

                            </thead>
                            <tbody>


                            <?php
                            foreach ($categorias as $categoria) {

                                echo "<tr>
                                                <th scope=\"row\">{$categoria["category_id"]}</th>
                                                <td>{$categoria["name"]}</td>
                                                <td>
                                                <button class='btn btn-outline-danger btn-sm' name='eliminarCategoria' value='{$categoria["category_id"]}'><i class='fas fa-trash'></i></button>
                                                <button class='btn btn-outline-info btn-sm' title='Editar categoria'> <i class='fas fa-pen'></i> </button>
                                                </td>
                                          </tr>";

                            }

                            ?>


                            </tbody>
                        </table>
                        </form>


                    </div>
                    <?php
                    }
                    ?>


                </div>

</body>
<?php
include_once "partes/partes_foot.php";
?>
</html>
