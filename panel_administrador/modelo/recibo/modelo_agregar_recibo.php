<?php
   $servicio= $_POST['servicio']; 
  $chofer= $_POST['chofer']; 
  $cliente= $_POST['cliente']; 
  $descripcion= $_POST['descripcion']; 
  $tipo= $_POST['tipo']; 
  $total= $_POST['total']; 
  $pago= $_POST['pago']; 
  $saldo= $_POST['saldo']; 
  $nit_cliente= $_POST['nit_cliente']; 

  include("../../conector/conectadorSQL.php");
  date_default_timezone_set('America/Caracas');
  $sql=mysqli_query($conectador,"INSERT INTO `Factura` (`ID_Factura`,`servicio` ,`chofer` ,`cliente` ,`descripcion` ,`tipo` ,`total` ,`pago` ,`saldo` ,`nit_cliente` ,`fecha_emision`, `hora` ) VALUES (NULL, '$servicio' , '$chofer' , '$cliente' , '$descripcion' , '$tipo' , '$total' , '$pago' , '$saldo' , '$nit_cliente' , '".date('d/m/y')."' , '".date('g:ia')."' )"); 
  echo "<script>verRecibos();</script>";
?>