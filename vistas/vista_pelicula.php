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
            <h3 class="as"><?php echo $nombrePagina; ?></h3>


            <hr class="zz">

            <div class="row">

                <div class="col-md-5">

                    <form action="" method="post">

                        <div class="mb-3">
                            <label class="aaa" for="titulo" class="form-label">Titulo</label>
                            <input type="text" name="titulo" class="form-control" id="titulo"
                                   placeholder="Escribe el titulo">

                        </div>

                        <div class="mb-3">
                            <label class="jjj" for="Descripcion" class="form-label">Descripcion</label>
                            <input type="text" name="Descripcion" class="form-control" id="Descripcion"
                                   placeholder="Descripcion">

                        </div>


                        <div class="mb-3">
                            <label class="qdfg" for="lanzamiento" class="form-label">Lanzamiento</label>
                            <input type="text" name="lanzamiento" class="form-control" id="lanzamiento"
                                   placeholder="Lanzamiento">

                        </div>

                        <br>

                        <div class="mb-3">
                            <label class="jjkkl" for="idioma1"> selecciona el idioma principal</label>
                            <select name="idioma1" id="idioma1" class="form-select">
                                <option value=""> selecciona el idioma principal</option>
                                <?php

                                foreach ($idiomas as $idioma) {

                                    echo "  <option value=\"{$idioma["language_id"]}\">{$idioma["name"]}</option>";
                                }
                                ?>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="jjkkl" for="idioma2"> selecciona el idioma secundario</label>
                            <select name="idioma2" id="idioma2" class="form-select">
                                <option value=""> selecciona el idioma secundario</option>
                                <?php

                                foreach ($idiomas as $idioma) {

                                    echo "  <option value=\"{$idioma["language_id"]}\">{$idioma["name"]}</option>";
                                }
                                ?>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="gttt" for="duracion" class="form-label">duracion de renta</label>
                            <input type="text" name="duracion" class="form-control" id="duracion"
                                   placeholder="duracion">

                        </div>

                        <div class="mb-3">
                            <label class="grrr" for="arrendamiento" class="form-label">tasa de arrendamiento</label>
                            <input type="text" name="arrendamiento" class="form-control" id="arrendamiento"
                                   placeholder="arrendamiento">

                        </div>

                        <div class="mb-3">
                            <label class="binn" for="tamaño" class="form-label">tamaño</label>
                            <input type="text" name="tamaño" class="form-control" id="tamaño" placeholder="tamaño">

                        </div>

                        <div class="mb-3">
                            <label class="bang" for="remplazo" class="form-label">costo de reemplazo</label>
                            <input type="text" name="remplazo" class="form-control" id="remplazo"
                                   placeholder="remplazo">

                        </div>

                        <div class="mb-3">
                            <label class="trap" for="clasificacion" class="form-label">clasificacion</label>
                            <input type="text" name="clasificacion" class="form-control" id="clasificacion"
                                   placeholder="clasificacion">

                        </div>

                        <div class="mb-3">
                            <label class="traper" for="caracteristicas" class="form-label">caracteristicas
                                especiales</label>
                            <input type="text" name="caracteristicas" class="form-control" id="caracteristicas"
                                   placeholder="caracteristicas">

                        </div>

                        
                        <div class="mb-3">
                            <button type="submit" name="guardar_descripcion" class="btn btn-success">Guardar descripcion
                            </button>

                        </div>
                    </form>
                </div>


                <?php
                include_once "partes/partes_alerta.php";
                include_once "partes/partes_foot.html";
                ?>

                <hr class="ya">
                <div class="col-md-9">
                    <div class="row">
                        <table class="table">
                            <thead class="real">
                            <th scope="col">id de la pelicula</th>
                            <th scope="col">titulo</th>
                            <th scope="col">descripcion</th>
                            <th scope="col">año de lanzamiento</th>
                            <th scope="col">idioma oficial</th>
                            <th scope="col">idioma secundarion</th>
                            <th scope="col">Duracion de renta</th>
                            <th scope="col">rental rate</th>
                            <th scope="col">longitud</th>
                            <th scope="col">costo de reemplazo</th>
                            <th scope="col">clasificacion</th>
                            <th scope="col">caracteristicas especiales</th>


                            </thead>
                            <tbody>

                            <?php
                            foreach ($infoPeliculas as $infoPelicula) {

                                echo "<tr>
            <th scope=\"row\">{$infoPelicula["film_id"]}</th>
            <td>{$infoPelicula["title"]}</td>
            <td>{$infoPelicula["description"]}</td>
            <td>{$infoPelicula["release_year"]}</td>
            <td>{$infoPelicula["name"]}</td>
            <td>{$infoPelicula["name"]}</td>
            <td>{$infoPelicula["rental_duration"]}</td>
            <td>{$infoPelicula["rental_rate"]}</td>
            <td>{$infoPelicula["length"]}</td>
            <td>{$infoPelicula["replacement_cost"]}</td>
            <td>{$infoPelicula["rating"]}</td>
            <td>{$infoPelicula["special_features"]}</td>


         </tr>";

                            }

                            ?>


                            </tbody>

                        </table>

                    </div>


                </div>


            </div>


</body>
</html>