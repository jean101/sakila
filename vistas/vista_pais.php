<?php
include_once "partes/partes_head.php";
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
            <h3 class="uy"><?php echo $nombrePagina; ?></h3>

            <hr class="jj">

            <div class="row">

                <div class="col-md-5">
                    <form action="" method="post">
                        <input type="hidden" name="idPais" value="<?= $idPais ?>">

                        <div class="mb-3">
                            <label for="pais" class="form-label qw">Digite el nombre de su pais</label>
                            <input type="text" name="pais" value="<?= $pais?>" class="form-control" id="pais"
                                   placeholder="Digite el nombre de su pais">

                        </div>
                        <div class="mb-3">
                            <button type="submit" name="guardarPais" class="btn btn-success">Guardar Pais</button>


                        </div>
                    </form>

                </div>


                <?php

               include_once "partes/partes_alerta.php";
                ?>


                <br>

                <hr class="jmm">
                <?php
                ?>
                <?php if (empty($paises)) { ?>
                    <div class="alert alert-info" role="alert">
                        no hay registros
                    </div>
                <?php } else { ?>


                    <div class="col-md-12">
                        <div class="row">
                            <form action="" method="post">

                                    <table class="table">
                                        <thead class="real">
                                        <th scope="col">country_id</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Acciones</th>

                                        </thead>
                                        <tbody>


                                        <?php
                                        foreach ($paises as $pais) {

                                            echo "<tr>
                                                           <th scope=\"row\">{$pais["country_id"]}</th>
                                                           <td>{$pais["country"]}</td>
                                                           <td>
                                                                   <button class='btn btn-outline-danger btn-sm' name='eliminarPais' value='{$pais["country_id"]}'><i class='fas fa-trash'></i></button>
                                                                   <button class='btn btn-outline-info btn-sm' title='Editar pais ' value='{$pais["country_id"]}' name='editarPais' > <i class='fas fa-pen'></i> </button>
                                                           </td>
                                                        </tr>";

                                        }
                                        ?>


                                        </tbody>

                                    </table>
                                </form>
                            </form>

                        </div>
                        <?php
                        }

                        include_once "partes/partes_foot.php";
                        ?>



                    </div>

</body>

</html>