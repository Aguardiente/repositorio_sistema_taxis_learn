
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
       
    $nit_cliente = $_POST['nit_cliente'];

    $ID_Factura = $_POST['idRecMod'];
  
  $cadena= '';
       if($servicio!='')
       {
       $query = mysqli_query($conectador,"UPDATE `Factura` SET `servicio` = '$servicio' WHERE `ID_Factura` = $ID_Factura");$cadena.=' Se edito servicio , ';
       } 
       if($chofer!='')
       {
       $query = mysqli_query($conectador,"UPDATE `Factura` SET `chofer` = '$chofer' WHERE `ID_Factura` = $ID_Factura");$cadena.=' Se edito chofer , ';
       } 
       if($cliente!='')
       {
       $query = mysqli_query($conectador,"UPDATE `Factura` SET `cliente` = '$cliente' WHERE `ID_Factura` = $ID_Factura");$cadena.=' Se edito id_cliente , ';
       } 
       if($descripcion!='')
       {
       $query = mysqli_query($conectador,"UPDATE `Factura` SET `descripcion` = '$descripcion' WHERE `ID_Factura` = $ID_Factura");$cadena.=' Se edito descripcion , ';
       } 
       if($tipo!='')
       {
       $query = mysqli_query($conectador,"UPDATE `Factura` SET `tipo` = '$tipo' WHERE `ID_Factura` = $ID_Factura");$cadena.=' Se edito tipo , ';
       } 
       if($total!='')
       {
       $query = mysqli_query($conectador,"UPDATE `Factura` SET `total` = '$total' WHERE `ID_Factura` = $ID_Factura");$cadena.=' Se edito total , ';
       } 
       if($pago!='')
       {
       $query = mysqli_query($conectador,"UPDATE `Factura` SET `pago` = '$pago' WHERE `ID_Factura` = $ID_Factura");$cadena.=' Se edito pago , ';
       } 
       if($saldo!='')
       {
       $query = mysqli_query($conectador,"UPDATE `Factura` SET `saldo` = '$saldo' WHERE `ID_Factura` = $ID_Factura");$cadena.=' Se edito saldo , ';
       } 
       if($nit_cliente!='')
       {
       $query = mysqli_query($conectador,"UPDATE `Factura` SET `nit_cliente` = '$nit_cliente' WHERE `ID_Factura` = $ID_Factura");$cadena.=' Se edito nit_cliente , ';
       } 
       $query = mysqli_query($conectador,"UPDATE `Factura` SET `fecha_emision` = '".date('y/m/d')."' WHERE `ID_Factura` = $ID_Factura");$cadena.=' Se edito fecha_emision , ';
       $query = mysqli_query($conectador,"UPDATE `Factura` SET `hora` = '".date('g:ia')."' WHERE `ID_Factura` = $ID_Factura");$cadena.=' Se edito hora , ';
  
  echo "<script>verRecibos();</script>";

  ?>
