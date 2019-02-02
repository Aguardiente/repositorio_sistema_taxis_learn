<?php 
session_start();
date_default_timezone_set('Canada/Atlantic');
include("../../conector/conectadorSQL.php");
  $nit_ci = $_POST['nit_ci'];
    
    $nombre = $_POST['nombre'];
    
    $apellido = $_POST['apellido'];
    
    $razon_social = $_POST['razon_social'];
    
    $direccion = $_POST['direccion'];
    
    $celular = $_POST['celular'];
    
    $telefono = $_POST['telefono'];  
  
    $ID_cliente = $_POST['ID_cliente'];
  
  $cadena= '';
       if($nit_ci!='')
       {
       $query = mysqli_query($conectador,"UPDATE `cliente` SET `nit_ci` = '$nit_ci' WHERE `ID_cliente` = $ID_cliente");$cadena.=' Se edito nit_ci , ';
       } 
       if($nombre!='')
       {
       $query = mysqli_query($conectador,"UPDATE `cliente` SET `nombre` = '$nombre' WHERE `ID_cliente` = $ID_cliente");$cadena.=' Se edito nombre , ';
       } 
       if($apellido!='')
       {
       $query = mysqli_query($conectador,"UPDATE `cliente` SET `apellido` = '$apellido' WHERE `ID_cliente` = $ID_cliente");$cadena.=' Se edito apellido , ';
       } 
       if($razon_social!='')
       {
       $query = mysqli_query($conectador,"UPDATE `cliente` SET `razon_social` = '$razon_social' WHERE `ID_cliente` = $ID_cliente");$cadena.=' Se edito razon_social , ';
       } 
       if($direccion!='')
       {
       $query = mysqli_query($conectador,"UPDATE `cliente` SET `direccion` = '$direccion' WHERE `ID_cliente` = $ID_cliente");$cadena.=' Se edito direccion , ';
       } 
       if($celular!='')
       {
       $query = mysqli_query($conectador,"UPDATE `cliente` SET `celular` = '$celular' WHERE `ID_cliente` = $ID_cliente");$cadena.=' Se edito celular , ';
       } 
       if($telefono!='')
       {
       $query = mysqli_query("UPDATE `cliente` SET `telefono` = '$telefono' WHERE `ID_cliente` = $ID_cliente");$cadena.=' Se edito telefono , ';
       } 


       $query = mysqli_query($conectador,"UPDATE `cliente` SET `fecha` = '".date('d/m/y')."' WHERE `ID_cliente` = $ID_cliente");$cadena.=' Se edito fecha , ';



       $query = mysqli_query($conectador, "UPDATE `cliente` SET `hora` = '".date('g:ia')."' WHERE `ID_cliente` = $ID_cliente");$cadena.=' Se edito hora , ';

echo "<script>verClientes();</script>";

//echo $qry;

?>