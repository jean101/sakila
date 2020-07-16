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
            <h3 class="hola"><?php echo $nombrePagina; ?></h3>

            <hr class="gf">

            <div class="row">
                <div class="col-md-5">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label class="er" for="inputNombre" class="form-label">nombre</label>
                            <input type="text" name="nombre" class="form-control" id="inputNombre"
                                   placeholder="Escribe tu nombre">
                        </div>

                        <div class="mb-3">
                            <label class="ik" for="inputCiudad" class="form-label">ciudad</label>
                            <input type="text" name="ciudad" class="form-control" id="inputCiudad"
                                   placeholder="Escribe el nombre de la ciudad ">

                        </div>

                        <div class="mb-3">
                            <label class="hg" for="inputEdad" class="form-label">Edad</label>
                            <input type="text" name="Edad" class="form-control" id="inputEdad"
                                   placeholder="Escribe tu edad ">


                        </div>

                        <div class="mb-3">
                            <label class="uj" for="inputBusqueda" class="form-label">Busqueda</label>
                            <input type="text" name="Busqueda" class="form-control" id="inputBusqueda"
                                   placeholder="Escribe la busqueda ">


                        </div>

                        <div class="mb-3">
                            <label class="ds" for="inputMonto" class="form-label">Monto</label>
                            <input type="text" name="monto" class="form-control" id="inputMonto"
                                   placeholder="Escribe el monto ">


                        </div>

                        <div class="mb-3">

                            <button type="submit" name="guardar datos" class="btn btn-success">Guardar Datos</button>

                        </div>

                    </form>
                </div>

            </div>

            <hr class="ttt">


            <p class="rrr">nombre: <?php echo $nombre; ?></p>
            <p class="vvv">ciudad: <?php echo $ciudad; ?></p>
            <p class="iii">Edad: <?php echo $edad; ?></p>
            <p class="mnn">Busqueda: <?php echo $q; ?></p>
            <p class="jhh">Monto: <?php echo $monto; ?></p>

        </div>
    </div>

</div>


</body>
</html>