
 <?php
 
  $razon_social= $_POST['razon_social']; 
  $encargado= $_POST['encargado']; 
  $nit= $_POST['nit']; 
  $num_autorizacion= $_POST['num_autorizacion']; 
  $fecha_limite= $_POST['fecha_limite']; 
   
  require('../../conector/conectadorSQL.php');
    date_default_timezone_set('America/Caracas');
  $sql=mysqli_query($conectador, "INSERT INTO `empresa` (`ID_empresa`,`razon_social` ,`encargado` ,`nit` ,`num_autorizacion` ,`fecha_limite` ,`fecha` ,`hora` ) VALUES (NULL, '$razon_social' , '$encargado' , '$nit' , '$num_autorizacion' , '$fecha_limite' , '".date('d/m/y')."' , '".date('g:ia')."' )"); 

      echo "<script>verEmpresas();</script>";
    ?>
