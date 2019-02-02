
  <?php 

  require('../conector/conexion.php');
 
    $id_cliente = $_POST['id_cliente'];
    
    $celular = $_POST['celular'];
    
    $telefono = $_POST['telefono'];
    
    $fecha_inicio = $_POST['fecha_inicio'];
    
    $fecha_fin = $_POST['fecha_fin'];
    
    $hora = $_POST['hora'];
    
    $ID_reporte = $_POST['ID_reporte'];
  
  $cadena= '';
       if($id_cliente!='')
       {
       $query = mysql_query("UPDATE `reporte` SET `id_cliente` = '$id_cliente' WHERE `ID_reporte` = $ID_reporte");$cadena.=' Se edito id_cliente , ';
       } 
       if($celular!='')
       {
       $query = mysql_query("UPDATE `reporte` SET `celular` = '$celular' WHERE `ID_reporte` = $ID_reporte");$cadena.=' Se edito celular , ';
       } 
       if($telefono!='')
       {
       $query = mysql_query("UPDATE `reporte` SET `telefono` = '$telefono' WHERE `ID_reporte` = $ID_reporte");$cadena.=' Se edito telefono , ';
       } 
       if($fecha_inicio!='')
       {
       $query = mysql_query("UPDATE `reporte` SET `fecha_inicio` = '$fecha_inicio' WHERE `ID_reporte` = $ID_reporte");$cadena.=' Se edito fecha_inicio , ';
       } 
       if($fecha_fin!='')
       {
       $query = mysql_query("UPDATE `reporte` SET `fecha_fin` = '$fecha_fin' WHERE `ID_reporte` = $ID_reporte");$cadena.=' Se edito fecha_fin , ';
       } 
       if($hora!='')
       {
       $query = mysql_query("UPDATE `reporte` SET `hora` = '$hora' WHERE `ID_reporte` = $ID_reporte");$cadena.=' Se edito hora , ';
       }  
   if($cadena!='')
   {
      ?>
      <div class='alert alert-success' role='alert'>
      <strong> CAMBIOS!! </strong> actualizados de <?php echo $cadena; ?>
      </div><?php

   }
   else
   { 
     ?>
     <div class='alert alert-danger' role='alert'>
     <strong>ALERTA! </strong> Debes ingresar datos validos.
     </div><?php
   }

  ?>
