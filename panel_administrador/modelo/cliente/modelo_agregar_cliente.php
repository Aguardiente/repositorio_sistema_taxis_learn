<?php 
session_start();
  $nit_ci= $_POST['nit_ci']; 
  $nombre= $_POST['nombre']; 
  $apellido= $_POST['apellido']; 
  $razon_social= $_POST['razon_social']; 
  $direccion= $_POST['direccion']; 
  $celular= $_POST['celular']; 
  $telefono= $_POST['telefono']; 
  date_default_timezone_set('Canada/Atlantic');
  include("../../conector/conectadorSQL.php");
  $sql="INSERT INTO `cliente` (`ID_cliente`,`nit_ci` ,`nombre` ,`apellido` ,`razon_social` ,`direccion` ,`celular` ,`telefono` ,`fecha` ,`hora` ) VALUES (NULL, '$nit_ci' , '$nombre' , '$apellido' , '$razon_social' , '$direccion' , '$celular' , '$telefono' , '".date('y/m/d')."' , '".date('g:ia')."' )"; 

mysqli_query($conectador,$sql);
echo "<script>verClientes();</script>";

?>