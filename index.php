<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>DISTPROLAB</title>

<!--  ESTILOS DE CSS QUE VIENE POR DEFECTO -->
<?php require_once 'php/css.php'; ?>
<!-- FIN DE LOS ESTILOS CSS-->
</head>

<script type="text/javascript">
function correoA(){
    var nombre = document.getElementById("nombreA").value;// 
    var servicios = document.getElementById("serviciosA").value;// 
    var celular = document.getElementById("celularA").value;// 
    var email = document.getElementById("emailA").value;// 
    var fecha = document.getElementById("fechaA").value;// 

    var bandera = 0;//validar bandera 
    if(fecha != ''){
        bandera = 1;
    }else{ alert('la fecha no puede estar vacia');}
    
    var parametros = {
        "nombre" : nombre,
        "servicios" : servicios,
        "celular" : celular,
        "email" : email,
        "fecha" : fecha
    };  
    //alert(tip);

    $.ajax({
        data:  parametros,
        url:   'php/correo.php',
        type:  'post',
        dataType: "json",
        success:  function (response) {
            alert(response);
            /*if(response == 1){
                alert('se encio el correo');
            }else{ alert('no se envio el correo'); }*/
                
            //var date = response.FECHA_NAC.date.split(" ");
               // var fecha = date[0].split("-");

                //$("#seguro").val(response.segur).change();
                //document.getElementById("seguro").value = response.segur.trim();
                //$("#nombre").val(response.NOMBRE);
                //alert(response.SEXO); 
            //}
           //// else{
               // $("#numclient").val(-1);
            //}
        }
    });
}

function correoB(){
    var nombre = document.getElementById("nombreB").value;// 
    var servicios = document.getElementById("serviciosB").value;// 
    var celular = document.getElementById("celularB").value;// 
    var email = document.getElementById("emailB").value;// 
    var fecha = document.getElementById("fechaB").value;// 

    var bandera = 0;//validar bandera 
    if(fecha != ''){
        bandera = 1;
    }else{ alert('la fecha no puede estar vacia');}
    
    var parametros = {
        "nombre" : nombre,
        "servicios" : servicios,
        "celular" : celular,
        "email" : email,
        "fecha" : fecha
    };  
    //alert(tip);

    $.ajax({
        data:  parametros,
        url:   'php/correo.php',
        type:  'post',
        dataType: "json",
        success:  function (response) {
            alert(response);
            
            /*if(response == 1){
                alert('se encio el correo');
            }else{ alert('no se envio el correo'); }*/


                //var date = response.FECHA_NAC.date.split(" ");
               // var fecha = date[0].split("-");

                //$("#seguro").val(response.segur).change();
                //document.getElementById("seguro").value = response.segur.trim();
                //$("#nombre").val(response.NOMBRE);
                //alert(response.SEXO); 
            //}
           //// else{
               // $("#numclient").val(-1);
            //}
        }
    });
}
</script>

