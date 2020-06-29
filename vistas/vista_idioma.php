
<body>


<nav class="navbar navbar-light bg-light">
<a class="navbar-brand" href="#">

<img src="" alt="">
</a>

</nav>



<div class="container-fluid">
<div class="row">
<div class="col-md-2">
<?php
    include "partes/partes_menu.php";
    include "partes/partes_head.php";

?>
</div>

<div class="col-md-10">
<h3 class="er"><?php echo $nombrePagina; ?></h3>


<hr>

<div class="row">

<div class="mb-5">
<div class="col-md-5">
<form action="" method="get">

<div class="mb-3">
<label for="idioma" class="form-label">Introduzca el idioma</label>
<input type="text" name="idioma" class="form-control" id="titulo" placeholder="Introduzca el idioma">

</div>
</div>
<div class="mb-3">
<input type="button" class="btn btn-success" value="guardar idioma">


</div>
</form>
</div>
</div>

</body>
</html>