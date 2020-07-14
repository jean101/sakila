<nav class="nav flex-column ">
    <a class="navbar-brand text-white bg-primary" href="#">Sakila</a>

    <?php

    $paginasMenu = [

        "index" => ["inicio", "fas fa-home"],
        "Actor" => ["Actor", "fas fa-user-tie"],
        "Direccion" => ["Direccion", "fas fa-map-marker-alt"],
        "ciudad" => ["ciudad", "fas fa-city"],
        "pais" => ["pais", "fas fa-flag"],
        "categoria" => ["categoria", "fa fa-tag"],
        "cliente" => ["cliente", "fa fa-user-tag"],
        "pelicula" => ["pelicula", "fa fa-video"],
        "idioma" => ["idioma", "fa fa-language"],
        "personal" => ["personal", "fa fa-users"],
        "tienda" => ["tienda", "fa fa-store"]];


    $url = $_SERVER['REQUEST_URI'];

    foreach ($paginasMenu as $nombreArchivo => $item) {

        $paginaActual = "";
        if (strpos($url, $nombreArchivo)) {
            $paginaActual = "activo";

        }

        $icono = $item[1];
        $textoPagina = $item[0];

        echo "<a class=\"nav-link {$paginaActual} \" href=\"{$nombreArchivo}.php\"> <i class=\"{$icono}\"></i>  <span> {$textoPagina}</span></a>";
    }


    ?>

</nav>

