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
                            <label class="ws" for="paises"> pais</label>
                            <select name="paises" id="paises" class="form-select">
                                <option value="paises"> Elija el pais</option>

                                <?php

                                foreach ($infoPaises as $paises) {

                                    echo "  <option value=\"{$paises["country"]}\">{$paises["country"]}</option>";
                                }
                                ?>

                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="guardar_informacion" class="btn btn-success">Guardar
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
                                foreach ($infoPaises as $infoPais) {

                                    echo "<tr>
                               <th scope=\"row\">{$infoPais["city_id"]}</th>
                               <td>{$infoPais["city"]}</td>
                               <td>{$infoPais["country"]}</td>
                               <td>
                                 <button class='btn btn-outline-danger btn-sm' name='eliminarCiudad' value='{$infoPais["city_id"]}'><i class='fas fa-trash'></i></button>
                                 <button class='btn btn-outline-info btn-sm' title='Editar ciudad ' value='{$infoPais["city_id"]}' name='editarCiudad' > <i class='fas fa-pen'></i> </button>
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