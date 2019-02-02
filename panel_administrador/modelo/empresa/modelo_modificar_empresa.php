
  <?php 

  require('../../conector/conectadorSQL.php');
 
    $razon_social = $_POST['razon_social'];
    
    $encargado = $_POST['encargado'];
    
    $nit = $_POST['nit'];
    
    $num_autorizacion = $_POST['num_autorizacion'];
    
    $fecha_limite = $_POST['fecha_limite'];
    
    $ID_empresa = $_POST['ID_empresa'];
  
  $cadena= '';
       if($razon_social!='')
       {
       $query = mysqli_query($conectador,"UPDATE `empresa` SET `razon_social` = '$razon_social' WHERE `ID_empresa` = $ID_empresa");$cadena.=' Se edito razon_social , ';
       } 
       if($encargado!='')
       {
       $query = mysqli_query($conectador,"UPDATE `empresa` SET `encargado` = '$encargado' WHERE `ID_empresa` = $ID_empresa");$cadena.=' Se edito encargado , ';
       } 
       if($nit!='')
       {
       $query = mysqli_query($conectador,"UPDATE `empresa` SET `nit` = '$nit' WHERE `ID_empresa` = $ID_empresa");$cadena.=' Se edito nit , ';
       } 
       if($num_autorizacion!='')
       {
       $query = mysqli_query($conectador,"UPDATE `empresa` SET `num_autorizacion` = '$num_autorizacion' WHERE `ID_empresa` = $ID_empresa");$cadena.=' Se edito num_autorizacion , ';
       } 
       if($fecha_limite!='')
       {
       $query = mysqli_query($conectador,"UPDATE `empresa` SET `fecha_limite` = '$fecha_limite' WHERE `ID_empresa` = $ID_empresa");$cadena.=' Se edito fecha_limite , ';
       } 
       if($fecha!='')
       {
       $query = mysqli_query($conectador,"UPDATE `empresa` SET `fecha` = '$fecha' WHERE `ID_empresa` = ".date('d/m/y')." ");$cadena.=' Se edito fecha , ';
       } 
       if($hora!='')
       {
       $query = mysqli_query($conectador,"UPDATE `empresa` SET `hora` = '$hora' WHERE `ID_empresa` = ".date('g:ia')." ");$cadena.=' Se edito hora , ';
       }  

  echo "<script>verEmpresas();</script>";
  ?>
