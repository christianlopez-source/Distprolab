 <?php include_once 'variables.php'; ?>

 <!-- Preloader -->
 <div id="preloader">
        <div class="medica-load"></div>
        <img src="<?php echo $url_base; ?>logo/ico.png" alt="logo">
 </div>

 <header class="header-area">
 <!-- Main Header Area -->
 <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="<?php echo $url_base; ?>index.php"><img src="<?php echo $url_base; ?>logo/LOGO DISTPROLAB.png" alt="Logo"></a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medicaMenu" aria-controls="medicaMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

                                <div class="collapse navbar-collapse" id="medicaMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="<?php echo $url_base; ?>index.php">Inicio <span class="sr-only">(current)</span></a>
                                        </li>
                                        <!--<li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="<?php //echo $url_base; ?>servicios/servicio_tecnico.php">Servicio Tecnico</a>
                                                <a class="dropdown-item" href="<?php //echo $url_base; ?>servicios/servicio_it.php">Servicio IT</a>
                                                <a class="dropdown-item" href="<?php //echo $url_base; ?>servicios/aplicacion.php">Aplicaciones</a>
                                                
                                                <a class="dropdown-item" href="<?php //echo $url_base; ?>servicios/servicio_remoto.php">Servicio Remoto</a>
                                                <a class="dropdown-item" href="<?php// echo $url_base; ?>servicios/acesoramiento.php">Asesoramiento</a>
                                                <a class="dropdown-item" href="<?php //echo $url_base; ?>servicios/consulta.php">Consulta</a>
                                                
                                            </div>
                                        </li>-->
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $url_base; ?>about-us.php">Nosotros</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $url_base; ?>servicios.php">Servicios</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $url_base; ?>gallery.php">Galeria</a>
                                        </li>
                                        <!--<li class="nav-item">
                                            <a class="nav-link" href="<?php echo $url_base; ?>blog.php">Novedades</a>
                                        </li>-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $url_base; ?>contact.php">Contacto</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- Search Form -->
                                    <!--<div class="header-search-form ml-auto">
                                        <form action="#">
                                            <input type="search" class="form-control" placeholder="Input your keyword then press enter..." id="search" name="search">
                                            <input class="d-none" type="submit" value="submit">
                                        </form>
                                    </div>-->
                                    <!-- Search btn -->
                                    
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </header>