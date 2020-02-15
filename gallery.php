<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Galeria - DISTPROLAB</title>

<!--  ESTILOS DE CSS QUE VIENE POR DEFECTO -->
<?php require_once 'php/css.php'; ?>
<link rel="stylesheet" type="text/css" href="css/galeria.css">
    <!-- FIN DE LOS ESTILOS CSS-->
</head>

<body>
    <!-- Preloader -->
    <!-- ***** Header Area Start ***** -->
   <?php include "php/menu.php";?>
    <!-- ***** Header Area End ***** -->

    <section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(img/bg-img/hero5.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <!-- Title -->
                        <h3 class="breadcumb-title">Galeria</h3>
                        <!-- Breadcumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="ion-ios-circle-outline"></i>Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">galeria</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main text-center">
  <div class="container">
   
   
    <ul class="list-unstyled row">
      <li class="col-md active" data-class="all">TODO</li>
      <li class="col-md" data-class="design">ASESORAMIENTO</li>
      <li class="col-md" data-class="development">APLICACION</li>
      <li class="col-md" data-class="graphic">CONSULTA</li>
      <li class="col-md" data-class="seo">SERVICIO IT</li>
      <li class="col-md" data-class="ui">SERVICIO TECNICO</li>
      <li class="col-md" data-class="ser">SERVICIO REMOTO</li>
    </ul>
  </div>
  <div class="container-fluid ">
    <div class="col-md-3 images" data-class="ui">
      <img src="https://picsum.photos/300/200?random=1" alt="">
    </div>
    <div class="col-md-3 images" data-class="development">
      <img src="https://picsum.photos/300/200?random=2" alt="">
    </div>
    <div class="col-md-3 images" data-class="ser">
      <img src="https://picsum.photos/300/200?random=3" alt="">
    </div>
    <div class="col-md-3 images" data-class="design">
      <img src="https://picsum.photos/300/200?random=4" alt="">
    </div>
    <div class="col-md-3 images" data-class="development">
      <img src="https://picsum.photos/300/200?random=5" alt="">
    </div>
    <div class="col-md-3 images" data-class="design">
      <img src="https://picsum.photos/300/200?random=6" alt="">
    </div>
    <div class="col-md-3 images" data-class="graphic">
      <img src="https://picsum.photos/300/200?random=7" alt="">
    </div>
    <div class="col-md-3 images" data-class="seo">
      <img src="https://picsum.photos/300/200?random=8" alt="">
    </div>
  </div>
</section>
 
   <!---Footer Starts--->
   <?php include "php/footer.php";?>
	<!---Footer Ends--->
    
    <!-- JAVACRIPT POR DEFECTO -->
    <?php require_once 'php/js.php'; ?>
    <script src="js/galeria.js"></script>

</body>

</html>