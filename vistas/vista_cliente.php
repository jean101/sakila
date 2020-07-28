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
            <h3 class="we"><?php echo $nombrePagina; ?></h3>

            <hr class="aa">

            <div class="row">

                <div class="col-md-5">

                    <form action="" method="post">
                        <div class="mb-3">
                            <label class="cx" for="tienda"> seleccione el id tienda</label>
                            <select name="tienda" id="tienda" class="form-select">
                                <option value=""> seleccione el id tienda</option>

                                <?php

                                foreach ($tiendas as $tienda) {

                                    echo "  <option value=\"{$tienda["store_id"]}\">{$tienda["store_id"]}</option>";
                                }
                                ?>


                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="bvc" for="nombre">primer nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>


                        <div class="mb-3">
                            <label class="mnb" for="nombre2">segundo nombre</label>
                            <input type="text" name="nombre2" id="nombre2" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="rew" for="email">Introduzca el email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="qwe" for="IDdireccion"> direccion</label>
                            <select name="direccion" id="IDdireccion" class="form-select">
                                <option value=""> direccion</option>

                                <?php

                                foreach ($direcciones as $direccion) {

                                    echo "  <option value=\"{$direccion["address_id"]}\">{$direccion["address"]}</option>";
                                }
                                ?>
                            </select>

                            <div class="mt-5">


                                <div class="qazx" class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Activo
                                    </label>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" name="guardar_datos" class="btn btn-success">Guardar datos</button>


                                </div>


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
                            <th scope="col">customer_id</th>
                            <th scope="col">store_id</th>
                            <th scope="col">first_name</th>
                            <th scope="col">last_name</th>
                            <th scope="col">email</th>
                            <th scope="col">address</th>
                            <th scope="col">active</th>

                            </thead>
                            <tbody>

                            <?php
                            foreach ($infoClientes as $infoCliente) {


                                if ($infoCliente['active'] == 1) {
                                 $icono = '<i class=\'fas fa-check text-success\'> </i>';
                                } else{

                                $icono = '<i class=\'fas-fa-times text-danger\'></i>';
                                }
                                echo "<tr>
                                <td>{$infoCliente["customer_id"]}</td>
                                <td>{$infoCliente["store_id"]}</td>
                                <td> . ucwords (srtolower{$infoCliente["name"]}) .</td>
                                <td>{$infoCliente["email"]}</td>
                                <td>{$infoCliente["address"]}</td>
                                <td>{$infoCliente["active"]}
                                
                                 <i class='fas-fa check text-sucess'></i>
                                 <i class='fas-fa times text-danger'></i>

                            </td>  
                            <td>{$infoCliente["fecha"]}</td>
                           
                         </tr>";

                            }

                            ?>


                            </tbody>

                        </table>

                    </div>


                </div>

</body>
</html>