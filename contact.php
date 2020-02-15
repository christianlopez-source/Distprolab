<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Cotacto - DISTPROLAB</title>

<!--  ESTILOS DE CSS QUE VIENE POR DEFECTO -->
<?php require_once 'php/css.php'; ?>
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
                        <h3 class="breadcumb-title">Contacto</h3>
                        <!-- Breadcumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="ion-ios-circle-outline"></i>Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contaco</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="medica-contact-area section_padding_100">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <h5 class="mb-50">Consultenos</h5>

                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Celular">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Gmail">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn medica-btn btn-3 mt-3">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Medica Emergency Card -->
                        <div class="medica-emergency-card mb-4">
                            <h5>For Emergencies</h5>
                            <h4>044540456</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <!-- Medica Appointment Card -->
                        <div class="medica-contact-card">
                            <h5>Información útil</h5>
                            <div class="mt-50"></div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <img src="img/icons/alarm-clock.png" alt="">
                                </div>
                                <div class="contact-meta">
                                    <p>Lunes a viernes 09:00 - 17:00 <br> Sábado y Domingo - CERRADO</p>
                                </div>
                            </div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <img src="img/icons/envelope.png" alt="">
                                </div>
                                <div class="contact-meta">
                                    <p>0999999999 | 044540456 <br> distprolab@gmail.com</p>
                                </div>
                            </div>
                            <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-icon mr-30">
                                    <img src="img/icons/map-pin.png" alt="">
                                </div>
                                <div class="contact-meta">
                                    <p>Parque Empresarial Colón <br>Edificio Mezzanine oficina 10</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <div class="map-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--<div id="googleMap" class="googleMap"></div>-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15948.022075650691!2d-79.91352255560298!3d-2.151573195653467!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd5f5e1dbeedee1e2!2sProduquimes%20S.%20A.!5e0!3m2!1ses-419!2sec!4v1567918987775!5m2!1ses-419!2sec" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>

   <!---Footer Starts--->
   <?php include "php/footer.php";?>
	<!---Footer Ends--->
    
    <!-- JAVACRIPT POR DEFECTO -->
    <?php require_once 'php/js.php'; ?>

</body>

</html>