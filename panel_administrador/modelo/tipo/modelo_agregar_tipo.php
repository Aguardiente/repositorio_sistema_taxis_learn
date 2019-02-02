
 <?php
 
  $tipo_taxi= $_POST['tipo_taxi']; 
//  $fecha= $_POST['fecha']; 
//  $hora= $_POST['hora']; //$fecha = cambiaf_a_mysql($fecha);
   
  include("../../conector/conectadorSQL.php");
  date_default_timezone_set('America/Caracas');
  $sql=mysqli_query($conectador,"INSERT INTO `tipo` (`ID_tipo`,`tipo_taxi` ,`fecha` ,`hora` ) VALUES (NULL, '$tipo_taxi' , '".date('d/m/y')."' , '".date('g:ia')."' )"); 
echo "<script>verTipos();</script>";

    ?>
