
  <?php
  $ID_tipo = $_POST['idTpElim'];
  include("../../conector/conectadorSQL.php");
  
  $query = mysqli_query($conectador,"DELETE FROM `tipo` WHERE `ID_tipo` =$ID_tipo");
  echo "<script>verTipos();</script>";  
  ?>
  
