<?php
$servicio = '';
$tipoServicio = $_POST['ser'];
if($tipoServicio == 1){
     $servicio = '<iframe id="iframe" src="view/acesoramiento.php" height="100%" width="100%"></iframe>';
      echo  json_encode($servicio);
}

if($tipoServicio == 2){
    $servicio = '<iframe id="iframe" src="view/aplicacion.php" height="100%" width="100%"></iframe>';
      echo json_encode($servicio);
}

if($tipoServicio == 3){
    $servicio = '<iframe id="iframe" src="view/consulta.php" height="100%" width="100%"></iframe>';
      echo json_encode($servicio);
}

if($tipoServicio == 4){
    $servicio = '<iframe id="iframe" src="view/servicio_it.php" height="100%" width="100%"></iframe>';
      echo json_encode($servicio);
}

if($tipoServicio == 5){
    $servicio = '<iframe id="iframe" src="view/servicio_reomoto.php" height="100%" width="100%"></iframe>';
      echo json_encode($servicio);
}

if($tipoServicio == 6){
    $servicio = '<iframe id="iframe" src="view/servicio_tecnico.php" height="100%" width="100%"></iframe>';
      echo json_encode($servicio);
}