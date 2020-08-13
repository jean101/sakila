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

                    <form action="" method="post">

                        <div class="mb-3">
                            <label class="ssss" for="direccion"> Direccion de la tienda</label>
                            <select name="direccion" id="direccion" class="form-select">
                                <option value="" selected="true" disabled="disabled">Direccion de la tienda</option>

                                <?php

                                foreach ($direcciones as $direccion) {

                                    echo "<option value=\"{$direccion["address_id"]}\">{$direccion["address"]} </option>";

                                }

                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="sss" for="manager"> manager de la tienda</label>
                            <select name="manager" id="manager" class="form-select">
                                <option value="" selected="true" disabled="disabled">manager de la tienda</option>


                                <?php

                                foreach ($gerentes as $gerente) {

                                    echo "<option value=\"{$gerente["staff_id"]}\">{$gerente["first_name"]} {$gerente["last_name"]}</option>";

                                }

                                ?>
                            </select>
                        </div>

                        <div class="mb-3">

                            <button type="submit" name="guardar_informacion" class="btn btn-success"> <i class="fas fa-save"></i> Guardar
                                Informacion
                            </button>

                        </div>

                        <hr class="ww">
                        <?php
                        ?>
                        <?php if (empty($informacionTiendas)) { ?>
                            <div class="alert alert-info" role="alert">
                                no hay registros
                            </div>
                        <?php } else { ?>


                        <div class="col-md-12">
                            <div class="row">
                                <table class="table">
                                    <thead>
                                    <th scope="col">store_id</th>
                                    <th scope="col">first_name</th>


                                    <th scope="col">address</th>

                                    </thead>
                                    <tbody>


                                    <?php
                                    foreach ($informacionTiendas as $informacionTienda) {

                                        echo "<tr>
            <th scope=\"row\">{$informacionTienda["store_id"]}</th>
            <td>{$informacionTienda["first_name" ]} {$informacionTienda["last_name"]}</td>  

            <td>{$informacionTienda["address"]}</td>


         </tr>";

                                    }

                                    ?>


                                    </tbody>

                                </table>

                            </div>


                    </form>
                    <?php
                    include_once "partes/partes_alerta.php";

                    include_once "partes/partes_foot.php";
                    ?>
                </div>
                <?php } ?>


            </div>
