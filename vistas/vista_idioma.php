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
            <h3 class="er"><?php echo $nombrePagina; ?></h3>


            <hr class="ff">

            <div class="row">

                <div class="mb-5">
                    <div class="col-md-5">

                        <form action="" method="post">
                            <input type="hidden" name="idIdioma" value="<?= $idIdioma ?>">
                            <div class="mb-3">
                                <label for="lenguaje" class="form-label">Digite el idioma</label>
                                <input type="text" name="lenguaje" value="<?= $lenguaje ?>" class="form-control"
                                       id="lenguaje"
                                       placeholder="Digite el idioma">

                            </div>

                            <div class="mb-3">

                                <button type="submit" name="guardar_lenguaje" class="btn btn-success"><i class="fas fa-save"></i> Guardar datos
                                </button>

                            </div>
                        </form>

                    </div>
                </div>

            </div>
            <?php

            include_once "partes/partes_alerta.php";
            ?>

            <hr class="byb">
            <?php
            ?>
            <?php if (empty($idiomas)) { ?>
                <div class="alert alert-info" role="alert">
                    no hay registros
                </div>
            <?php } else { ?>
                <div class="col-md-12">
                    <form action="" method="post">
                        <div class="row">
                            <table class="table">
                                <thead class="ding">
                                <th scope="col">language_id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Acciones</th>

                                </thead>
                                <tbody>


                                <?php
                                foreach ($idiomas as $idioma) {

                                    echo "<tr>
                        <th scope=\"row\">{$idioma["language_id"]}</th>
                        <td>{$idioma["name"]}</td>
                        <td>
                                        <button class='btn btn-outline-danger btn-sm' name='eliminarIdiomas' value='{$idioma["language_id"]}'><i class='fas fa-trash'></i></button>
                                        <button class='btn btn-outline-info btn-sm' title='Editar Idioma' value='{$idioma["language_id"]}' name='editarIdioma'> <i class='fas fa-pen'></i> </button>
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