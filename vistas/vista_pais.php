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

                        <div class="mb-3">
                            <label  for="pais" class="form-label qw">Digite el nombre de su pais</label>
                            <input type="text" name="pais" class="form-control" id="pais"
                                   placeholder="Digite el nombre de su pais">

                        </div>
                        <div class="mb-3">
                            <button type="submit" name="guardarPais" class="btn btn-success">guardar Pais</button>


                        </div>
                    </form>

                </div>

                <br>

                <hr class="jmm">


                <div class="col-md-9">
                    <div class="row">
                        <table class="table">
                            <thead class="real">
                            <th scope="col">country_id</th>
                            <th scope="col">Country</th>
                            </thead>
                            <tbody>


                            <?php
                            foreach ($paises as $pais) {

                                echo "<tr>
            <th scope=\"row\">{$pais["country_id"]}</th>
            <td>{$pais["country"]}</td>
         </tr>";

                            }

                            ?>


                            </tbody>

                        </table>

                    </div>

                </div>
</body>
</html>