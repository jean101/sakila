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
            <h3 class="jean"><?php echo $nombrePagina; ?></h3>

            <hr class="dd">

            <div class="row">


                <div class="col-md-3">
                    <form action="" method="post">

                        <div class="mb-3">
                            <label class="fdd" for="nombreActor" class="form-label">Nombre del actor</label>
                            <input type="text" name="nombreActor" class="form-control" id="nombreActor"
                                   placeholder="Escribe el nombre del actor">

                        </div>


                        <div class="mb-3">
                            <label class="zzz" for="apellidoActor" class="form-label">Apellido del actor</label>
                            <input type="text" name="apellidoActor" class="form-control" id="apellidoActor"
                                   placeholder="Escribe el apellido del actor">

                        </div>

                        <div class="mb-3">
                            <button type="submit" name="Guardar_actor" class="btn btn-success">Guardar actor</button>


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


                <div class="container-fluid">

                    <hr class="ya">
                    <?php
                    ?>
                    <?php if (empty($actores)){ ?>
                        <div class="alert alert-info" role="alert">
                            no hay registros
                        </div>
                    <?php }else{ ?>

                    <div class="col-md-9">
                        <div class="row">
                            <table class="table">
                                <thead class="dong">
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">apellido</th>
                                </thead>
                                <tbody>


                                <?php
                                foreach ($actores as $actor) {

                                    echo "<tr>
                            <th scope=\"row\">{$actor["actor_id"]}</th>
                            <td>{$actor["first_name"]}</td>
                            <td>{$actor["last_name"]}</td>
                         </tr>";

                                }

                                ?>


                                </tbody>

                            </table>

                        </div>

                    </div>
                    <?php
                    }
                    ?>
                </div>


            </div>

            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                    crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
                    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
                    crossorigin="anonymous"></script>
</body>
</html>