
 <?php
 
  $servicio= $_POST['servicio']; 
  $chofer= $_POST['chofer']; 
  $cliente= $_POST['cliente']; 
  $descripcion= $_POST['descripcion']; 
  $tipo= $_POST['tipo']; 
  $total= $_POST['total']; 
  $pago= $_POST['pago']; 
  $saldo= $_POST['saldo']; 
//  $fecha= $_POST['fecha']; 
//  $hora= $_POST['hora']; //$fecha = cambiaf_a_mysql($fecha);
   
include("../../conector/conectadorSQL.php");
  $sql=mysqli_query($conectador,"INSERT INTO `servicio` (`ID_servicio`,`servicio` ,`chofer` ,`cliente` ,`descripcion` ,`tipo` ,`total` ,`pago` ,`saldo` ,`fecha` ,`hora` ) VALUES (NULL, '$servicio' , '$chofer' , '$cliente' , '$descripcion' , '$tipo' , '$total' , '$pago' , '$saldo' , '".date('d/m/y')."' , '".date('g:ia')."' )"); 

 echo "<script>verServicios();</script>";

    ?>
