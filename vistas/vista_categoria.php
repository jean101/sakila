<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php $nombrePagina; ?> </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>


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
            ?>
        </div>

        <div class="col-md-10">
            <h3><?php echo $nombrePagina; ?></h3>

            <hr>


            <div class="row">
            
            <div class="col-md-5">
            <form action="" method="get">
            
            <div class="mb-3">
<select name="nombre" id="nombre" class="form-select">
        <option value="">Nombre de las categorias</option>
     </select>
</div> 

<div class="mb-3">
<button type="submit" name="Enviar categoria" class="btn btn-primary">Enviar categoria</button>


</div>
            
            </form>
            
            </div>
            </div>

</body>
</html>
