
 <?php
 
  $modelo= $_POST['modelo']; 
  $nro_movil= $_POST['nro_movil']; 
  $placa= $_POST['placa']; 
  $descripcion= $_POST['descripcion']; 
  $marca= $_POST['marca']; 

  include("../../conector/conectadorSQL.php");
  date_default_timezone_set('America/Caracas');
  $sql=mysqli_query($conectador,"INSERT INTO `taxi` (`ID_taxi`, `numero_movil` ,`placa` , `modelo` ,`marca` , `descripcion`,`fecha` ,`hora` ) VALUES (NULL, '$nro_movil' , '$placa' , '$modelo' , '$marca' , '$descripcion', '".date('d/m/y')."' , '".date('g:ia')."' )"); 

echo "<script>verTaxis();</script>";
    ?>
