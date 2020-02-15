<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servicios</title>
    <!--  ESTILOS DE CSS QUE VIENE POR DEFECTO -->
    <?php require_once 'php/css.php'; ?>
    <link rel = "stylesheet"
   type = "text/css" href = "css/servicio.css" />
    <!-- FIN DE LOS ESTILOS CSS-->
</head>
<script type="text/javascript">
function consulta(ele){
    //alert(ele);
    
    var parametros = {
        "ser" : ele  
    };    
    $.ajax({
        data:  parametros,
        url:   'php/opc_servicio.php',
        type:  'post',
        dataType: "json",
        success:  function (response) {
            //alert(response);
            document.getElementById("infra").innerHTML = response;
        }
    });
}

</script>
<body>
     <!-- ***** Header Area Start ***** -->
   <?php include "php/menu.php";?>
    <!--***** Header Area End ***** -->

    <section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(<!---->);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <!-- Title -->
                        <h3 class="breadcumb-title">Servicios</h3>
                        <!-- Breadcumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Servicios</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <br/>
    

    <div class="servicio">
		
			<!-- tabs -->
			<div class="sky-tabs sky-tabs-pos-left sky-tabs-anim-flip sky-tabs-response-to-icons">
				<input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
				<label for="sky-tab1"><span><span><i class="fa fa-bolt"></i>Servicio Tecnico</span></span></label>
				
				<input type="radio" name="sky-tabs" id="sky-tab2" class="sky-tab-content-2">
				<label for="sky-tab2"><span><span><i class="fa fa-picture-o"></i>Servicio Remoto</span></span></label>
				
				<input type="radio" name="sky-tabs" id="sky-tab3" class="sky-tab-content-3">
				<label for="sky-tab3"><span><span><i class="fa fa-cogs"></i>Asesoria</span></span></label>
				
				<input type="radio" name="sky-tabs" id="sky-tab4" class="sky-tab-content-4">
				<label for="sky-tab4"><span><span><i class="fa fa-globe"></i>Aplicaciones</span></span></label>
				
				<ul>
					<li class="sky-tab-content-1">					
						<div class="typography">
              <h1>Servicio Tecnico</h1>
              <img src="imagenes/tecnico.jpg" border="1" alt="Este es el ejemplo de un texto alternativo" width="400" height="300">
							
							<h4>Preinstalación:</h4>
Nos encargamos de facilitar el proceso de la instalación de todos los equipos para Banco de Sangre y Laboratorio Clínico.

<h4>Instalación:</h4>
Nos encargamos de la instalación de todo el equipamiento para Banco de Sangre y Laboratorio Clínico. Y constantemente hacemos la verificación de que todos los equipos esten en buen estado.

<h4> Preventivo:</h4>
Nuestro servicio de Mantenimiento Preventivo le garantiza una productividad continua, amplía la vida del equipo y permite que este funcione. Suele tener un carácter sistemático, es decir, se interviene aunque el equipo no haya dado ningún síntoma de tener un problema.

<h4> Correctivo: </h4>
 En nuestro servicio de Mantenimiento Correctivo, nos encargamos de corregir los defectos observados en los equipamientos para Banco de Sangre, es la forma más básica de mantenimiento. Localizamos las averías o defectos para corregirlos y repararlos.

<h4> Stock de Repuestos: </h4>
La empresa cuenta con un amplio stock de repuestos y un rápido servicio de asistencia de todos los ingenieros que constantemente se capacitan para atender todos los requerimientos presentados.</p>
							
						</div>
					</li>
					
					<li class="sky-tab-content-2">
						<div class="typography">
							<h1>Servicio Remoto</h1>
							<img src="imagenes/remoto.jpg" border="1" alt="Este es el ejemplo de un texto alternativo" width="400" height="300">
							<p>le ofrece servicios de soporte informatico y asistencia técnica ante cualquier tipo de averia (hardware o software) , adaptados a su Empresa y a un precio realmente competitivo que abarcan:</p>
<ul>
<li>Soporte Online</li>
<li>Soporte Técnico de Software.</li>
<li>Reparaciones Técnicas.</li>
<li>Contratos de mantenimiento.</li>
<li>Reinstalacion de Software.</li>
<li>Politicas de Seguridad.</li>

</ul>
						
						</div>
					</li>
					
					<li class="sky-tab-content-3">
						<div class="typography">
							<h1>Asesoria</h1>
							<img src="imagenes/asesoria.jpg" border="1" alt="Este es el ejemplo de un texto alternativo" width="400" height="300">
							<p>Contamos con un equipo de profesionales altamente adiestrados en el área técnica y de negocios que pueden asesorar y brindar capacitación específica a nuestros clientes en cada una de las líneas y productos que manejamos. De esta manera garantizamos nuestros equipos contra cualquier defecto de fabricación y el óptimo desempeño de cada uno de ellos. La experiencia de 14 años y cientos de clientes satisfechos nos avalan.</p>
							
						</div>
					</li>
					
					<li class="sky-tab-content-4">
						<div class="typography">
              <h1>Aplicaciones</h1>
              <img src="imagenes/app.jpg" border="1" alt="Este es el ejemplo de un texto alternativo" width="400" height="300">
							<p>Nuestra pasión es introducir las nuevas tecnologías en el área de la Salud. Pero más importante aún, es mejorar la calidad de vida de las personas con ello.</p>
							<p> Desarrollamos Apps móviles médicas con tecnologías emergentes y procesos como la Gamificación, los Serious Games y el Learning by doing.</p>
							
						</div>
					</li>					
				</ul>
			</div>
			<!--/ tabs -->
			
		</div>
        <!--<iframe id="iframe" src="view/acesoramiento.php" height="100%" width="100%"></iframe>-->
    

   
    <br/>


       <!---Footer Starts--->
   <?php include "php/footer.php";?>
	<!---Footer Ends--->

    <!-- JAVACRIPT POR DEFECTO -->
    <?php require_once 'php/js.php'; ?>
    <script src="js/servicio.js"></script>
</body>
</html>