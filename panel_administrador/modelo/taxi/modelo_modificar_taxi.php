
  <?php 

include("../../conector/conectadorSQL.php");
 
  
  $nro_movil= $_POST['nro_movil']; 
  $placa= $_POST['placa']; 
  $descripcion= $_POST['descripcion']; 
  $marca= $_POST['marca']; 
  $modelo= $_POST['modelo']; 
  $ID_taxi = $_POST['idTaxMod'];
  
  $cadena= '';

       if($nro_movil!='')
       {
       $query = mysqli_query($conectador,"UPDATE `taxi` SET `numero_movil` = '$nro_movil' WHERE `ID_taxi` = $ID_taxi");$cadena.=' Se edito numero_movil , ';
       } 
       if($placa!='')
       {
       $query = mysqli_query($conectador,"UPDATE `taxi` SET `placa` = '$placa' WHERE `ID_taxi` = $ID_taxi");$cadena.=' Se edito placa , ';
       } 
       if($descripcion!='')
       {
       $query = mysqli_query($conectador,"UPDATE `taxi` SET `descripcion` = '$descripcion' WHERE `ID_taxi` = $ID_taxi");$cadena.=' Se edito descripcion , ';
       } 
       if($marca!='')
       {
       $query = mysqli_query($conectador,"UPDATE `taxi` SET `marca` = '$marca' WHERE `ID_taxi` = $ID_taxi");$cadena.=' Se edito marca , ';
       } 
       if($modelo!='')
       {
       $query = mysqli_query($conectador,"UPDATE `taxi` SET `modelo` = '$modelo' WHERE `ID_taxi` = $ID_taxi");$cadena.=' Se edito modelo , ';
       } 
       $query = mysqli_query($conectador,"UPDATE `taxi` SET `fecha` = '".date('y/m/d')."' WHERE `ID_taxi` = $ID_taxi");$cadena.=' Se edito fecha , ';
       $query = mysqli_query($conectador,"UPDATE `taxi` SET `hora` = '".date('g:ia')."' WHERE `ID_taxi` = $ID_taxi");$cadena.=' Se edito hora , ';

      echo "<script>verTaxis();</script>";

  ?>
