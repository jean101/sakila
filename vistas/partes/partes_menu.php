<nav class="nav flex-column">

<nav class="navbar navbar-light bg-primary">
  <div class="">
    <a class="navbar-brand" href="#">
      <img src="http://freevector.co/wp-content/uploads/2013/03/2333-play-button1.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
      sakila
    </a>
  </div>
</nav>
  <?php

   $paginasMenu = [

    "index"  => ["inicio", "fas fa-home"],
    "Actor"  => ["Actor", "fas fa-user-tie"],
    "Direccion"  => ["Direccion", "fas fa-map-marker-alt"],
    "ciudad"  => ["ciudad", "fas fa-city"],
    "pais"  => ["pais", "fas fa-flag"],
    "categoria"  => ["categoria", "fa fa-tag"],
    "cliente"  => ["cliente", "fa fa-user-tag"],
    "pelicula"  => ["pelicula", "fa fa-video"],
    "idioma"  => ["idioma", "fa fa-language"],
    "personal"  => ["personal", "fa fa-users"],
    "tienda"  => ["tienda", "fa fa-store"],


   ];

  foreach ($paginasMenu as $nombreArchivo => $pagina) {
  $icono = $pagina[1];
  $textoPagina = $pagina[0];

  echo "<a class=\"nav-link\" href=\"{$nombreArchivo}.php\">
  <i  class=\"{$icono} d-inline-block mr-3\" style= 'width: 20px; ' ></i>
  {$textoPagina}
  </a>";

 }


 ?>

 </nav>

