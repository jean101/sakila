<?php
include "partes/partes_head.php";

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
            <h3 class="bn"><?php echo $nombrePagina; ?></h3>

            <hr class="pq">

            <div class="row">

                <div class="col-md-5">

                    <form action="" method="post">


                        <div class="mb-3">
                            <label class="fds" for="nombre">Introduzca su nombre</label>
                            <input type="text" name="nombre" value="<?php echo $nombre ?>" id="nombre"
                                   class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="tre" for="apellido">Introduzca el apellido</label>
                            <input type="text" name="apellido" value="<?php echo $apellido ?>" id="apellido"
                                   class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="jhl" for="direccion"> Direccion</label>
                            <select name="direccion" value="<?php echo $idDireccion ?>" id="direccion"
                                    class="form-select">
                                <option value="">Direccion</option>

                                <?php

                                foreach ($direcciones as $direccion) {

                                    echo "  <option value=\"{$direccion["address_id"]}\">{$direccion["address"]}</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-file">

                            <input type="file" name="imagen" value="<?php echo $imagen ?>" class="form-file-input"
                                   id="imagen">


                            <label class="form-file-label" for="imagen">
                                <span class="form-file-text">Elegir imagen...</span>
                                <span class="form-file-button">imagen</span>

                            </label>
                        </div>

                        <div class="mb-3">
                            <label class="yut" for="email">Introduzca su email</label>
                            <input type="text" name="email" value="<?php echo $email ?>" id="email"
                                   class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="iou" for="tienda"> tienda</label>
                            <select name="tienda" value="<?php echo $idTienda ?>" id="tienda" class="form-select">
                                <option value=""> tienda</option>

                                <?php

                                foreach ($tiendas as $tienda) {

                                    echo "  <option value=\"{$tienda["store_id"]}\">{$tienda["store_id"]}</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="qazx" class="form-check">
                            <input class="form-check-input" name="activo" value="<?php echo $activo ?>" type="checkbox"
                                   value="" id="activo">
                            <label class="form-check-label" for="activo">
                                Activo
                            </label>
                        </div>

                        <div class="mb-3">
                            <label class="red" for="username">Nombre que utiliza el usuario</label>
                            <input type="text" name="username" value="<?php echo $username ?>" id="username"
                                   class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="wwr" for="password">Introduzca su contraseña</a></label>
                            <input type="text" name="password" value="<?php echo $password ?>" id="password"
                                   class="form-control">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="guardar_usuario" class="btn btn-success">Enviar informacion
                            </button>


                    </form>

                </div>


                <?php

               include_once "partes/partes_alerta.php";
                ?>


                <hr class="ya">
                <?php
                ?>
                <?php if (empty($infoPersonales)) { ?>
                    <div class="alert alert-info" role="alert">
                        no hay registros
                    </div>
                <?php } else { ?>

                <div class="col-md-12">
                    <form action="" method="post">
                        <div class="row">
                            <table class="table">
                                <thead class="real">
                                <th scope="col">staff_id</th>
                                <th scope="col">first_name</th>
                                <th scope="col">last_name</th>
                                <th scope="col">address</th>
                                <th scope="col">email</th>
                                <th scope="col">store_id</th>
                                <th scope="col">active</th>
                                <th scope="col">username</th>
                                <th scope="col">password</th>


                                </thead>
                                <tbody>

                                <?php
                                foreach ($infoPersonales as $infoPersonal) {

                                    echo "<tr>
                                <th scope=\"row\">{$infoPersonal["staff_id"]}</th>
                                <td>{$infoPersonal["first_name"]}</td>
                                <td>{$infoPersonal["last_name"]}</td>
                                <td>{$infoPersonal["address"]}</td>
                                <td>{$infoPersonal["email"]}</td>
                                <td>{$infoPersonal["store_id"]}</td>
                                <td>{$infoPersonal["active"]}</td>
                                <td>{$infoPersonal["username"]}</td>
                                <td>{$infoPersonal["password"]}</td>
                    
                    
                             </tr>";

                                }

                                ?>


                                </tbody>

                            </table>

                        </div>

                    </form>
                </div>
                <?php
                include_once "partes/partes_foot.php";
                }
                ?>

</body>

</html>