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

                            <div class="mb-3">
                                <label class="rf" for="lenguaje" class="form-label">Digite el idioma</label>
                                <input type="text" name="lenguaje" class="form-control" id="lenguaje"
                                       placeholder="Digite el idioma">


                            </div>

                    </div>
                </div>
                <div class="mb-3">

                    <button type="submit" name="guardar_lenguaje" class="btn btn-success">Guardar datos</button>

                </div>
                </form>
            </div>

            <?php

            if (isset($error)) {

                echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                       {$error};
                   <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>";


            }

            if (isset($mensaje)) {

                echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                       {$mensaje};
                   <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>";
            }
            ?>

            <hr class="byb">

            <div class="col-md-9">
                <div class="row">
                    <table class="table">
                        <thead class="ding">
                        <th scope="col">language_id</th>
                        <th scope="col">Nombre</th>
                        </thead>
                        <tbody>


                        <?php
                        foreach ($idiomas as $idioma) {

                            echo "<tr>
            <th scope=\"row\">{$idioma["language_id"]}</th>
            <td>{$idioma["name"]}</td>
         </tr>";

                        }

                        ?>


                        </tbody>

                    </table>

                </div>
            </div>

</body>
</html>