<body>
    <!-- ***** Header Area Start ***** -->
   <?php include "php/menu.php";?>
    <!--***** Header Area End ***** -->

    <!-- ***** Hero Area Start ***** -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide height-800 bg-img" style="background-image: url(imagenes/slider1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Bienvenido a Distprolab </h2>
                                <h5 data-animation="fadeInUp" data-delay="400ms">La mejor via para implementar su laboratorio</h5>
                                <div class="slide-btn-group mt-50" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="#" class="btn medica-btn">Consultenos </a>
                                    <a href="login/" class="btn medica-btn ml-2 btn-2">Iniciar Sesion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide height-800 bg-img" style="background-image: url(imagenes/slider2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Bienvenido a Distprolab </h2>
                                <h5 data-animation="fadeInUp" data-delay="400ms">La mejor via para implementar su laboratorio</h5>
                                <div class="slide-btn-group mt-50" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="#" class="btn medica-btn">Consultenos</a>
                                    <a href="login/" class="btn medica-btn ml-2 btn-2">Iniciar Sesion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide height-800 bg-img" style="background-image: url(imagenes/SEL_3339_copia.jpg); position: absoluta; margin-bottom: 60px">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                            <h2 data-animation="fadeInUp" data-delay="100ms">Bienvenido a Distprolab </h2>
                                <h5 data-animation="fadeInUp" data-delay="400ms">La mejor via para implementar su laboratorio</h5>
                                <div class="slide-btn-group mt-50" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="#" class="btn medica-btn">Consultenos</a>
                                    <a href="login/" class="btn medica-btn ml-2 btn-2">Iniciar Sesion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Contact Info Area Start ***** -->
    <div class="medica-contact-info-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-contact-info d-flex align-items-center">
                        <div class="contact-icon mr-30">
                            <img src="img/icons/alarm-clock.png" alt="">
                        </div>
                        <div class="contact-meta">
                            <p>Lunes a viernes 09:00 - 17:00 </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-contact-info d-flex align-items-center">
                        <div class="contact-icon mr-30">
                            <img src="img/icons/envelope.png" alt="">
                        </div>
                        <div class="contact-meta">
                            <p>044540456 <br> distprolab@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-contact-info d-flex align-items-center">
                        <div class="contact-icon mr-30">
                            <img src="img/icons/map-pin.png" alt="">
                        </div>
                        <div class="contact-meta">
                            <p>Parque Empresarial Colón <br> Edifico Empresarial 2  Mezzanine oficina 10 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Info Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="medica-about-us-area">
        <!-- Card Area -->
        <div class="medica-card-area">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="medica-emergency-card wow fadeInUp" data-wow-delay="0.2s">
                            <h5>Mision</h5>
                            
                            <p>Como Distprolab, estamos comprometidos a brindar asesoramiento, soporte y productos de la más alta calidad en el mercado, representando marcas conocidas a nivel mundial, para así satisfacer las necesidades de nuestros clientes.</p>
                            
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="medica-doctors-card wow fadeInUp" data-wow-delay="0.4s">
                            <h5>Vision</h5>
                            <p>Ser una empresa Líder en el mercado, reconocida a nivel nacional e internacional por la innovación, asesoramiento y calidad de los productos que comercializamos y lograr así una relación comercial basada en la confianza y profesionalismo con nuestros clientes.</p>
                            
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="medica-appointment-card wow fadeInUp" data-wow-delay="0.6s">
                            <h5>Agendar Cita</h5>
                            <form action="php/contact_form.php" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control text-white" name="nombreA" id="nombreA" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        
                                        <select class="form-control" id="serviciosA">
                                            
                                            <option>Servicio Tecnico</option>
                                            <option>Servicio IT</option>
                                            <option>Aplicaciones</option>
                                            <option>Visita Tecnica</option>
                                            <option>Servicio remoto</option>
                                            <option>Asesoramiento</option>
                                            <option>Consulta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="celularA" id="celularA" placeholder="Celular">
                                    </div>
                                </div>
                                <!--<div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        <select class="form-control" id="doctors">
                                            <option>Dr. Riyadh Khan</option>
                                            <option>Dr. Kumkum Rashid</option>
                                            <option>Dr. Lim Sarah</option>
                                        </select>
                                    </div>
                                </div>-->
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="emailA" id="emailA" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <input type="date" class="form-control" name="fechaA" id="fechaA">
                                    </div>
                                </div>

                                <div class="text-input">
  <input type="text" id="input1" placeholder="Escribe algo">
  
</div>

                                <div class="col-12">
                                    <button type="button"  onclick="correoA();" class="btn medica-btn mt-15">Consultenos</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Contact -->
        <div class="medica-about-content section_padding_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="medica-about-text">
                            <h2>Bienvenido a<span> DISTPROLAB</span></h2>
                            <p>Somos una empresa proveedora de servicios y productos de alta calidad para el análisis de pruebas de diagnóstico clínico.</p>
                            <ul>
                                <li>Servicio Tecnico</li>
                                <li>Servicio IT</li>
                                <li>Aplicaciones</li>
                                <li>Consultoria</li>
                                <li>Servicio Remoto</li>
                                <li>Asesoramiento</li>
                                
                            </ul>
                            <a href="#" class="btn medica-btn btn-2">Leer mas</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="medica-about-thumbnail">
                            <img src="imagenes/SEL_3339_copia.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

      <!-- ***** antes-despues ***** -->
<!--
      <section class="works main-section-container" id="works">
        <div class="fixed-wrapper right col-md-1">
            <p>NUESTROS TRABAJOS</p>
        </div>

        <div class="row"   >
            <div class="container images-tab">
                <div class="section-title col-md-6 col-sm-6 col-sx-12">
                    <div class="section-name-wrapper">
                        <div class="line"></div>
                        <h3>nuestros trabajos</h3>
                    </div>
                    <h2>Antes &amp; Después</h2>
                </div>

                <div class="photo-wrapper col-md-6 col-sm-6 col-sx-12">
                    <figure class="cd-image-container img-wrapper active image-1 is-visible">
                        <img src="img/bg-img/after1-img.jpg" alt="after">
                        <span class="cd-image-label" data-type="original"></span>

                        <div class="cd-resize-img" style="width: 0.221327%;"> 
                            <img src="img/bg-img/before1-img.jpg" alt="before">
                            <span class="cd-image-label is-hidden" data-type="modified"></span>
                        </div>

                        <span class="cd-handle" style="left: 0.221327%;"></span>
                    </figure>

                    <figure class="cd-image-container img-wrapper image-2 is-visible">
                        <img src="img/bg-img/after1-img.jpg" alt="after">
                        <span class="cd-image-label is-hidden" data-type="original"></span>

                        <div class="cd-resize-img">
                            <img src="img/bg-img/after1-img.jpg" alt="before">
                            <span class="cd-image-label is-hidden" data-type="modified"></span>
                        </div>

                        <span class="cd-handle"></span>
                    </figure>

                    <figure class="cd-image-container img-wrapper image-3 is-visible">
                        <img url="img/bg-img/after1-img.jpg" alt="after">
                        <span class="cd-image-label is-hidden" data-type="original"></span>

                        <div class="cd-resize-img"> 
                            <img url="img/bg-img/before1-img.jpg" alt="before">
                            <span class="cd-image-label is-hidden" data-type="modified"></span>
                        </div>

                        <span class="cd-handle"></span>
                    </figure>
                </div>

                <div class="text-wrapper col-md-6 col-sm-6 col-xs 12">

                    <div class="descriptions-wrapper col-md-8 col-sm-12">



                            <div class="description-box" data-target="image-3">
                            	
                            		<p class="cursor" style="
                            		cursor:default;	
                            		">Visita nuestra galeria de trabajos realizados en nuestras diferentes áreas</p>
                              
					<div class="flex dark">
  				<a href="galeria.html" class="bttn-dark">Galeria</a>
					</div>
                                <img url="img/bg-img/orange-triangle.png" alt="">
                         

           

	

</section> -->

    <!-- ***** Services Area Start ***** -->
    <section class="medica-services-area section_padding_100 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/service.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading white-heading">
                        <!--<img src="img/icons/hospital2.png" alt="">-->
                        <h2>Nuestros Servicios</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area wow fadeInUp" data-wow-delay="0.2s">
                        <img src="img/icons/hospital.png" alt="">
                        <h5>Servicio Tecnico</h5>
                        <p>La compañía ofrece una atención integral que incluye la instalación del equipo, explicación 
                        del funcionamiento, mantenimiento y hasta reparación del mismo con el soporte técnico de origen y los repuestos originales de fábrica.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area wow fadeInUp" data-wow-delay="0.3s">
                        <img src="img/icons/blood.png" alt="">
                        <h5>Servicio IT</h5>
                        <p>Obtenga los servicios de TI que necesita su empresa de la mano de especialistas certificados, y potencie su infraestructura 
                        para afrontar con éxito los futuros desafíos tecnológicos que plantea el negocio.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area wow fadeInUp" data-wow-delay="0.4s">
                        <img src="img/icons/ambulance.png" alt="">
                        <h5>Aplicaciones</h5>
                        <p>Tiene la responsabilidad de dar soporte a la automatización del sistema de información corporativo; del mismo modo, 
                        colabora en la planificación y modernización de los procesos administrativos de la Empresa</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/icons/nuclear.png" alt="">
                        <h5>Servicio Remoto</h5>
                        <p> Trabajamos con un software que enlaza su ordenador con  nuestro servicio en tiempo real, 
                            de esta manera podremos tomar momentáneamente el control de sus equipos y realizar sesiones de soporte y 
                            ayuda en configuraciones, mantenimientos e instalaciones </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area wow fadeInUp" data-wow-delay="0.6s">
                        <img src="img/icons/emergency-call.png" alt="">
                        <h5>Asesoramiento</h5>
                        <p>Si usted desea adquirir un equipo médico especializado, nosotros ponemos a su disposición la asistencia oportuna con el fin de ofrecer las mejores opciones según su requerimiento.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="single-service-area">
                        <img src="img/icons/medicine.png" alt="">
                        <h5>Visita Tecnica</h5>
                        <p>Ofrecemos el servicio de mantenimiento y reparación de los equipos médicos que ofertamos, así garantizamos la vida útil de los productos que entregamos a nuestros clientes.</p>
                    </div>
                </div>

                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.9s">
                    <a href="#" class="btn medica-btn">Mas Servicios</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Services Area End ***** -->

    <!-- ***** Doctors Area Start ***** -->
    <section class="medica-doctors-area section_padding_100_20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading">
                        <img src="img/icons/doctor.png" alt="">
                        <h2>Nuestros Equipos</h2>
                        <p>Tenemos Profesionales capacitados comprometidos con un servicio de calidad</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-doctor-area">
                        <div class="doctor-thumbnail">
                            <img src="img/bg-img/d1.jpg" alt="">
                        </div>
                        <div class="doctor-meta">
                            <h5>Dr. Melissa Smith</h5>
                            <h6>Cardiologist</h6>
                            <div class="doctor-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-doctor-area">
                        <div class="doctor-thumbnail">
                            <img src="img/bg-img/d2.jpg" alt="">
                        </div>
                        <div class="doctor-meta">
                            <h5>Dr. Josh Henderson</h5>
                            <h6>Plastic Surgeon</h6>
                            <div class="doctor-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-doctor-area">
                        <div class="doctor-thumbnail">
                            <img src="img/bg-img/d3.jpg" alt="">
                        </div>
                        <div class="doctor-meta">
                            <h5>Dr. Christinne Jones</h5>
                            <h6>Pediatrist</h6>
                            <div class="doctor-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-doctor-area">
                        <div class="doctor-thumbnail">
                            <img src="img/bg-img/d4.jpg" alt="">
                        </div>
                        <div class="doctor-meta">
                            <h5>Dr. William Stan</h5>
                            <h6>General Practicioner</h6>
                            <div class="doctor-social-info">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Doctors Area End ***** -->

    <!-- ***** Testimonials Area Start 
    <section class="medica-testimonials-area section_padding_100 bg-img background-overlay" style="background-image: url(img/bg-img/hero2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading white-heading">
                        
                        <h2>Opiniones</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonials-slider owl-carousel">
            
            <div class="single-testimonial-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h6>“ Phasellus at nunc orci. Donec ipsum metus, pharetra quis nunc sit amet, maximus vehicula nibh. Praesent pulvinar porta elit, a commodo erat accumsan sed. Vivamus vel tristique nibh. Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. ”</h6>
                            <div class="testimonial-given-author-info">
                                <img src="img/bg-img/testimonials2.jpg" alt="">
                                <h6>Julia Smith</h6>
                                <p>Pacient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="single-testimonial-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h6>“ Phasellus at nunc orci. Donec ipsum metus, pharetra quis nunc sit amet, maximus vehicula nibh. Praesent pulvinar porta elit, a commodo erat accumsan sed. Vivamus vel tristique nibh. Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. ”</h6>
                            <div class="testimonial-given-author-info">
                                <img src="img/bg-img/testimonials2.jpg" alt="">
                                <h6>Julia Smith</h6>
                                <p>Pacient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="single-testimonial-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h6>“ Phasellus at nunc orci. Donec ipsum metus, pharetra quis nunc sit amet, maximus vehicula nibh. Praesent pulvinar porta elit, a commodo erat accumsan sed. Vivamus vel tristique nibh. Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque. ”</h6>
                            <div class="testimonial-given-author-info">
                                <img src="img/bg-img/testimonials2.jpg" alt="">
                                <h6>Julia Smith</h6>
                                <p>Pacient</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     Testimonials Area End ***** -->

   

    <!-- ***** Appointment Area Start ***** -->
    <section class="medica-book-an-appointment-area section_padding_100_0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="medica-appointment-card">
                        <h5>Agenda cita</h5>

                        <form>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control text-white" name="nombreB" id="nombreB" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        
                                        <select class="form-control" id="serviciosB">
                                            
                                            <option>Servicio Tecnico</option>
                                            <option>Servicio IT</option>
                                            <option>Aplicaciones</option>
                                            <option>Visita Tecnica</option>
                                            <option>Servicio remoto</option>
                                            <option>Asesoramiento</option>
                                            <option>Consulta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="celularB" id="celularB" placeholder="Celular">
                                    </div>
                                </div>
                                <!--<div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        <select class="form-control" id="doctors">
                                            <option>Dr. Riyadh Khan</option>
                                            <option>Dr. Kumkum Rashid</option>
                                            <option>Dr. Lim Sarah</option>
                                        </select>
                                    </div>
                                </div>-->
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="emailB" id="emailB" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <input type="date" class="form-control" name="fechaB" id="fechaB">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="button" onclick="correoB();" class="btn medica-btn mt-15">Consultenos</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="medica-appointment-thumb">
                        <img src="imagenes/grupal.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Appointment Area End ***** -->

    <!-- ***** Partners Area Start ***** -->
    <div class="medica-our-partners-area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="our-partners-logo d-flex align-items-center justify-content-between">
                        <a href="#"><img src="img/partners-img/1.png" alt=""></a>
                        <a href="#"><img src="img/partners-img/2.png" alt=""></a>
                        <a href="#"><img src="img/partners-img/3.png" alt=""></a>
                        <a href="#"><img src="img/partners-img/4.png" alt=""></a>
                        <a href="#"><img src="img/partners-img/5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Partners Area End ***** -->

   <!---Footer Starts--->
   <?php include "php/footer.php";?>
	<!---Footer Ends--->

     <!-- JAVACRIPT POR DEFECTO -->
    <?php require_once 'php/js.php'; ?>


    <!-- boton whatsapp -->
    <div class="fixed-tabs-Whats">
  <div class="aba-whatsphone">
    <div class="aba-whatsphone-icone">
      <a target="_blank" href="https://api.whatsapp.com/send?phone=593990068908">Contactanos <br><strong>por Whatsapp</strong></a>          
    </div>
  </div>          
</div>


</body>

</html>