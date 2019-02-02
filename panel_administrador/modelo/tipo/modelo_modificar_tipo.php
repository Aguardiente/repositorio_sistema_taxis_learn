
  <?php 

include("../../conector/conectadorSQL.php");
 
    $tipo_taxi = $_POST['tipo_taxi'];

    $ID_tipo = $_POST['idTpMod'];
  
  $cadena= '';
       if($tipo_taxi!='')
       {
       $query = mysqli_query($conectador,"UPDATE `tipo` SET `tipo_taxi` = '$tipo_taxi' WHERE `ID_tipo` = $ID_tipo");$cadena.=' Se edito tipo_taxi , ';
       } 
       $query = mysqli_query($conectador,"UPDATE `tipo` SET `fecha` = '".date('d/m/y')."' WHERE `ID_tipo` = $ID_tipo");$cadena.=' Se edito fecha , ';
       $query = mysqli_query($conectador,"UPDATE `tipo` SET `hora` = '".date('g:ia')."' WHERE `ID_tipo` = $ID_tipo");$cadena.=' Se edito hora , ';

  echo "<script>verTipos();</script>";

  ?>
