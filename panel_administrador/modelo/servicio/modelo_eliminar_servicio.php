
  <?php
  $ID_servicio = $_POST['idSerElim'];
  include("../../conector/conectadorSQL.php"); 
  
  $query = mysqli_query($conectador,"DELETE FROM `servicio` WHERE `ID_servicio` =$ID_servicio");


  echo "<script>verServicios();</script>";

  
  ?>
  
