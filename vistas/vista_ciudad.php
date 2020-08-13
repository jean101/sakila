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
            <h3 class="ht"><?php echo $nombrePagina; ?></h3>

            <hr class="qq">

            <div class="row">

                <div class="col-md-5">

                    <form action="" method="post">
                        <input type="hidden" name="idCiudad" value="<?= $idCiudad ?>">


                        <div class="mb-3">
                            <label  for="ciudad" class="form-label">Digite la ciudad</label>
                            <input type="text" name="ciudad"  value="<?= $ciudad?>" class="form-control" id="ciudad"
                                   placeholder="Escribe la ciudad">


                        </div>
                        <div class="mb-3">


                            <label class="mt-3" for="paises">País:</label>
                            <select class="form-select  " name="paises" id="paises" value="<?= $paises ?>">

                                <option value="">Selecciona un país</option>

                                <?php

                                foreach ($ciudades as $paises){

                                    if($paises['country_id'] == $idPais){
                                        $seleccionado = "selected";
                                    } else {
                                        $seleccionado = "";
                                    }
                                    echo "<option {$seleccionado} value=\"{$paises['country_id']}\">{$paises['country']}</option>";
                                }


                                ?>

                            </select>




                        </div>

                        <div class="mb-3">
                            <button type="submit" name="guardar_informacion" class="btn btn-success"><i class="fas fa-save"></i> Guardar
                                informacion
                            </button>

                        </div>

                    </form>
                    <?php
                    include_once "partes/partes_alerta.php";
?>

                </div>


                <hr class="ya">

                <?php
                ?>
                <?php if (empty($ciudades)) { ?>
                    <div class="alert alert-info" role="alert">
                        no hay registros
                    </div>
                <?php } else { ?>

                <div class="col-md-12">
                    <form action="" method="post">
                        <div class="row">
                            <table class="table">
                                <thead class="real">
                                <th scope="col">country_id</th>
                                <th scope="col">country</th>
                                <th scope="col">city</th>
                                <th scope="col">Acciones</th>



                                </thead>
                                <tbody>

                                <?php
                                foreach ($ciudades as $ciudad) {

                                    echo "<tr>
                               <th scope=\"row\">{$ciudad["city_id"]}</th>
                               <td>{$ciudad["city"]}</td>
                               <td>{$ciudad["country"]}</td>
                               <td>
                                 <button class='btn btn-outline-danger btn-sm' name='eliminarCiudad' value='{$ciudad["city_id"]}'><i class='fas fa-trash'></i></button>
                                 <button class='btn btn-outline-info btn-sm' title='Editar ciudad ' value='{$ciudad["city_id"]}' name='editarCiudad' > <i class='fas fa-pen'></i> </button>
                                </td>
                   
                            </tr>";

                                }

                                ?>


                                </tbody>

                            </table>

                        </div>
                    </form>
                </div>
                    <?php
                }

                include_once "partes/partes_foot.php";
                ?>


            </div>

        </div>

</body>
</html>