
  <?php 

include("../../conector/conectadorSQL.php");
 
    $servicio = $_POST['servicio'];
    
    $chofer = $_POST['chofer'];
    
    $cliente = $_POST['cliente'];
    
    $descripcion = $_POST['descripcion'];
    
    $tipo = $_POST['tipo'];
    
    $total = $_POST['total'];
    
    $pago = $_POST['pago'];
    
    $saldo = $_POST['saldo'];    
  
    $ID_servicio = $_POST['idSerMod'];
  
  $cadena= '';
       if($servicio!='')
       {
       $query = mysqli_query($conectador,"UPDATE `servicio` SET `servicio` = '$servicio' WHERE `ID_servicio` = $ID_servicio");$cadena.=' Se edito servicio , ';
       } 
       if($chofer!='')
       {
       $query = mysqli_query($conectador,"UPDATE `servicio` SET `chofer` = '$chofer' WHERE `ID_servicio` = $ID_servicio");$cadena.=' Se edito id_chofer , ';
       } 
       if($cliente!='')
       {
       $query = mysqli_query($conectador,"UPDATE `servicio` SET `cliente` = '$cliente' WHERE `ID_servicio` = $ID_servicio");$cadena.=' Se edito id_cliente , ';
       } 
       if($descripcion!='')
       {
       $query = mysqli_query($conectador,"UPDATE `servicio` SET `descripcion` = '$descripcion' WHERE `ID_servicio` = $ID_servicio");$cadena.=' Se edito descripcion , ';
       } 
       if($tipo!='')
       {
       $query = mysqli_query($conectador,"UPDATE `servicio` SET `tipo` = '$tipo' WHERE `ID_servicio` = $ID_servicio");$cadena.=' Se edito tipo , ';
       } 
       if($total!='')
       {
       $query = mysqli_query($conectador,"UPDATE `servicio` SET `total` = '$total' WHERE `ID_servicio` = $ID_servicio");$cadena.=' Se edito total , ';
       } 
       if($pago!='')
       {
       $query = mysqli_query($conectador,"UPDATE `servicio` SET `pago` = '$pago' WHERE `ID_servicio` = $ID_servicio");$cadena.=' Se edito pago , ';
       } 
       if($saldo!='')
       {
       $query = mysqli_query($conectador,"UPDATE `servicio` SET `saldo` = '$saldo' WHERE `ID_servicio` = $ID_servicio");$cadena.=' Se edito saldo , ';
       } 

       $query = mysqli_query($conectador,"UPDATE `servicio` SET `fecha` = '".date('d/m/y')."' WHERE `ID_servicio` = $ID_servicio");$cadena.=' Se edito fecha , ';

       $query = mysqli_query($conectador,"UPDATE `servicio` SET `hora` = '".date('g:ia')."' WHERE `ID_servicio` = $ID_servicio");$cadena.=' Se edito hora , ';

      echo "<script>verServicios();</script>";

  ?>
