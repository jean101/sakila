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

                        <div class="mb-3">
                            <label class="rf" for="ciudad" class="form-label">Digite la ciudad</label>
                            <input type="text" name="ciudad" class="form-control" id="ciudad"
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
                            <button type="submit" name="guardar_informacion" class="btn btn-success">guardar informacion</button>

                        </div>

                    </form>
                    <?php
                    include_once "partes/partes_alerta.php";
                    include_once "partes/partes_foot.html";
                    ?>

                </div>


                <hr class="ya">
                <div class="col-md-9">
                    <div class="row">
                        <table class="table">
                            <thead class="real">
                            <th scope="col">country_id</th>
                            <th scope="col">country</th>
                            <th scope="col">city</th>


                            </thead>
                            <tbody>

                            <?php
                            foreach ($infoPaises as $infoPais) {

                                echo "<tr>
            <th scope=\"row\">{$infoPais["city_id"]}</th>
            <td>{$infoPais["city"]}</td>
            <td>{$infoPais["country"]}</td>

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