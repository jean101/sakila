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

                include_once "partes/partes_alerta.php";
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

                    <div class="col-md-12">
                        <div class="row">
                            <form action="" method="post">
                                <table class="table">
                                    <thead class="dong">
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">apellido</th>
                                    <th scope="col">acciones</th>

                                    </thead>
                                    <tbody>


                                    <?php
                                    foreach ($actores as $actor) {

                                        echo "<tr>
                            <th scope=\"row\">{$actor["actor_id"]}</th>
                            <td>{$actor["first_name"]}</td>
                            <td>{$actor["last_name"]}</td>
                            <td>
                            <button class='btn btn-outline-danger btn-sm' name='eliminarActor' value='{$actor["actor_id"]}'><i class='fas fa-trash'></i></button>
                            <button class='btn btn-outline-info btn-sm' title='Editar actor'> <i class='fas fa-pen'></i> </button>
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

                </div>


            </div>

            <?php
            include_once "partes/partes_foot.php";
            ?>
</body>
</html>