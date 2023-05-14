<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hak7 Store</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

  <?php

    if(isset($_GET['prod']) & isset($_GET['precio']) & isset($_GET['id'])) {
        $producto = $_GET['prod'];
        $precio = $_GET['precio']; 
        $id = $_GET['id'];
        
    } 


  ?>

    <div class="container-fluid">
        <div class="row" id="plantilla-prod">
            <div class="col-lg-8" id="info">
                <h1 class="nombre_prod"> <?php echo $producto;  ?></h1>
                <div class="container" id="img_p">
                    <img src="./img/<?php echo $id.".jpg";  ?>">
                </div>
            </div>
            <div class="col-lg-4" id="pago">
                <h3 class="titulo3"> Confirmar compra:  </h3>
                <p class="desc_prec"> Total: <?php echo $precio;  ?> €   </p>
            </div>
        </div>
    </div>


  <body id="cuerpo">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>